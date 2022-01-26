<?php

namespace App\Http\Controllers\Admin;

use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    public function index()
    {
        $facilities = Facility::get();
        return view('admin.page.facility.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.page.facility.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        Facility::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return back()->with('success', 'You have successfully create new facility');
    }

    public function edit(string $id)
    {
        $facility = Facility::find($id);
        return view('admin.page.facility.edit', compact('facility'));
    }
    
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $facility = Facility::find($id);
        $facility->title = $request->title;
        $facility->content = $request->content;
        $facility->save();

        return back()->with('success', 'You have successfully update a facility');
    }
}
