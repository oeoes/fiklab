<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AvailableClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LabProfileController extends Controller
{
    public function index () {
        $classes = AvailableClass::paginate(10);
        return view('app.backend.pages.profile.index')->with('classes', $classes);
    }

    public function create () {
        return view('app.backend.pages.profile.create');
    }

    public function store (Request $request) {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('uploaded_file/classes/'), $imageName);

        AvailableClass::create([
            'image' => $imageName,
            'class_name' => $request->class_name,
            'description' => $request->description,
            'courses' => $request->courses,
            'head_lab' => $request->head_lab,
            'technician' => $request->technician,
            'room' => $request->room,
            'capacity' => $request->capacity,
        ]);
        return redirect()->route('profile.index');
    }

    public function edit(AvailableClass $class)
    {
        return view('app.backend.pages.profile.edit')->with('class', $class);
    }

    public function update(Request $request, AvailableClass $class)
    {
        if ($request->image) {
            File::delete(public_path('uploaded_file/classes') . '/' . $class->image);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('uploaded_file/classes/'), $imageName);

            $class->update([
                'image' => $imageName,
                'class_name' => $request->class_name,
                'description' => $request->description,
                'courses' => $request->courses,
                'head_lab' => $request->head_lab,
                'technician' => $request->technician,
                'room' => $request->room,
                'capacity' => $request->capacity,
            ]);
        } else {
            $class->update([
                'class_name' => $request->class_name,
                'description' => $request->description,
                'courses' => $request->courses,
                'head_lab' => $request->head_lab,
                'technician' => $request->technician,
                'room' => $request->room,
                'capacity' => $request->capacity,
            ]);
        }

        return redirect()->route('profile.index');
        
    }

    public function delete(AvailableClass $class)
    {
            File::delete(public_path('uploaded_file/classes') . '/' . $class->image);
            $class->delete();
            
            return back();
    }
}
