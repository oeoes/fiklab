<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Gallery;
use App\Models\HomePage;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomePageController extends Controller
{
    public function index()
    {
        $yt_prof = HomePage::first();
        $galleries = Gallery::latest()->limit(5)->get();
        $sliders = Slider::all();
        $activities = Activity::latest()->limit(5)->get();
        return view('app.backend.pages.home-page.index')->with(['y_p' => $yt_prof, 'sliders' => $sliders, 'galleries' => $galleries, 'activities' => $activities]);;
    }

    public function add_slider(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('uploaded_file/gallery/sliders/'), $imageName);

        Slider::create([
            'image' => $imageName,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);
        return redirect()->route('home.index');
    }

    public function add_slider_page()
    {
        return view('app.backend.pages.home-page.add-image');
    }

    public function delete_slider (Slider $slider) {
        File::delete(public_path('uploaded_file/gallery/sliders') . '/' . $slider->image);
        $slider->delete();

        return back();
    }

    public function add_video(Request $request)
    {
        $url = HomePage::first();

        $url->update([
            'youtube_url' => $request->youtube_url,
        ]);
        return redirect()->route('home.index');
    }

    public function add_video_page()
    {
        $current = HomePage::first();
        return view('app.backend.pages.home-page.youtube-url')->with('current', $current);
    }

    public function add_profile_tab(Request $request)
    {
        $url = HomePage::first();

        $url->update([
            'profile_section' => $request->title . '|' . $request->subtitle,
        ]);
        return redirect()->route('home.index');
    }

    public function add_profile_tab_page()
    {
        $current = HomePage::first();
        return view('app.backend.pages.home-page.profile-desc')->with('current', $current);
    }
}
