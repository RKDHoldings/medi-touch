<div class="row mb-3">
    <div class="col-md-12">
        <h4>General Contact Info</h4>
    </div>
    <div class="col-md-6 mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $item->email) }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="facebook_link">Facebook Link</label>
        <input type="text" class="form-control" name="facebook_link" id="facebook_link"
            value="{{ old('facebook_link', $item->facebook_link) }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="instagram_link">Instagram Link</label>
        <input type="text" class="form-control" name="instagram_link" id="instagram_link"
            value="{{ old('instagram_link', $item->instagram_link) }}">
    </div>
</div>
<hr />
<div class="row mb-3">
    <div class="col-md-12">
        <h4>Header Layout Info</h4>
    </div>
    <div class="col-md-6 mb-3">
        <label for="header_address">Header Address</label>
        <input type="text" class="form-control" name="header_address" id="header_address"
            value="{{ old('header_address', $item->header_address) }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="header_phone">Header Phone Number</label>
        <input type="text" class="form-control" name="header_phone" id="header_phone"
            value="{{ old('header_phone', $item->header_phone) }}">
    </div>
</div>
<hr />

<div class="row mb-3">
    <div class="col-md-12">
        <h4>Footer Layout Info</h4>
    </div>
    <div class="col-md-6 mb-3">
        <label for="footer_address">Footer Address</label>
        <input type="text" class="form-control" name="footer_address" id="footer_address"
            value="{{ old('footer_address', $item->footer_address) }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="footer_phone">Footer Phone Number</label>
        <input type="text" class="form-control" name="footer_phone" id="footer_phone"
            value="{{ old('footer_phone', $item->footer_phone) }}">
    </div>
</div>
<hr />

<div class="row mb-3">
    <div class="col-md-12">
        <h4>Hospital Timings</h4>
    </div>
    <div class="col-md-6 mb-3">
        <label for="doctor_visit_days">Doctor Visit Days (e.g., Sun - Fri)</label>
        <input type="text" class="form-control" name="doctor_visit_days" id="doctor_visit_days"
            value="{{ old('doctor_visit_days', $item->doctor_visit_days) }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="doctor_visit_hours">Doctor Visit Hours (e.g., 11:00 am to 6:00 pm)</label>
        <input type="text" class="form-control" name="doctor_visit_hours" id="doctor_visit_hours"
            value="{{ old('doctor_visit_hours', $item->doctor_visit_hours) }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="clinic_timing_days">Clinic Timing Days (e.g., Sun - Fri)</label>
        <input type="text" class="form-control" name="clinic_timing_days" id="clinic_timing_days"
            value="{{ old('clinic_timing_days', $item->clinic_timing_days) }}">
    </div>
    <div class="col-md-6 mb-3">
        <label for="clinic_timing_hours">Clinic Timing Hours (e.g., 9:30 am to 7:00 pm)</label>
        <input type="text" class="form-control" name="clinic_timing_hours" id="clinic_timing_hours"
            value="{{ old('clinic_timing_hours', $item->clinic_timing_hours) }}">
    </div>
</div>