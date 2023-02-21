<div class="pagetitle">
    <h1>{{ $namePage }}</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{ $breadcrumb_1 }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ $breadcrumb_2 }}</a></li>
            <li class="breadcrumb-item active">{{ $breadcrumb_3 }}</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <br>
                    <div class="alert alert-primary alert-message" role="alert"></div>
                    <!-- General Form Elements -->
                    <form action="#" name="rekening-update" class="form-upload-text" method="POST">
                        @csrf
                        @foreach ($rekening as $rekeningItem)
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" id="id" value="{{ $rekeningItem->id }}">
                                <input class="form-control class-clear-form" type="text" name="nik" value="{{ $rekeningItem->nik }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">penyalur</label>
                            <div class="col-sm-10">
                                <select class="form-control class-clear-form" name="penyalur_id">
                                    <option value="">Pilih Penyalur</option>
                                    @foreach ($penyalur as $item)
                                    if($rekeningItem->penyalur_id == $item->id){
                                    <option selected value="{{ $item->id }}">{{ $item->nama_penyalur }}</option>
                                    } else {
                                    <option value="{{ $item->id }}">{{ $item->nama_penyalur }}</option>
                                    }
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">no rekening</label>
                            <div class="col-sm-10">
                                <input class="form-control class-clear-form" type="text" name="no_rekening" value="{{ $rekeningItem->no_rekening }}">
                            </div>
                        </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary col-lg-3 mt-9">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>