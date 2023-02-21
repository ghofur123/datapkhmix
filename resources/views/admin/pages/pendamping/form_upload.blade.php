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
                    <form action="#" name="pendamping" class="form-upload-exel" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="file" name="file">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary col-lg-3 mt-9">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>