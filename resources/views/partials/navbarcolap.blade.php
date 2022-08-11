<div class="container" style="background-color:  #1abc9c ">
    <nav class="navbar navbar-expand-lg  text-uppercase  border-3" id="mainNav" style="background-color:  #1abc9c ">
        <div class="container">
            @yield('buttonsidebar')
            
                
                <a class="navbar-brand mt-0 ms-start fs-5" href="/">BMPG-TPQ Kab. Karimun
              </a>
    
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse ms-end fs-6" id="navbarResponsive">
                <ul class="navbar-nav ms-auto fs-6">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link  py-1 px-0 px-lg-1 rounded " href="/"> Beranda</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link  py-1 px-0 px-lg-1 rounded"   href="/tentang">Tentang</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link  py-1 px-0 px-lg-1rounded"   href="/projects">Kegiatan</a></li>
                      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link  py-1 px-0 px-lg-1 rounded"   href="/login">Login</a></li>
                </ul> 
            </div>
        </div>
    </nav>
    {{-- end navbar --}}
    <div class="row py-5 mb-n5">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total TPQ : </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><h4 class="text-primary"></h4></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Guru TPQ</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-file-earmark-person fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Santri
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-file-earmark-person fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pesan
                                </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


