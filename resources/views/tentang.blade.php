@extends('layout.main')
@include('partials.navbar')

{{-- @include('partials.navbar') --}}
@section('container')
<div class="container-fluid">
    <!-- Masthead-->
    <header class="masthead bg-light text-success text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="template/gambar/logo.jpg" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">{{ $Nama }}</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="bi bi-moon-fill"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Organisasi - Pendidikan - Agama</p>
        </div>
    </header>
    <!-- About Section-->
    <section class="page-section bg-success text-light mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-light">Tentang</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line bg-light"></div>
                <div class="divider-custom-icon-light "><i class="fas fa-star "></i></div>
                <div class="divider-custom-line bg-light"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">

                <div class="col-lg-6 ms-auto">
                    
                        
                            <p > <strong><h6 class="text-center">Sejarah Berdirinya BMPG – TPQ</h6></strong></p> 
                              <p>Pada era tahun 90 an, Taman Pendidikan Al – Qur’an sebenarnya sudah ada di Kabupaten Karimun ( yang pada waktu itu masih Kecamatan ), namun baru ada beberapa TPQ dan belum terkoordinir serta methode pembelajarannya masih bernuansa tradisional.Keberadaan TPQ yang masih bernuansa tradisional tersebut ternyata semakin mendapat tempat di hati masyarakat, terbukti semakin banyak orangtua yang mendaftarkan anaknya untuk belajar di TPQ.                       
                               Seiring dengan perkembangan Karimun menjadi sebuah Kabupaten, semakin banyak TPQ – TPQ baru yang bermunculan untuk menampung aspirasi masyarakat yang menginginkan putra – putinya terbebas dari buta aksara Al – Qur’an. Pada awal tahun 2001 sudah tercatat ada 50 lebih TPQ yang tersebar di Kecamatan dalam Kabupaten Karimun.
                               Melihat perkembangan TPQ di Kota – Kota besar seperti Yogyakarta yang sudah menjadi Primadona dengan methode pembelajaran yang dikemas rapi dan sistematis serta pengelolaannya yang terkoordinir, maka timbul keinginan beberapa orang yang berkompeten dengan perkembangan TPQ di Karimun untuk membentuk suatu wadah yang menjadi induk dari TPQ.
                               Dengan pengarahan dari Kepala Kantor Departemen Agama ( Drs. H. Razali Jaya ) dan dukungan dari Pemerintah Kabupaten Karimun serta hasil Study Banding dan referensi lain yang diperoleh dibeberapa Kabupaten Lain, maka tepatnya pada tanggal 10 Februari 2002 diadakan musyawarah yang bertempat di TPQ Al – Khair Sungai Raya Kecamatan Meral dan dihadiri oleh sekitar 16 Pengurus, Kepala serta Guru – Guru TPQ. Dari hasil musyawarah tersebut terbentuklah BMPG – TPQ ( Badan Musyawarah Pengurus – Guru Taman Pendidikan Al – Qur’an ) Kabupaten Karimun sebagai Wadah untuk menyatukan Visi dan Misi Taman Pendidikan Al – Qur’an di Kabupaten Karimun.</p> 
                           
                              <p> Adapun maksud dan tujuan BMPG – TPQ Kabupaten Karimun didirikan adalah sebagai berikut: <br></p>
                               1. Merupakan wadah untuk menyatukan Visi dan Misi Taman PendidikanAl–Qur’andiKabupaten Karimun.<br>
                               2. Mendata Jumlah TPQ, Pengurus, Guru dan Santri.<br>
                               3. Silaturrahmi antara Pengurus dan Guru TPQ.<br>
                               4. Menyelenggarakan dan membina TPQ yang ada dalam rangka membantu
                               meningkatkan Iman dan Taqwa sebagai salah satu azam Kabupaten Karimun.<br></p><br>
                           <p><strong> <h6 class="text-center">VISI DAN MISI TAMAN PENDIDIKAN AL-QUR'AN :</h6> </strong></p>
                               <p><strong><h6 class="text-center">VISI</h6></strong>  
                                   ”TPQ menyiapkan generasi qur’ani yang beriman dan bertaqwa, yang menjadikan Al – Qur’an sebagai bacaan utama dan pedoman hidupnya, berakhlak mulia, cerdas, terampil, sehat, punya rasa tanggung jawab moral dan sosial demi masa depan gemilang.”</p>
                              <p><strong><h6 class="text-center">MISI</h6></strong> 
                               ” TPQ membawa misi dwi tunggal, yaitu misi pendidikan dan misi dakwah islamiyah. Selaku pembawa misi pendidikan, TPQ tampil berdampingan dengan pendidikan formal. Dan selaku pembawa misi dakwah, TPQ merupakan merupakan bagian dari dakwah islamiyah.”</p>        </article>
        
                       
                </div>
                <div class="col-lg-6 me-auto">
                  
                    <p><strong><h6 class="text-center">PEMBENTUKAN PENGURUS</h6></strong> </p>
                     <p> Kepengurusan BMPG – TPQ Kabupaten Karimun Masa Bakti 2006 – 2011 dibentuk melalui Mubes ( Musyawarah Besar ) Pengurus dan Guru TPQ pada Tanggal 21 April 2006
                        SUSUNAN PENGURUS
                        Kepengurusan BMPG – TPQ Kabupaten Karimun Masa Bakti 2006 – 2011 yang dikukuhkan pada tanggal 23 Agustus 2006 adalah sebagai berikut :</p>      
                       
                    <p> Seiring dengan keinginan Pemerintah Daerah Kabupaten Karimun untuk menjadikan Ijazah TPQ sebagai salah satu Syarat pendamping masuk ke jenjang Pendidikan Formal (SLTP / MTs ), dan menjadikan tahun 2007 sebagai tahun peningkatan Kwalitas Pendidikan di TPQ, maka BMPG – TPQ Kabupaten Karimun membuat Program Kerja sebagai berikut :</p>
                       <p><strong>A. Menertibkan Administrasi dan Manajemen Keorganisasian dengan rincian sebgai berikut:</strong></p> 
               <p>1. Menjalin Koordinasi yang baik dengan Institusi terkait.</p>         
                     <p>2. Meningkatkan Kinerja Pengurus Organisasi.</p>   
                    <p>3. Melengkapi Administrasi dan Kearsipan. </p>  
             <P> <strong>B. Memperbaiki Administrasi dan Manajemen Pengelolaan TKQ / TPQ< dengan rincian sebagai berikut :</strong> </P>        
                <P> 1. Membuat Buku Juklak.</P>       
                <P>2. Penyeragaman Format Laporan Bulanan.</P>        
                    <P>3. Penyeragaman Bentuk Stempel, Kop serta Amplop Surat.</P>    
                     <p>4. Membuat Acuan Pernomoran Surat.</p>   
                    <p>5. Menerbitkan Nomor Statistik TPQ dan Nomor Induk Ustad</p>    
                    <p>6. Menerbitkan SK Bagi Kepala TKQ / TPQ</p>    
                    <p>7. Mengadakan Study Banding.</p>    
                     <p>8. Mengadakan Monitoring dan Supervisi.</p>  
                     <p>9. Membentuk Tim Munaqosyah Kecamatan.</p>   
                   <p>10. Menyeragamkan Rapot dan Leger.</p>     
                    <p>11. Menerbitkan Kalender Pendidikan dan Kegiatan.</p>    
                        
                   <p><strong>C.Meningkatkan Kwalitas Ustad TKQ / TPQ dengan rincian sebagai berikut</strong> </p>
                   <p>1. Membuat Kurikulum</p> 
                 <p>2. Mengadakan Pembinaan dan Pembekalan bagi Kepala TKQ / TPQ beserta Ustad</p>   
                  <p>3. Membuat dan mengadakan Buku Pegangan Ustad.</p>  
                 <p>4. Mengadakan Sertifikasi Bagi Kepala TKQ / TPQ beserta Ustad.  </p>     
                    <p><strong>D. Meningkatkan Kwalitas Santri</strong> </p>   
                     <p>1. Membuat dan Mengadakan buku pegangan Santri.</p>   
                     <p>2. Mengadakan Lomba – Lomba dan atau kegiatan yang dapat meningkatkan motivasi Santri dalam belajar.</p>   
                     <p>3. Mengadakan Munaqosyah dan ujian semester.</p>   
                      <p>4. Mengadakan Legalisir Ijazah.</p>  
                      <p>5. Mengadakan kemah dakwah</p>  
                        <p><strong><h6 class="text-center">LOGO/LAMBANG BMPG-TPQ KABUPATEN KARIMUN</h6></strong> </p>
                         <p><strong><h6>ARTI LAMBANG :</h6></strong> </p>   
                         <p>1. Bintang : Melambangkan Ketauhidan Kepada Allah SWT.</p>    
                         <p>2. Masjid : Melambangkan Ketaatan Kepada Allah SWT.</p>    
                          <p>3. Al – Qur’an : Melambangkan Kewajiban Menuntut Ilmu dan mendalami al – Qur’an</p>   
                          <p>4. Rantai : Melambangkan Ukhuwah Islamiyah.</p>   
                       
                </div>
                
            </div>
        
        </div>
    </section>

    <!-- Portfolio Section-->
    <section class="page-section  portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase mb-0" style="color: #42ba96">Struktur Kepengurusan</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="bi bi-moon-fill"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio struktur-->
            <div class="container">
                <div class="row">
                   <!-- component container -->
