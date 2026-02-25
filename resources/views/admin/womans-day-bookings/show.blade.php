@extends('admin.templates.show', ['hideEdit' => false])
@push('styles')
@endpush
@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Name:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->name }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Phone:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->phone }}
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Address:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->address }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Appointment Date:</span>
                    </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->bookingDocs->appointment_date ?? '24th Falgun 2080 - ' . $item->arrival_time }}
                </div>
            </div>


            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Bookings:</span>
                    </label><br>
                </div>
                @if(\Carbon\Carbon::parse($item->created_at) < \Carbon\Carbon::parse('2025-01-01 00:00:00'))
                    <div class="col-md-8">
                        <input type="checkbox" disabled {{ $item->gynecologist === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Gynecologist
                        <br>
                        <input type="checkbox" disabled {{ $item->dermatologist === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp
                        Dermatologist<br>
                        <input type="checkbox" disabled {{ $item->hydra_facial === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Hydra Facial
                        <br>
                        <input type="checkbox" disabled {{ $item->carbon_peeling === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Carbon
                        Peeling <br>
                        <input type="checkbox" disabled {{ $item->micro_needling === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Micro
                        Needling <br>
                        <input type="checkbox" disabled {{ $item->facial === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Facial <br>
                        <input type="checkbox" disabled {{ $item->hair_treatment === 1 ? 'checked' : '' }}>&nbsp&nbsp&nbsp Hair
                        Treatment <br>
                    </div>
                @else
                    <div class="col-md-8">
                        @if($item->bookingDocs)
                            @foreach(json_decode($item->bookingDocs->doctor_list) as $doctor)
                                {{  $doctor ?? '--' }} <br>
                            @endforeach
                        @endif
                    </div>
                @endif
            </div>

            <div class="row form-group mt-3">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Extra Details:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->details ?? '--' }}
                </div>
            </div>

        </div>
    </div>
@endsection