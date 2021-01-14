<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::paginate(10);
        return view('app.backend.pages.activity.index')->with('activities', $activities);
    }

    public function create()
    {
        return view('app.backend.pages.activity.create');
    }

    public function store(Request $request)
    {
        try {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('uploaded_file/activities/'), $imageName);

            Activity::create([
                'image' => $imageName,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'venue' => $request->venue,
                'date' => $request->date,
                'time' => $request->time
            ]);

            return response()->json(['status' => true, 'message' => 'Data stored']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'error: ' . $th->getMessage()]);
        }
        
        // return back();
    }

    public function edit(Activity $activity)
    {
        return view('app.backend.pages.activity.edit')->with('activity', $activity);
    }

    public function update(Request $request, Activity $activity)
    {
        try {
            if ($request->image) {
                $imageName = time() . '.' . $request->image->extension();

                $request->image->move(public_path('uploaded_file/activities/'), $imageName);

                $activity->update([
                    'image' => $imageName,
                    'title' => $request->title,
                    'subtitle' => $request->subtitle,
                    'description' => $request->description,
                    'venue' => $request->venue,
                    'date' => $request->date,
                    'time' => $request->time
                ]);
            } else {
                $activity->update([
                    'title' => $request->title,
                    'subtitle' => $request->subtitle,
                    'description' => $request->description,
                    'venue' => $request->venue,
                    'date' => $request->date,
                    'time' => $request->time
                ]);
            }

            return response()->json(['status' => true, 'message' => 'Data updated']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => $th->getMessage]);
        }
    }

    public function delete(Activity $activity)
    {
        File::delete(public_path('uploaded_file/activities') . '/' . $activity->image);
        $activity->delete();

        return back();
    }
}
