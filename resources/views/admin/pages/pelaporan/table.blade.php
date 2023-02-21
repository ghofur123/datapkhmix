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
                                <th scope="col">jenis pelaporan</th>
                                <th scope="col">status pelaporan</th>
                                <th scope="col">no_hp</th>
                                <th scope="col">pesan</th>
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
                                <td>{{ $item->jenis_pelaporan_id }}</td>
                                <td>{{ $item->status_pelaporan_id }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->pesan }}</td>
                                <td>
                                    <button class="btn btn-primary action-pelaporan" data="{{ $item->id }}">action</button>
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