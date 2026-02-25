@component('mail::message')
# Introduction

Hello There,

You have a new booking.

<div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Name:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->name }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Phone:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->phone }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Gender:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->gender }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Email:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->email }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">DOB:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->dob }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Preferred Date:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->preferred_date }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Preferred Time:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->preferred_time }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Type of appoinment:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->appointment_type }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Preferred Doctor:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $data->preferred_doctor }}
                </div>
            </div>
            

        

You can view your booking details using the link below.

@component('mail::button', ['url' => $booking_link])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
