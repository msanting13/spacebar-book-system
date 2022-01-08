<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SecurityAndLoginController extends Controller
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
        return view('user.security-and-login');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'currentPassword'       =>      ['nullable',  function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    return $fail(__('The current password is incorrect.'));
                }
            }],
            'password'              =>      ['nullable',  'string', 'min:8', 'confirmed'],
        ]);

        $user = User::find(Auth::id());
        $user->email = $request->email;
        if(!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->back()->with('success', 'Updated successfully');
    }
}
