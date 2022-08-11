@extends('layout.main')
@include('partials.navbar')
@section('container')

<div class="row">
    <marquee behavior="" direction=""> <h2 class="fw-bold text-success">Selamat Datang di Halaman Kegiatan Badan Musyawarah Pengurus Guru  - TPQ Kab. Karimun</h2></marquee>
 </div>
<div class="row mb-3 justify-content-center">
    <div class="col-md-6">
        <form action="/projects">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
                <button class="btn text-light" type="submit" style="background-color: #1abc9c;">Cari</button>
              </div>
        </form>
    </div>
</div>
@if ($projects->count())
<div class="loader mt-1"></div>
<main id="main" role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        {{-- <ol class="carousel-indicators ">
            <li data-target="#myCarousel" data-slide-to="0" class="bg-primary"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="bg-primary"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="bg-primary"></li>
        </ol> --}}
        <div class="carousel-inner mt-1">
            <div class="carousel-item active">
                <a class="text-dark" href="/projects/{{ $projects[0]->slug }}" style="text-decoration: none;">
                     <img class="first-slide img-fluid" src="https://source.unsplash.com/1200x400/?Islam" alt="First slide">
                </a>
                <div class="container">
                    <div class="carousel-caption text-left">
                    </div>
                    <h2 ><a class="text-dark" href="/projects/{{ $projects[0]->slug }}" style="text-decoration: none;">{{ $projects[0]->title }}</a></h2>
                    <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[0]->author->username }}" style="text-decoration: none;"> {{ $projects[0]->author->name }}</a> di Kategori <a href="/categories/{{ $projects[0]->category->slug }}" style="text-decoration: none;">{{ $projects[0]->category->name }}</a> {{ $projects[0]->created_at->diffForHumans() }}</small></p> 
                    <p>{{ $projects[0]->excerpt }}</p>
                    <div class="text-center">
                <a class="btn btn-lg btn-primary" href="/projects/{{ $projects[0]->slug }}" role="button">Selengkapnya</a>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <a class="text-dark" href="/projects/{{ $projects[1]->slug }}" style="text-decoration: none;">
                    <img class="second-slide img-fluid" src="https://source.unsplash.com/1200x400?Islam" alt="Second slide">
                </a>
                <div class="container">
                    <div class="carousel-caption text-left">                
                    </div>
                    <h2 ><a class="text-dark" href="/projects/{{ $projects[1]->slug }}" style="text-decoration: none;">{{ $projects[1]->title }}</a></h2>
                    <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[1]->author->username }}" style="text-decoration: none;"> {{ $projects[1]->author->name }}</a> di Kategori <a href="/categories/{{ $projects[1]->category->slug }}" style="text-decoration: none;">{{ $projects[1]->category->name }}</a> {{ $projects[1]->created_at->diffForHumans() }}</small></p>                              
                    <p>{{ $projects[1]->excerpt }}</p>
                    <div class="text-center">
                <a class="btn btn-lg btn-primary" href="/projects/{{ $projects[1]->slug }}">Selengkapnya</a>
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <a class="text-dark" href="/projects/{{ $projects[2]->slug }}" style="text-decoration: none;">
                    <img class="third-slide img-fluid"  src="https://source.unsplash.com/1200x400?Masjid" alt="Third slide">
                </a>
                <div class="container">
                    <div class="carousel-caption text-left">
                    </div>
                    <h2 ><a class="text-dark" href="/projects/{{ $projects[2]->slug }}" style="text-decoration: none;">{{ $projects[2]->title }}</a></h2>
                    <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[2]->author->username }}" style="text-decoration: none;"> {{ $projects[2]->author->name }}</a> di Kategori <a href="/categories/{{ $projects[2]->category->slug }}" style="text-decoration: none;">{{ $projects[2]->category->name }}</a> {{ $projects[2]->created_at->diffForHumans() }}</small></p>                                 
                    <p>{{ $projects[2]->excerpt }}</p>
                    <div class="text-center" >
                <a class="btn btn-lg btn-primary" href="/projects/{{ $projects[2]->slug }}" role="button">Selengkapnya</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</main>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
                <div class="container marketing py-5 text-center">
               
                <hr>  
            <div class="container-fluid"> 
               
                <div class="row">
                    @foreach ($projects->skip(3) as $project)

                    <div class="col-md-4 mb-3">
                        <a class="text-dark" href="/projects/{{ $project->slug }}" style="text-decoration: none;">
                            <img class="img-fluid"  src="https://source.unsplash.com/500x400?aesthetic" alt="{{ $project->title }}">
                        </a>
                       <h5><a class="text-dark" href="/projects/{{ $project->slug }}" style="text-decoration: none;">{{ $project->title }}</a></h5>
                        <small><p>Diposting oleh : <a href="/authors/{{ $project->author->username }}" style="text-decoration: none;"> {{ $project->author->name }} {{ $project->created_at->diffForHumans() }}</a><p></small>
                        <p>{{ $project->excerpt }}</p>
                        <p>
                            <a class="btn btn-secondary" href="/projects/{{ $project->slug }}" role="button">Selengkapnya &raquo;</a>
                        </p>
                        <hr class="featurette-divider">


                    </div>
                    
        @endforeach

                </div>
               <div class="d-flex justify-content-center">
                {{ $projects->links() }}
               </div>
        
            <hr>
            <div class="row mb-2">
                <marquee behavior="" direction=""> <h1 class="fw-bold text-success">Postingan Kegiatan Terbaru</h1></marquee>
             </div>
             
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 ><a class="text-dark" href="/projects/{{ $projects[0]->slug }}" style="text-decoration: none;">{{ $projects[0]->title }}</a></h2>
                    <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[0]->author->username }}" style="text-decoration: none;"> {{ $projects[0]->author->name }}</a> di Kategori <a href="/categories/{{ $projects[0]->category->slug }}" style="text-decoration: none;">{{ $projects[0]->category->name }}</a> {{ $projects[0]->created_at->diffForHumans() }}</small></p> 
                    <p>{{ $projects[0]->excerpt }}</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="/projects/{{ $projects[0]->slug }}" role="button">Selengkapnya</a>
                    </p>
                </div>
                <div class="col-md-5">
                    <a class="text-dark" href="/projects/{{ $projects[0]->slug }}" style="text-decoration: none;">
                        <img class="first-slide img-fluid" src="https://source.unsplash.com/500x500/?Islam" alt="First slide">
                    </a>

                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 ><a class="text-dark" href="/projects/{{ $projects[1]->slug }}" style="text-decoration: none;">{{ $projects[1]->title }}</a></h2>
                    <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[1]->author->username }}" style="text-decoration: none;"> {{ $projects[1]->author->name }}</a> di Kategori <a href="/categories/{{ $projects[1]->category->slug }}" style="text-decoration: none;">{{ $projects[1]->category->name }}</a> {{ $projects[1]->created_at->diffForHumans() }}</small></p>                              
                    <p>{{ $projects[1]->excerpt }}</p>
                    <p>
                <a class="btn btn-lg btn-primary" href="/projects/{{ $projects[1]->slug }}" role="button">Selengkapnya</a>
                </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <a class="text-dark" href="/projects/{{ $projects[1]->slug }}" style="text-decoration: none;">
                        <img class="second-slide img-fluid" src="https://source.unsplash.com/500x500/?Islam" alt="Second slide">
                    </a>
    
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 ><a class="text-dark" href="/projects/{{ $projects[2]->slug }}" style="text-decoration: none;">{{ $projects[2]->title }}</a></h2>
                    <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[2]->author->username }}" style="text-decoration: none;"> {{ $projects[2]->author->name }}</a> di Kategori <a href="/categories/{{ $projects[2]->category->slug }}" style="text-decoration: none;">{{ $projects[2]->category->name }}</a> {{ $projects[2]->created_at->diffForHumans() }}</small></p>                                 
                    <p>{{ $projects[2]->excerpt }}</p>
                    <p>
                <a class="btn btn-lg btn-primary" href="/projects/{{ $projects[2]->slug }}" role="button">Selengkapnya</a>
                </p>
                </div>
                <div class="col-md-5 mb-2">
                    <a class="text-dark" href="/projects/{{ $projects[2]->slug }}" style="text-decoration: none;">
                        <img class="third-slide img-fluid"  src="https://source.unsplash.com/500x500/?Masjid" alt="Third slide">
                    </a>
                </div>
                
                @else
                <div class="conatiner-fluid">
<br><br><br><br><br><br><br><br>
                    <p class="text-center fs-4">Tidak ditemukan</p>
<br><br><br><br><br><br><br><br>
                @endif
                </div>
                
            </div>
             
                <link href="../about/css/styles.css" rel="stylesheet" />
                <link href="../template/css/sb-admin-2.min.css" rel="stylesheet">
            
            <script src="../template/vendor/jquery/jquery.min.js"></script>
            <script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            
            <!-- Core plugin JavaScript-->
            <script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>
            
            <!-- Custom scripts for all pages-->
            <script src="../template/js/sb-admin-2.min.js"></script>
            
            <!-- Page level plugins -->
            <script src="../template/vendor/chart.js/Chart.min.js"></script>
            
            <!-- Page level custom scripts -->
            <script src="../template/js/demo/chart-area-demo.js"></script>
            <script src="../template/js/demo/chart-pie-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="../about/js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            <script src="../kegiatan/dist/jquery/jquery.min.js"></script>
            <script src="../kegiatan/dist/popper/popper.min.js"></script>
            <script src="../kegiatan/dist/bootstrap/js/bootstrap.min.js"></script>
            <script src="../kegiatan/js/main.min.js"></script>
   
@endsection
