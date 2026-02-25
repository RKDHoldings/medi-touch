<div class="form-group row">
    <div class="col-md-6">
        <label for="">Title *</label>
        <input type="text" required class="form-control" name="title" value="{{ old('title', $item->title) }}">
    </div>
    <div class="col-md-3">
        <label for="">Status</label>
        <select name="status" class="form-control">
            <option value="active" {{ old('status', $item->status) == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ old('status', $item->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>
</div>

<div class="form-group row mt-3">
    <div class="col-md-6">
        <label for="">Service Image (for Homepage card)</label>
        <input type="file" class="form-control" accept="image/*" name="image">
        @if ($item->image)
            <div class="mt-2"><img src="{{ asset($item->image) }}" alt="" height="80"></div>
        @endif
    </div>
    <div class="col-md-6">
        <label for="">Service Icon (for Services page)</label>
        <input type="file" class="form-control" accept="image/*" name="icon">
        @if ($item->icon)
            <div class="mt-2"><img src="{{ asset($item->icon) }}" alt="" height="50"></div>
        @endif
    </div>
</div>

<div class="form-group row mt-3">
    <div class="col-12">
        <label for="">Description (shown on Services page) *</label>
        <textarea name="description" id="summernote" class="form-control"
            style="width: 100%; height: 200px;">{!! old('description', $item->description) !!}</textarea>
    </div>
</div>