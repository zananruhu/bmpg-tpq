@extends('layout.main')

@section('sidebar')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar  accordion mb-5" id="accordionSidebar" style="background-color: #e0eee0
        ;" > 

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="mt-auto">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <div class="sidebar-heading text-secondary">
            BMPG-TPQ
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-archive-fill"></i>
                    <span>Data TPQ</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kecamatan:</h6>
                        <a class="collapse-item" href="">Karimun</a>
                        <a class="collapse-item" href="">Meral</a>
                        <a class="collapse-item" href="">Tebing</a>
                        <a class="collapse-item" href="">Meral Barat</a>
                        <a class="collapse-item" href="">Buru</a>
                        <a class="collapse-item" href="">Kundur</a>
                        <a class="collapse-item" href="">Kundur Utara</a>
                        <a class="collapse-item" href="">Kundur Barat</a>
                        <a class="collapse-item" href="">Belat</a>
                        <a class="collapse-item" href="">Ungar</a>
                        <a class="collapse-item" href="">Durai</a>
                        <a class="collapse-item" href="">Moro</a>
                        <a class="collapse-item" href="/tpqs">Lihat Semua</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bi bi-file-earmark-person"></i>
                    <span >Data Guru TPQ</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h3 class="collapse-header text-dark">Kecamatan:</h3>
                        <a class="collapse-item" href="">Karimun</a>
                        <a class="collapse-item " href="">Meral</a>
                        <a class="collapse-item" href="">Tebing</a>
                        <a class="collapse-item" href="">Meral Barat</a>
                        <a class="collapse-item" href="">Buru</a>
                        <a class="collapse-item" href="">Kundur</a>
                        <a class="collapse-item" href="">Kundur Utara</a>
                        <a class="collapse-item" href="">Kundur Barat</a>
                        <a class="collapse-item" href="">Belat</a>
                        <a class="collapse-item" href="">Ungar</a>
                        <a class="collapse-item" href="">Durai</a>
                        <a class="collapse-item" href="">Moro</a>
                        <a class="collapse-item" href="">Lihat Semua</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-dark">
               Santri
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="bi bi-file-earmark-person"></i>
                    <span>Data Santri</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h3 class="collapse-header text-dark">Kecamatan:</h3>
                        <a class="collapse-item" href="">Karimun</a>
                        <a class="collapse-item " href="">Meral</a>
                        <a class="collapse-item" href="">Tebing</a>
                        <a class="collapse-item" href="">Meral Barat</a>
                        <a class="collapse-item" href="">Buru</a>
                        <a class="collapse-item" href="">Kundur</a>
                        <a class="collapse-item" href="">Kundur Utara</a>
                        <a class="collapse-item" href="">Kundur Barat</a>
                        <a class="collapse-item" href="">Belat</a>
                        <a class="collapse-item" href="">Ungar</a>
                        <a class="collapse-item" href="">Durai</a>
                        <a class="collapse-item" href="">Moro</a>
                        <a class="collapse-item" href="">Lihat Semua</a>
                    </div>
                </div>
            </li>
            
             <!-- Heading -->
             <div class="sidebar-heading text-dark">
            Tools
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Grafik</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel Absen</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="template/gambar/logo.jpg" alt="...">
                <p class="text-center text-dark mb-2"><strong>Visi TPQ :</strong> Menyiapkan generasi qur’ani yang beriman dan bertaqwa, yang menjadikan Al – Qur’an sebagai bacaan utama dan pedoman hidupnya, berakhlak mulia, cerdas, terampil, sehat, punya rasa tanggung jawab moral dan sosial demi masa depan gemilang.</p>

            </div>

        </ul>
        <!-- End of Sidebar -->
        @endsection
        @section('buttonsidebar')
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
        @endsection
        
        {{-- container --}}
        @Section('container')
        @include('partials.navbarcolap')
        {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-2">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="bi bi-send fa-sm text-white-50"></i> Kirim Laporan Bulanan</a>
        </div> --}}

        <!-- Content Row -->
      

        {{-- CONTENT GRAFIK --}}

    <div class="row mt-n5 justify-content-center">
        {{-- end content bar --}}
        <!-- Content grafik line -->

        <div class="col-10 ">
            
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Grafik</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Grafik:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
        </div>
            <!-- Area Chart bar -->
        <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Grafik</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="barhome"></canvas>
                </div>
            </div>
        </div>
    </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Grafik</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="PieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color: rgba(255, 9, 56, 0.7)"></i> Karimun
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color: rgba(101, 44, 183, 0.7)"></i> Meral
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color : rgba(158, 244, 11, 0.7)"></i> Tebing
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color : rgba(195, 82, 14, 0.7)"></i> Meral Barat
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle"style="color : rgba(40, 89, 0, 0.7)" ></i> Kundur
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color : rgba(205, 66, 135, 0.7)"></i> Kundur Barat
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color: rgba(241, 97, 228, 0.7)"></i> Kundur Utara
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color: rgba(115, 188, 247, 0.7)"></i> Buru
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color : rgba(179, 50, 131, 0.7);"></i> Belat
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style= "color :rgba(70, 37, 69, 0.7)"></i> Ungar
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color: rgba(0,0,51, 0.7)"></i> Durai
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle" style="color : rgba(52, 48, 253, 0.7);"></i> Moro
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row justify-contet-center">

            <!-- Content Column -->
            <div class="col-lg mb-4 ">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        
                        <h6>Berita Kegiatan Terbaru</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a  href="/projects/{{ $projects[0]->slug }}" style="text-decoration: none;">
                            <img class="img-fluid ms-auto"
                                src="https://source.unsplash.com/500x400?Islam" alt="">
                        </div>
                        <h6 class="m-0 font-weight-bold text-dark">{{ $projects[0]->title }}</h6>
                    </a>
                        <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[0]->author->username }}" style="text-decoration: none;"> {{ $projects[0]->author->name }}</a> {{ $projects[0]->created_at->diffForHumans() }}</small></p> 
                        <p class="text-dark">{{ $projects[0]->excerpt }}</p>
                    
                        <a target="_blank" rel="nofollow" href="/projects/{{ $projects[0]->slug }}">Selengkapnya
                        &rarr;</a>
                    </div>
                </div>
            </div>

                <!-- Color System -->
                <div class="col-lg mb-4 ">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6>Berita Kegiatan Terbaru</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a  href="/projects/{{ $projects[1]->slug }}" style="text-decoration: none;">
                            <img class="img-fluid"
                                src="https://source.unsplash.com/500x400?Islam" alt="">
                        </div>
                        <h6 class="m-0 font-weight-bold text-dark">{{ $projects[1]->title }}</h6>
                    </a>
                        <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[1]->author->username }}" style="text-decoration: none;"> {{ $projects[1]->author->name }}</a> di Kategori <a href="/categories/{{ $projects[1]->category->slug }}" style="text-decoration: none;">{{ $projects[1]->category->name }}</a> {{ $projects[1]->created_at->diffForHumans() }}</small></p> 
                        <p class="text-dark">{{ $projects[1]->excerpt }}</p>
                  
                        <a target="_blank" rel="nofollow" href="/projects/{{ $projects[1]->slug }}">Selengkapnya
                        &rarr;</a>
                    </div>
                </div>

                <!-- Approach -->
               
            </div>
            </div>
        <div class="row justify-contet-center">
            <div class="col-lg-6 mb-4 ">

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                       
                        <h6>Berita Kegiatan Terbaru</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a  href="/projects/{{ $projects[2]->slug }}" style="text-decoration: none;">
                            <img class="img-fluid"
                                src="https://source.unsplash.com/500x400?Islam" alt="">
                                <h6 class="m-0 font-weight-bold text-dark">{{ $projects[2]->title }}</h6>
                        </div>
                    </a>
                        <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[2]->author->username }}" style="text-decoration: none;"> {{ $projects[2]->author->name }}</a>  {{ $projects[2]->created_at->diffForHumans() }}</small></p> 
                        <p class="text-dark">{{ $projects[2]->excerpt }}</p>
                    
                        <a target="_blank" rel="nofollow" href="/projects/{{ $projects[2]->slug }}">Selengkapnya
                        &rarr;</a>
                    </div>
                </div>
            </div>

                <!-- Color System -->
                <div class="col-lg mb-4 ">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        
                        <h6>Berita Kegiatan Terbaru</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a  href="/projects/{{ $projects[3]->slug }}" style="text-decoration: none;">
                            <img class="img-fluid"
                                src="https://source.unsplash.com/500x400?Islam" alt="">
                        </div>
                        <h6 class="m-0 font-weight-bold text-dark">{{ $projects[3]->title }}</h6>
                    </a>
                        <p><small><p>Diposting oleh : <a href="/authors/{{ $projects[3]->author->username }}" style="text-decoration: none;"> {{ $projects[3]->author->name }}</a {{ $projects[3]->created_at->diffForHumans() }}</small></p> 
                        <p class="text-dark">{{ $projects[3]->excerpt }}</p>
                  
                        <a target="_blank" rel="nofollow" href="/projects/{{ $projects[3]->slug }}">Selengkapnya
                        &rarr;</a>
                    </div>
                </div>
            </div>
@include('partials.charts')
    @endsection
        {{-- end container --}}