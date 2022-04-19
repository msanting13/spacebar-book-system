<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function edit()
    {
        $user = Auth::user();
        return view('admin.auth.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $rules = [
            'username' => 'required|unique:admins,username,' . $user->id,
            'fullname' => 'required',
            'email' => 'required|unique:admins,email,' . $user->id,
        ];

        if(!is_null($request->password)) {
            $rules['password'] = ['required', 'nullable',  'string', 'min:8', 'confirmed'];
            $rules['currentPassword'] = ['required', 'nullable',  function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }];
        }

        
        $this->validate($request, $rules);
        

        $user = Admin::find($user->id);
        $user->name = $request->fullname;
        $user->username = $request->username;
        $user->email = $request->email;

        if(!is_null($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return back()->with('success', 'Your account information is successfully updated.');
    }
}
