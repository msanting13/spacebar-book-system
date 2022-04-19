<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = Admin::get();
        return view('admin.list', compact('users'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:admins,username',
            'fullname' => 'required',
            'email' => 'required|unique:admins,email',
        ]);

        Admin::create([
            'username' => $request->username,
            'name'     => $request->fullname,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return back()->with('success', 'You successfully create a new administrator.');
    }

    public function edit(Admin $admin)
    {
        $user = $admin;
        return view('admin.edit', compact('user'));
    }
}
