@extends('layout.main')
@section('container')
    <div class="loader"></div>
    <main id="main" role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="../public/template/gambar/corasul_1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Judul Kegiatan</h1>
                            <p></p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="template/gambar/corasul_4.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Judul Kegiatan</h1>
                            <p></p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img class="third-slide" src="template/gambar/corasul_3.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Judul Kegiatan</h1>
                            <p></p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
        <div class="container marketing py-5 text-center">
<div class="row mb-5">
    <h1 class="mb-5">Kategori Kegiatan : {{ $category }}</h1><hr>
</div>
<br>
@foreach ($projects as $project)

            <div class="row mt-8">
                <div class="col mt-8">
                    <img src="template/gambar/corasul_6.jpg" alt="Generic placeholder image" width="300" height="140">
                   <h2>{{ $project->title }}</h2>
                    <h6>Ditulis oleh : <i>{{ $project->author }}</h5>
                    <p>{{ $project->body }}</p>
                    <p>
                        <a class="btn btn-secondary" href="/projects/{{ $project->slug }}" role="button">Selengkapnya &raquo;</a>
                    </p>
                    <hr class="featurette-divider">
                </div>
               
            </div>
        </main>

        @endforeach
        
        
                {{-- <div class="col-lg-4">
                    <img class="rounded-circle pb-2" src="kegiatan/img/marketing-img.png" alt="Generic placeholder image" width="140" height="140">
                  <h2>Judul Kegiatan</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                        mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh.</p>
                    <p>
                        <a class="btn btn-secondary" href="#" role="button">Selengkapnya &raquo;</a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle pb-2" src="kegiatan/img/marketing-img.png" alt="Generic placeholder image" width="140" height="140">
                  <h2>Judul Kegiatan</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                        porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                        ut fermentum massa justo sit amet risus.</p>
                    <p>
                        <a class="btn btn-secondary" href="#" role="button">Lihat Detail &raquo;</a>
                    </p>
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Judul Kegiatan
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                        commodo.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="kegiatan/img/placeholder-img.svg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Judul Kegiatan Utama
                        
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                        commodo.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="kegiatan/img/placeholder-img.svg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one.
                        <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                        commodo.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" src="kegiatan/img/placeholder-img.svg" alt="Generic placeholder image">
                </div> --}}
    <script src="../kegiatan/dist/jquery/jquery.min.js"></script>
    <script src="../kegiatan/dist/popper/popper.min.js"></script>
    <script src="../kegiatan/dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="../kegiatan/js/main.min.js"></script>
@endsection
