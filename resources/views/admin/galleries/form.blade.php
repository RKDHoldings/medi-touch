<div class="form-group row">
    <div class="col-md-6">
        <label for="">Image</label>
        <input type="file" class="form-control" accept="image/*" name="image">
        @if($item->getImage())
            <img src="{{ $item->getImage() }}" alt="" width="80%">
        @endif
    </div>
</div>