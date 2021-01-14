<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Internship;
use Illuminate\Http\Request;

class MagangController extends Controller
{
    public function index()
    {
        $internships = Internship::paginate(10);
        return view('app.backend.pages.magang.index')->with('internships', $internships);
    }

    public function create()
    {
        return view('app.backend.pages.magang.create');
    }

    public function store(Request $request)
    {
        try {
            Internship::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'detail' => $request->detail,
            ]);

            return response()->json(['status' => true, 'message' => 'Data stored']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'error: ' . $th->getMessage()]);
        }
    }

    public function edit(Internship $internship)
    {
        return view('app.backend.pages.magang.edit')->with('internship', $internship);
    }

    public function update(Request $request, Internship $internship)
    {
        try {
            $internship->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'detail' => $request->detail,
            ]);
            
            return response()->json(['status' => true, 'message' => 'Data updated']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'error: ' . $th->getMessage()]);
        }
    }

    public function delete(Internship $internship)
    {
        $internship->delete();
        return back();
    }
}
