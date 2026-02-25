<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageAboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = \App\Models\HomePageAboutSection::first();
        if (!$setting) {
            $setting = \App\Models\HomePageAboutSection::create([]);
        }
        $title = 'Home Page About Settings';
        $route = 'home-page-about.';
        $item = $setting;
        return view('admin.home-page-about.edit', compact('setting', 'title', 'route', 'item'));
    }

    public function create()
    {
        return redirect()->route('home-page-about.index');
    }

    public function store(Request $request)
    {
        return redirect()->route('home-page-about.index');
    }

    public function show($id)
    {
        return redirect()->route('home-page-about.index');
    }

    public function edit($id)
    {
        return redirect()->route('home-page-about.index');
    }

    public function update(Request $request, $id)
    {
        $setting = \App\Models\HomePageAboutSection::findOrFail($id);

        $data = $request->except(['_token', '_method']);

        if ($request->hasFile('image_front')) {
            $data['image_front'] = 'storage/' . $request->file('image_front')->store('home', 'public');
        }
        if ($request->hasFile('image_back')) {
            $data['image_back'] = 'storage/' . $request->file('image_back')->store('home', 'public');
        }
        if ($request->hasFile('image_middle')) {
            $data['image_middle'] = 'storage/' . $request->file('image_middle')->store('home', 'public');
        }

        $setting->update($data);

        return redirect()->back()->with('success', 'Information updated successfully');
    }

    public function destroy($id)
    {
        return redirect()->route('home-page-about.index');
    }
}
