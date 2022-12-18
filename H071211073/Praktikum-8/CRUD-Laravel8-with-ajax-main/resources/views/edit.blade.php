<div class="p2">
    <div class="form-group">
        <input type="text" name="name" id="name" value="{{ $data->name }}" class="form-control"
            placeholder="name product">
    </div>
    <div class="form-group">
        <input type="text" name="category" id="category" value="{{ $data->category }}" class="form-control"
            placeholder="category product">
    </div>
    <div class="form-group">
        <input type="text" name="price" id="price" value="{{ $data->price }}" class="form-control"
            placeholder="price product">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update({{ $data->id }})">Update</button>
    </div>
</div>
