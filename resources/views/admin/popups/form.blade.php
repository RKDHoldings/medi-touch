<div class="form-group row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <label for=""> Title *</label>
                <input type="title" required class="form-control" name="title" value="{{ old('title', $item->title) }}">
            </div>

            <div class="col-12 mt-4">
                <label for="">Url *</label>
                <textarea name="url" class="form-control">{{ old('url', $item->url) }}</textarea>

            </div>
            <div class="col-md-12 mt-4">
                <label for="">Status *</label>
                <select name="status" class="form-control">
                    <option value="active" {{ old('status', $item->status) == 'active' ? 'selected' : '' }}>Active
                    </option>
                    <option value="inactive" {{ old('status', $item->status) == 'inactive' ? 'selected' : '' }}>Inactive
                    </option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="">Image *</label>
        <input type="file" class="form-control" accept="image/*" name="image" id="popupImageInput" onchange="previewPopupImage(event)">
        <div class="mt-2">
            <img id="popupImagePreview"
                 src="{{ $item->getImage() ?? '' }}"
                 alt="Image Preview"
                 style="{{ $item->getImage() ? 'display:block;' : 'display:none;' }} max-width: 100%; max-height: 300px; border-radius: 6px; border: 1px solid #dee2e6; object-fit: contain;">
        </div>
        <script>
            function previewPopupImage(event) {
                const file = event.target.files[0];
                if (!file) return;
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('popupImagePreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        </script>
        <div class="col-md-12 mt-4">
            <label for="">Button Text *</label>
            <textarea name="text" class="form-control">{!! old('text', $item->text) !!}</textarea>
        </div>

    </div>

</div>
