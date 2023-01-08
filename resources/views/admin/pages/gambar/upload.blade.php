<div class="alert alert-primary alert-message" role="alert"></div>
<form class="modal-content" name="upload-gambar" enctype="multipart/form-data">
    <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Upload Foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        @csrf
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
            <div class="col-sm-10">
                <input class="form-control" type="hidden" id="nik" name="nik" value="{{ $nik }}">
                <input class="form-control" type="hidden" id="jenis_gambar_id" name="jenis_gambar_id" value="{{ $jenis_gambar_id }}">
                <input class="form-control" type="file" id="file" name="file">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</form>