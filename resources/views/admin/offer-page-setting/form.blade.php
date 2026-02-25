<div class="row mb-3">
    <div class="col-md-12">
        <label for="page_title">Offer Page Title</label>
        <input type="text" class="form-control" name="page_title" id="page_title"
            value="{{ old('page_title', $item->page_title) }}">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-12">
        <div class="form-group">
            <label for="appointment_subtitle">Appointment Subtitle Description</label>
            <textarea class="form-control" name="appointment_subtitle"
                rows="3">{{ old('appointment_subtitle', $item->appointment_subtitle) }}</textarea>
        </div>
    </div>
</div>

<h4 class="mt-4 border-bottom pb-2">Gynecologist Section</h4>
<div class="row mb-3">
    <div class="col-md-12">
        <label for="gynecologist_label">Gynecologist Label/Title</label>
        <input type="text" class="form-control" name="gynecologist_label" id="gynecologist_label"
            value="{{ old('gynecologist_label', $item->gynecologist_label) }}">
    </div>
    <div class="col-md-6 mt-2">
        <label for="gynecologist_doctor_1">Doctor 1 Name</label>
        <input type="text" class="form-control" name="gynecologist_doctor_1" id="gynecologist_doctor_1"
            value="{{ old('gynecologist_doctor_1', $item->gynecologist_doctor_1) }}">
    </div>
    <div class="col-md-6 mt-2">
        <label for="gynecologist_doctor_2">Doctor 2 Name</label>
        <input type="text" class="form-control" name="gynecologist_doctor_2" id="gynecologist_doctor_2"
            value="{{ old('gynecologist_doctor_2', $item->gynecologist_doctor_2) }}">
    </div>
</div>

<h4 class="mt-4 border-bottom pb-2">Available Dates</h4>
<div class="row mb-3">
    <div class="col-md-12">
        <label for="preferred_date_label">Preferred Date Label/Title</label>
        <input type="text" class="form-control" name="preferred_date_label" id="preferred_date_label"
            value="{{ old('preferred_date_label', $item->preferred_date_label) }}">
    </div>
    <div class="col-md-4 mt-2">
        <label for="preferred_date_1">Date Option 1</label>
        <input type="text" class="form-control" name="preferred_date_1" id="preferred_date_1"
            value="{{ old('preferred_date_1', $item->preferred_date_1) }}">
    </div>
    <div class="col-md-4 mt-2">
        <label for="preferred_date_2">Date Option 2</label>
        <input type="text" class="form-control" name="preferred_date_2" id="preferred_date_2"
            value="{{ old('preferred_date_2', $item->preferred_date_2) }}">
    </div>
    <div class="col-md-4 mt-2">
        <label for="preferred_date_3">Date Option 3</label>
        <input type="text" class="form-control" name="preferred_date_3" id="preferred_date_3"
            value="{{ old('preferred_date_3', $item->preferred_date_3) }}">
    </div>
</div>

<h4 class="mt-4 border-bottom pb-2">Dermatologist Section</h4>
<div class="row mb-3">
    <div class="col-md-12">
        <label for="dermatologist_label">Dermatologist Label/Title</label>
        <input type="text" class="form-control" name="dermatologist_label" id="dermatologist_label"
            value="{{ old('dermatologist_label', $item->dermatologist_label) }}">
    </div>
    <div class="col-md-6 mt-2">
        <label for="dermatologist_doctor_1">Doctor 1 Name</label>
        <input type="text" class="form-control" name="dermatologist_doctor_1" id="dermatologist_doctor_1"
            value="{{ old('dermatologist_doctor_1', $item->dermatologist_doctor_1) }}">
    </div>
    <div class="col-md-6 mt-2">
        <label for="dermatologist_doctor_2">Doctor 2 Name</label>
        <input type="text" class="form-control" name="dermatologist_doctor_2" id="dermatologist_doctor_2"
            value="{{ old('dermatologist_doctor_2', $item->dermatologist_doctor_2) }}">
    </div>
</div>

<h4 class="mt-4 border-bottom pb-2">Doctor Images</h4>
<div class="row mb-3">
    <div class="col-md-3">
        <label for="image_1">Image 1 (Gynecologist 1)</label>
        <input type="file" class="form-control" name="image_1" id="image_1" accept="image/*">
        @if($item->image_1)
        <div class="mt-2"><img src="{{ asset($item->image_1) }}" height="80"></div>@endif
    </div>
    <div class="col-md-3">
        <label for="image_2">Image 2 (Gynecologist 2)</label>
        <input type="file" class="form-control" name="image_2" id="image_2" accept="image/*">
        @if($item->image_2)
        <div class="mt-2"><img src="{{ asset($item->image_2) }}" height="80"></div>@endif
    </div>
    <div class="col-md-3">
        <label for="image_3">Image 3 (Dermatologist 1)</label>
        <input type="file" class="form-control" name="image_3" id="image_3" accept="image/*">
        @if($item->image_3)
        <div class="mt-2"><img src="{{ asset($item->image_3) }}" height="80"></div>@endif
    </div>
    <div class="col-md-3">
        <label for="image_4">Image 4 (Dermatologist 2)</label>
        <input type="file" class="form-control" name="image_4" id="image_4" accept="image/*">
        @if($item->image_4)
        <div class="mt-2"><img src="{{ asset($item->image_4) }}" height="80"></div>@endif
    </div>
</div>