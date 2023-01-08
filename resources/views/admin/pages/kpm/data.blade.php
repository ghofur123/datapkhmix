<div class="row align-items-start">
    <div class="col pagetitle">
        <h1>{{ $namePage }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ $breadcrumb_1 }}</a></li>
                <li class="breadcrumb-item"><a href="#">{{ $breadcrumb_2 }}</a></li>
                <li class="breadcrumb-item active">{{ $breadcrumb_3 }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="col col-lg-3 btn-group" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-success">Proses</button>
        <!-- <button type="button" class="btn btn-primary"></button> -->

        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                action
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <li><a class="dropdown-item button-form" href="#" link="data-kpm-form-exel" data="form-excel">Upload Excel</a></li>
                <li><a class="dropdown-item" href="download-template/template-data-kpm.xlsx">Download Template</a></li>
            </ul>
        </div>
    </div>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <table class="my-table table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">nik</th>
                                <th scope="col">nama</th>
                                <th scope="col">kecamatan</th>
                                <th scope="col">desa/kelurahan</th>
                                <th scope="col">alamat</th>
                                <th scope="col">act</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->nama_penerima }}</td>
                                <td>{{ $item->kecamatan }}</td>
                                <td>{{ $item->desa_kelurahan }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td><button class="btn btn-primary btn-foto-class" data="{{ $item->nik }}">foto</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>