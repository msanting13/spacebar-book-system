<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feedback;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $visitors = Visitor::count();
        $users = User::count();
        $feedbacks = Feedback::count();
        return view('admin.home', [
            'visitors' => $visitors,
            'users' => $users,
            'feedbacks' => $feedbacks
        ]);
    }
}
