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
                <li><a class="dropdown-item button-form" href="#" link="form-penyalur" data="form-text">Tambah</a></li>
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
                                <td>{{ $item->nama_penyalur }}</td>
                                <td>
                                    <button class="btn btn-primary btn-edit-class" data="penyalur/{{ $item->id }}">edit</button>
                                    <button name="btn-del-penyalur" class="btn btn-danger btn-delete-class" data="{{ $item->id }}" data1="penyalur">delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div>
</section>