<div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>

            <div class="card-body">
                <form action="/category/update/{{$singleData->id}}" method="POST">
                    @csrf
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-2 col-form-label">id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value = "{{$singleData->name}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="status" name="status" value = "{{$singleData->statuss}}"> 
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>