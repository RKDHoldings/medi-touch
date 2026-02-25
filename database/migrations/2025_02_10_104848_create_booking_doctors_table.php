<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_doctors', function (Blueprint $table) {
            $table->id();
            $table->text('doctor_list')->nullable();
            $table->string('appointment_date')->nullable();
            $table->bigInteger('womans_day_booking_id')->unsigned()->nullable();

			$table->foreign('womans_day_booking_id')->references('id')->on('womans_day_bookings')
				->onDelete('cascade')
				->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_doctors');
    }
}
