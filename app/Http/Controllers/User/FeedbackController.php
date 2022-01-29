<?php

namespace App\Http\Controllers\User;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('user.feedback.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'rating' => 'required',
        ]);

        Feedback::create([
            'content' => $request->content,
            'rating' => $request->rating,
            'user_id' => Auth::user()->id,
        ]);

        return back()->with('success', 'Thank you for your feedback this will help us improve our service.');
    }
}
