<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SchedulePractice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = SchedulePractice::all();
        return view('app.backend.pages.schedule.index')->with('schedules', $schedules);
    }

    public function create()
    {
        return view('app.backend.pages.schedule.create');
    }

    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('uploaded_file/schedule/'), $imageName);

        SchedulePractice::create([
            'title' => $request->title,
            'image' => $imageName,
        ]);

        return redirect()->route('schedule.index');
    }

    public function delete(SchedulePractice $schedule)
    {
        File::delete(public_path('uploaded_file/schedule') . '/' . $schedule->image);
        $schedule->delete();

        return back();
    }
}
