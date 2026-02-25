<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Popup;

class PopupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $popups = [
            [
                'title' => 'Meditouch Hair & Skin Clinic',
                'text' => 'Book an appointment',
                'url' => 'https://meditouch.com.np/appointment',
                'status' => 'inactive',
                'image' => 'assets/img/popup/popup.webp',
            ],
        ];

        foreach ($popups as $popupData) {
            $popup = new Popup([
                'title' => $popupData['title'],
                'text' => $popupData['text'],
                'url' => $popupData['url'],
                'status' => $popupData['status'],
            ]);
            $popup->save();

            //adding the image in the media migration
            if (isset($popupData['image'])) {
                $popup->addMediaFromUrl(asset($popupData['image']))
                    ->toMediaCollection();
            }
        }
    }
}
