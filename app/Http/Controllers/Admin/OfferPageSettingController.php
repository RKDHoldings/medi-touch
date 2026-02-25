<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OfferPageSetting;

class OfferPageSettingController extends Controller
{
    public function index()
    {
        $setting = OfferPageSetting::first();
        if (!$setting) {
            $setting = OfferPageSetting::create([]);
        }
        $title = 'Offer Form Settings';
        $route = 'offer-page-settings.';
        $item = $setting;
        return view('admin.offer-page-setting.edit', compact('setting', 'title', 'route', 'item'));
    }

    public function update(Request $request, $id)
    {
        $setting = OfferPageSetting::findOrFail($id);

        $data = $request->except(['_token', '_method']);

        if ($request->hasFile('image_1')) {
            $data['image_1'] = 'storage/' . $request->file('image_1')->store('home', 'public');
        }
        if ($request->hasFile('image_2')) {
            $data['image_2'] = 'storage/' . $request->file('image_2')->store('home', 'public');
        }
        if ($request->hasFile('image_3')) {
            $data['image_3'] = 'storage/' . $request->file('image_3')->store('home', 'public');
        }
        if ($request->hasFile('image_4')) {
            $data['image_4'] = 'storage/' . $request->file('image_4')->store('home', 'public');
        }

        $setting->update($data);

        return redirect()->back()->with('success', 'Offer settings updated successfully');
    }
}