<div id="diagram"></div>

        
        </div>
    </div>
    </div>
            
        </div>
    </section>

    <!-- Contact Section-->
    <section class="page-section" id="contact" >
        <div class="container ">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase mb-0" style="color: #42ba96">Kontak Kami</h2>
            <!-- Icon Divider-->
            <div class="divider-custom ">
                <div class="divider-custom-line" style="background-color: #42ba96"></div>
                <div class="divider-custom-icon"><i class="bi bi-moon-fill" id="kontak"></i></div>
                <div class="divider-custom-line" style="background-color: #42ba96"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" style="text-decoration-color: #42ba96">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nama</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">No HP</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Pesan</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- dataset -->
<script>
	const orgChartData = [
        {
            "id": "1",
            "text": "Chairman & CEO",
            "title": "Henry Bennett",
            "img": "https://snippet.dhtmlx.com/codebase/data/diagram/01/img/avatar-01.png"
        },
        {
            "id": "2",
            "text": "Manager",
            "title": "Mildred Kim",
            "img": "https://snippet.dhtmlx.com/codebase/data/diagram/01/img/avatar-02.png"
        },
        {
            "id": "3",
            "text": "Technical Director",
            "title": "Jerry Wagner",
            "img": "https://snippet.dhtmlx.com/codebase/data/diagram/01/img/avatar-03.png"
        },
        {
            "id": "2.1",
            "text": "Marketer",
            "title": "Charles Little",
            "img": "https://snippet.dhtmlx.com/codebase/data/diagram/01/img/avatar-04.png"
        },
        {
            "id": "3.1",
            "text": "Team Lead ",
            "title": "Jonathan Lane",
            "img": "https://snippet.dhtmlx.com/codebase/data/diagram/01/img/avatar-05.png"
        },
        {
            "id": "1-2", from: "1", to: "2", type: "line", points: [
                { x: 200, y: 200
                }
            ]
        },
        {
            "id": "1-3", from: "1", to: "3", type: "line"
        },
        {
            "id": "2-2.1", from: "2", to: "2.1", type: "line"
        },
        {
            "id": "3-3.1", from: "3", to: "3.1", type: "line"
        }
    ];

    const diagram = new dhx.Diagram("diagram", {
    type: "org",
    defaultShapeType: "img-card" // the "img-card" type is used for shapes with images
});
diagram.data.parse(orgChartData);
</script>
              
    
@endsection