<div class="row mb-3">
    <label for="inputNumber" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        <select class="form-control provinces-class" type="text" name="nama">
            <option value="">Pilih Kabupaten</option>
            @foreach ($regencies as $regencies)
            <option value="">{{ $regencies['name'] }}</option>
            @endforeach
        </select>
    </div>
</div>