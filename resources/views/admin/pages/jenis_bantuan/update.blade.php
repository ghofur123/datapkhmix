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
                    <form action="#" name="jenis-bantuan-update" class="form-update" method="post">
                        @csrf
                        @foreach ($data as $item)
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nama" value="{{ $item->nama }}">
                            </div>
                        </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary col-lg-3 mt-9">update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>