<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\AvailableClass;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\GalleryCollection;
use App\Models\HomePage;
use App\Models\Internship;
use App\Models\SchedulePractice;
use App\Models\Slider;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index () {
        $yt_prof = HomePage::first();
        $galleries = Gallery::latest()->limit(5)->get();
        $sliders = Slider::all();
        $activities = Activity::latest()->limit(5)->get();
        return view('app.frontend.home.index')->with(['y_p' => $yt_prof, 'sliders' => $sliders, 'galleries' => $galleries, 'activities' => $activities]);;
    }

    public function profile () {
        $classes = AvailableClass::all();
        return view('app.frontend.profile.index')->with(['classes' => $classes]);
    }

    public function gallery () {
        $galleries = Gallery::paginate();
        return view('app.frontend.gallery.index')->with(['galleries' => $galleries]);
    }

    public function gallery_view(Gallery $id)
    {
        $collections = GalleryCollection::where('gallery_id', $id->id)->paginate(20);
        return view('app.frontend.gallery.detail')->with(['parent' => $id, 'collections' => $collections]);
    }

    public function info () {
        $activities = Activity::paginate();
        return view('app.frontend.info.index')->with(['activities' => $activities]);
    }

    public function info_view($id) {
        $activity = Activity::find($id);
        return view('app.frontend.info.detail')->with(['activity' => $activity]);
    }

    public function magang () {
        $internships = Internship::paginate();
        return view('app.frontend.magang.index')->with(['internships' => $internships]);
    }

    public function magang_view($id) {
        $internship = Internship::find($id);
        return view('app.frontend.magang.detail')->with('internship', $internship);
    }

    public function jadwal () {
        $schedules = SchedulePractice::all();
        return view('app.frontend.jadwal.index')->with(['schedules' => $schedules]);
    }

    public function kontak()
    {
        return view('app.frontend.home.kontak');
    }

    public function record (Request $request) {
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return back();
    }

}
