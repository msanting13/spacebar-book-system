<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $contents = Page::get();
        return view('admin.page.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required',
            'content' => 'required',
        ]);

        Page::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return back()->with('success', 'Successfully add new content');
    }

    public function edit(string $id)
    {
        $page = Page::find($id);
        return view('admin.page.edit', compact('page'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $page = Page::find($id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();

        return back()->with('success', 'You have successfully update a record');
    }

    public function delete(string $id)
    {
        Page::find($id)->delete();
        return back()->with('success', 'Successfully delete a content');
    }
}
