<div class="row mb-3">
    <div class="col-md-4">
        <label for="heading_title">Heading Title</label>
        <input type="text" class="form-control" name="heading_title" id="heading_title"
            value="{{ old('heading_title', $item->heading_title) }}">
    </div>
    <div class="col-md-8">
        <label for="main_heading">Main Heading (Use HTML like <br> for breaks)</label>
        <input type="text" class="form-control" name="main_heading" id="main_heading"
            value="{{ old('main_heading', $item->main_heading) }}">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-12">
        <label for="subheading">Subheading</label>
        <input type="text" class="form-control" name="subheading" id="subheading"
            value="{{ old('subheading', $item->subheading) }}">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <label for="mission_title">Mission Section Title</label>
        <input type="text" class="form-control" name="mission_title" id="mission_title"
            value="{{ old('mission_title', $item->mission_title) }}">
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label for="mission_description">Mission Description</label>
            <textarea class="form-control form-control-lg custom-font-size" name="mission_description"
                rows="4">{{ old('mission_description', $item->mission_description) }}</textarea>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <label for="button_text">Button Text</label>
        <input type="text" class="form-control" name="button_text" id="button_text"
            value="{{ old('button_text', $item->button_text) }}">
    </div>
    <div class="col-md-4">
        <label for="button_link">Button Link</label>
        <input type="text" class="form-control" name="button_link" id="button_link"
            value="{{ old('button_link', $item->button_link) }}">
    </div>
    <div class="col-md-4">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control" name="phone_number" id="phone_number"
            value="{{ old('phone_number', $item->phone_number) }}">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <label for="image_front">Front Image (Upload new to replace)</label>
        <input type="file" class="form-control" name="image_front" id="image_front" accept="image/*">
        @if($item->image_front)
        <div class="mt-2"><img src="{{ asset($item->image_front) }}" height="80"></div>@endif
    </div>
    <div class="col-md-4">
        <label for="image_back">Back Image (Upload new to replace)</label>
        <input type="file" class="form-control" name="image_back" id="image_back" accept="image/*">
        @if($item->image_back)
        <div class="mt-2"><img src="{{ asset($item->image_back) }}" height="80"></div>@endif
    </div>
    <div class="col-md-4">
        <label for="image_middle">Middle Image (Upload new to replace)</label>
        <input type="file" class="form-control" name="image_middle" id="image_middle" accept="image/*">
        @if($item->image_middle)
        <div class="mt-2"><img src="{{ asset($item->image_middle) }}" height="80"></div>@endif
    </div>
</div>