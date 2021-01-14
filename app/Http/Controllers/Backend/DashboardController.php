<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index () {
        return view('app.backend.pages.index');
    }

    public function feedback()
    {
        return view('app.backend.pages.feedback')->with('feedbacks', Comment::latest()->paginate(15));
    }

    public function delete_feedback (Comment $id) {
        $id->delete();
        return back();
    }

    public function account () {
        return view('app.backend.pages.account')->with('user', auth()->user());
    }

    public function update_account (Request $request) {
        $user = User::find(auth()->user()->id);
        if (Hash::check($request->old_password, $user->password)) {
            if($request->password) {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password)
                ]);
            }
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return back();
    }
}
