<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('app.backend.pages.user.index')->with('users', User::all());
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return back();
    }

    public function update(Request $request, User $user)
    {
        if ($request->password) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }
        return back();
    }

    public function delete(User $user)
    {
        $total = User::all()->count();
        if ($total > 1) {
            $user->delete();
            return back();
        }
        return back();
    }
}
