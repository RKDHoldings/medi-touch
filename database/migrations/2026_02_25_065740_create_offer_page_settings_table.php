<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferPageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('page_title')->nullable();
            $table->text('appointment_subtitle')->nullable();
            $table->string('gynecologist_label')->nullable();
            $table->string('gynecologist_doctor_1')->nullable();
            $table->string('gynecologist_doctor_2')->nullable();
            $table->string('preferred_date_label')->nullable();
            $table->string('preferred_date_1')->nullable();
            $table->string('preferred_date_2')->nullable();
            $table->string('preferred_date_3')->nullable();
            $table->string('dermatologist_label')->nullable();
            $table->string('dermatologist_doctor_1')->nullable();
            $table->string('dermatologist_doctor_2')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->timestamps();
        });

        // Insert default values
        DB::table('offer_page_settings')->insert([
            'page_title' => 'Empower Your Glow: Celebrate Women\'s Day Offer with Radiance',
            'appointment_subtitle' => 'Free Gynecologist consultation and sanitary pad distributation. 35% Off on skin service and 12% off on products. For group bookings please contact our nursing service 061-590664, 061-581564',
            'gynecologist_label' => 'Gynecologist (Free) on 24th Falgun 2082 only 35% off on all service',
            'gynecologist_doctor_1' => 'Dr. Aashika Shrestha',
            'gynecologist_doctor_2' => 'Dr. Anjali Subedi',
            'preferred_date_label' => 'Preferred Date From Falgun 24 To 26 For Dermalogist',
            'preferred_date_1' => '24th Falgun 2082',
            'preferred_date_2' => '25th Falgun 2082',
            'preferred_date_3' => '26th Falgun 2082',
            'dermatologist_label' => 'Dermalogist (Free) 35% off on all service',
            'dermatologist_doctor_1' => 'Dr. Jem Maharjan',
            'dermatologist_doctor_2' => 'Dr. Sarmila Tripathee',
            'image_1' => 'assets/img/1.jpg',
            'image_2' => 'assets/img/2.jpg',
            'image_3' => 'assets/img/3.jpg',
            'image_4' => 'assets/img/4.jpg',
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
        Schema::dropIfExists('offer_page_settings');
    }
}
