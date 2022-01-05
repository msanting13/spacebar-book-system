<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::find(Auth::id());
        return view('user.user-profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'Updated successfully');
    }
}
