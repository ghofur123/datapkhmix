<div class="row mb-3">
    <label for="inputNumber" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        <select class="form-control provinces-class" type="text" name="nama">
            <option value="">Pilih Kecamatan</option>
            @foreach ($districts as $districts)
            <option value="">{{ $districts['name'] }}</option>
            @endforeach
        </select>
    </div>
</div>