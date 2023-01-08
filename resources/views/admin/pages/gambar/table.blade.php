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
        <button type="button" class="btn btn-success">Upload Gambar</button>
        <!-- <button type="button" class="btn btn-primary"></button> -->

        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                action
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                @foreach ($jenis_gambar as $jns)
                <li><a class="dropdown-item button-upload-image" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data="{{ $nik }}" data1="{{ $jns->id }}">{{ $jns->nama }}</a></li>
                @endforeach
                <!-- <li><a class="dropdown-item" href="download-template/template-sppd.xlsx">Download Template</a></li> -->
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
                                <th scope="col">nama</th>
                                <th scope="col">nik</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no=1;
                            @endphp
                            @foreach ($data_kpm as $item)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $item->nama_penerima }}</td>
                                <td>{{ $item->nik }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        @foreach ($gambar as $item)
        <div class="col">
            <button name="btn-del-gambar" type="button" class="btn btn-outline-danger btn-delete-class" data="{{ $item->id }}" data1="gambar">Hapus</button>
            <img src="{{ $item->url.'/'.$item->name }}" class="img-thumbnail" alt="...">
        </div>
        @endforeach
    </div>
</section>