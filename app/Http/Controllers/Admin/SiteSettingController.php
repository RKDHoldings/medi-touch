<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SiteSettingController extends Controller
{
    public function index()
    {
        $setting = SiteSetting::first();
        if (!$setting) {
            $setting = SiteSetting::create();
        }
        $title = 'Site Settings';
        $route = 'site-settings.';
        $item = $setting;
        return view('admin.site-settings.edit', compact('setting', 'title', 'route', 'item'));
    }

    public function update(Request $request, $id)
    {
        $setting = SiteSetting::findOrFail($id);

        $data = $request->except(['_token', '_method']);

        $setting->update($data);

        return redirect()->back()->with('success', 'Site settings updated successfully.');
    }
}
