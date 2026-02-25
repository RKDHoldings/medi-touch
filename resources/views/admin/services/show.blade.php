@extends('admin.templates.index')

@section('title', $title)

@section('content_header')
<h1>{{ $title }} Details</h1>
@stop

@section('index_content')
    <div class="card-body">
        <div class="row form-group">
            <div class="col-md-3">
                <label><span class="show-text">Title:</span></label>
            </div>
            <div class="col-md-8">
                {{ $item->title }}
            </div>
        </div>
        <div class="row form-group mt-3">
            <div class="col-md-3">
                <label><span class="show-text">Status:</span></label>
            </div>
            <div class="col-md-8">
                @if($item->status == 'active')
                    <span class="badge badge-success">Active</span>
                @else
                    <span class="badge badge-danger">Inactive</span>
                @endif
            </div>
        </div>
        <div class="row form-group mt-3">
            <div class="col-md-3">
                <label><span class="show-text">Image:</span></label>
            </div>
            <div class="col-md-8">
                @if($item->image)
                    <img src="{{ asset($item->image) }}" alt="" height="100">
                @else
                    --
                @endif
            </div>
        </div>
        <div class="row form-group mt-3">
            <div class="col-md-3">
                <label><span class="show-text">Icon:</span></label>
            </div>
            <div class="col-md-8">
                @if($item->icon)
                    <img src="{{ asset($item->icon) }}" alt="" height="50">
                @else
                    --
                @endif
            </div>
        </div>
        <div class="row form-group mt-3">
            <div class="col-md-3">
                <label><span class="show-text">Description:</span></label>
            </div>
            <div class="col-md-8">
                {!! $item->description ?? '--' !!}
            </div>
        </div>
    </div>
@endsection