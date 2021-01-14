<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index () {
        $images = Gallery::paginate(20);

        return view('app.backend.pages.gallery.index')->with('images', $images);
    }

    public function view (Gallery $id) {
        $collections = GalleryCollection::where('gallery_id', $id->id)->paginate(20);
        return view('app.backend.pages.gallery.collections')->with(['parent' => $id, 'collections' => $collections]);
    }

    public function create () {
        return view('app.backend.pages.gallery.create');
    }

    public function store (Request $request) {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('uploaded_file/gallery/'), $imageName);

        Gallery::create([
            'image' => $imageName,
            'name' => $request->name,
            'date' => $request->date,
        ]);
        return redirect()->route('gallery.index');
    }

    public function store_images(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('uploaded_file/gallery/collections/'), $imageName);

        GalleryCollection::create([
            'gallery_id' => $request->gallery_id,
            'image' => $imageName,
        ]);
        return back();
    }

    public function edit(Gallery $image)
    {
        return view('app.backend.pages.gallery.edit')->with('image', $image);
    }

    public function update(Request $request, Gallery $image)
    {
        if ($request->image) {
            File::delete(public_path('uploaded_file/gallery') . '/' . $image->image);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('uploaded_file/gallery/'), $imageName);

            $image->update([
                'image' => $imageName,
                'name' => $request->name,
                'date' => $request->date,
            ]);
        } else {
            $image->update([
                'name' => $request->name,
                'date' => $request->date,
            ]);
        }

        return redirect()->route('gallery.index');
    }

    public function delete(Gallery $image)
    {
        $collections = GalleryCollection::where('gallery_id', $image->id)->get();
        foreach ($collections as $col) {
            File::delete(public_path('uploaded_file/gallery/collections') . '/' . $col->image);
            GalleryCollection::find($col->id)->delete();
        }
        File::delete(public_path('uploaded_file/gallery') . '/' . $image->image);
        $image->delete();

        return back();
    }
}
