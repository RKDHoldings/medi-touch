<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('header_address')->nullable();
            $table->string('header_phone')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('footer_phone')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('doctor_visit_days')->nullable();
            $table->string('doctor_visit_hours')->nullable();
            $table->string('clinic_timing_days')->nullable();
            $table->string('clinic_timing_hours')->nullable();
            $table->timestamps();
        });

        // Insert default values
        DB::table('site_settings')->insert([
            'email' => 'clinic.meditouch@gmail.com',
            'header_address' => 'Newroad-09, Pokhara',
            'header_phone' => '061-590664',
            'footer_address' => 'Newroad, Pokhara, Kaski',
            'footer_phone' => '061-590664',
            'facebook_link' => 'https://www.facebook.com/skinhairaesthetic',
            'instagram_link' => 'https://www.instagram.com/meditouchskinclinic/',
            'doctor_visit_days' => 'Sun - Fri',
            'doctor_visit_hours' => '11:00 am to 6:00 pm',
            'clinic_timing_days' => 'Sun - Fri',
            'clinic_timing_hours' => '9:30 am to 7:00 pm',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}
