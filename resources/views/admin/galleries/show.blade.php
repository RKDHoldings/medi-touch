@extends('admin.templates.show')
@push('styles')
@endpush
@section('form_content')
    <div class="row my-4">
        <div class="col-md-4">
            <img src="{{ $item->image_url }}" alt="" width="80%">
        </div>
    </div>
@endsection