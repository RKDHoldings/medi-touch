<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageAboutSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading_title')->nullable();
            $table->string('main_heading')->nullable();
            $table->string('subheading')->nullable();
            $table->string('mission_title')->nullable();
            $table->text('mission_description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('image_front')->nullable();
            $table->string('image_back')->nullable();
            $table->string('image_middle')->nullable();
            $table->timestamps();
        });

        // Insert default values
        DB::table('home_page_about_sections')->insert([
            'heading_title' => 'About us',
            'main_heading' => 'We have 4+ Years , \nExperience.',
            'subheading' => 'Follow us to improve health, \n to enjoy and relax',
            'mission_title' => 'Our mission and Vision',
            'mission_description' => 'Our mission at Meditouch Skin & Hair Clinic is to enhance every individual\'s health, well-being, and confidence by prioritizing trust, loyalty, and personalized treatment experiences. We aim to bridge the healthcare service gap in dermatology, venereology, and aesthetic practices, providing exceptional care with compassion, integrity, and innovation.',
            'button_text' => 'More about us',
            'button_link' => '/about',
            'phone_number' => '061-590664',
            'image_front' => 'assets/img/image4-meditouch.com.np.webp',
            'image_back' => 'assets/img/image10-meditouch.com.np.webp',
            'image_middle' => 'assets/img/about-2.jpg',
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
        Schema::dropIfExists('home_page_about_sections');
    }
}
