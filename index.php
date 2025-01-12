<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Home | TEB Career Connect</title>
    <link rel="icon" type="image/png" href="assets/images/TEB.png">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time();?>">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-unpad.png" alt="" class="unpad">
                <img src="assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#karir">Karir</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#program">Program Studi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bootcamp">Bootcamp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="- btn btn-primary rounded ml-4" href="login.php">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>

    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">Hallo Para Sarjana & Sarjana Terapan</h6>
                <h6 class="title">Fakultas Ekonomi Dan Bisnis</h6>
                <p>Universitas Padjadjaran</p>
                <div class="socials mt-4">
                    <a class="social-item" href="javascript:void(0)"><i class="ti-instagram"></i></a>
                    <a class="social-item" href="javascript:void(0)"><i class="ti-youtube"></i></a>
                    <a class="social-item" href="javascript:void(0)"><i class="ti-desktop"></i></a>
                </div>
            </div>              
            <div class="img-holder">
                <img src="assets/images/FEB.png" alt="">
            </div>      
        </div>  

        <div class="widget">
            <div class="widget-item">
                <h2>5</h2>
                <p>Program Sarjana</p>
            </div>
            <div class="widget-item">
                <h2>4</h2>
                <p>Program Diploma IV</p>
            </div>
            <div class="widget-item">
                <h2>30rb+</h2>
                <p>Alumni</p>
            </div>
        </div>
    </header>

    <!-- Service section -->
    <section id="karir" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Layanan</h6>
            <h6 class="section-title mb-4">What We Do</h6>
            <p class="mb-5 pb-4">Layanan Karier kami dirancang untuk membantu siswa dan lulusan mempersiapkan diri 
                untuk kesuksesan profesional. Kami menyediakan bimbingan dan sumber daya yang komprehensif untuk 
                membantu mereka menemukan peluang magang, melamar pekerjaan, dan membangun jaringan profesional.</p>

            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-marker"></i>
                            <?php
                            echo '<a href="#karir" class="link-sub" onclick="alert(\'Login Terlebih Dahulu!\');">
                                <h5>Penjelajahan Karir</h5>
                            </a>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-printer"></i>
                            <?php
                            echo '<a href="#karir" class="link-sub" onclick="alert(\'Login Terlebih Dahulu!\');">
                                <h5>Peluang Magang</h5>
                            </a>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-archive"></i>
                            <?php
                            echo '<a href="#karir" class="link-sub" onclick="alert(\'Login Terlebih Dahulu!\');">
                                <h5>Lowongan Kerja</h5>
                            </a>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-link"></i>
                            <?php
                            echo '<a href="#karir" class="link-sub" onclick="alert(\'Login Terlebih Dahulu!\');">
                                <h5>Pemetaan Alumni</h5>
                            </a>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Studi Section -->
    <section id="program" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Fakultas Ekonomi Dan Bisnis</h6>
            <h6 class="section-title mb-4">Program Studi</h6>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/bisdig.png" alt="">
                                <p>Setelah lulus dari program ini, Anda akan dilengkapi dengan baik untuk 
                                    bergabung dengan organisasi sektor publik dan swasta. Karir yang mungkin 
                                    Anda pilih untuk dikejar meliputi: Marketing Analyst, Financial Analyst,
                                    Data Analyst, Business Intelligent Manager, Data Scientist, Startup Consultant</p>
                                <h1 class="title">Dr. Mery Citra Sondari, S.E., M.Si.</h1>
                                <h1 class="subtitle">Bisnis Digital</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/akun.png" alt="">
                                <p>Lulusan Program Studi Akuntansi FEB Unpad memiliki prospek sebagai: 
                                    Auditor, Analis Sistem/Bisnis, Akuntan, Pengembang Sistem Informasi Akuntansi, 
                                    Manajer level pertama dalam bidang akuntan, pajak, dan keuangan</p>
                                <h1 class="title">Citra Sukmadilaga , SE., MBA., Ph.D.</h1>
                                <h1 class="subtitle">Akuntansi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/ilmuekonomi.png" alt="">
                                <p>Lulusan program studi S1 Ilmu Ekonomi dapat menjadi :
                                    Analis Kebijakan Publik, Analis Bisnis, Analis Perbankan dan Finansial</p>
                                <h1 class="title">Alfiah Hasanah, SE.,MEc.,PhD</h1>
                                <h1 class="subtitle">Ilmu Ekonomi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/mene.png" alt="">
                                <p>Manajer tingkat pertama dalam Pemasaran, Operasi, SDM, dan Keuangan, 
                                    bekerja di berbagai lembaga pemerintah dan swasta, dan berbagai sektor: perbankan, 
                                    manufaktur, agribisnis, pertambangan, perdagangan, asuransi, Analis dan konsultan di lembaga konsultasi 
                                    dan penelitian manajemen pemerintah dan non-pemerintah, Pengusaha muda mandiri, Dosen/asisten magang di universitas dan/atau pelatih di lembaga pelatihan</p>
                                <h1 class="title">Dr. Wa Ode Zusnita Muizu, S.E., M.Si.</h1>
                                <h1 class="subtitle">Manajemen</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/ekis.png" alt="">
                                <p>Lulusan program studi S1 Ekonomi Islam dapat menjadi : Analisis dan Peneliti Ekonomi serta 
                                    Keuangan Syariah, Praktisi Lembaga Keuangan Syariah Komersial dan Sosial Kewirausahaan, Otoritas 
                                    Jasa Keuangan, Bank Syariah, Startup, BAZNAS, Konsultan dan Ahli Ekonomi Islam, PNS, Dosen</p>
                                <h1 class="title">Cupian, SE.MT .,Ph.D</h1>
                                <h1 class="subtitle">Ekonomi Islam</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/akunjak.png" alt="">
                                <p>
                                Program Studi D4 Akuntansi Perpajakan mengharapkan alumninya memiliki
                                kompetensi yang baik serta peluang untuk mendapatkan pekerjaan sebagai
                                diantara lain: analis pajak, konsultan pajak, akuntan pajak, account
                                representatives, pemeriksa pajak, dosen dengan keahlian di bidang perpajakan pengulas laporan keberatan pajak.
                                </p>
                                <h1 class="title">Dr. Muhammad Dahlan, S.E., Ak., M.Acc</h1>
                                <h1 class="subtitle">D-IV Akuntansi Perpajakan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/asp.png" alt="">
                                <p>
                                    Beberapa mahasiswa lulusan Program Studi ASP bekerja di The Big 4, instansi sektor publik, baik pemerintahan dan non pemerintahan, 
                                    diantaranya: Pemerintah Daerah & Pusat, Badan Pemeriksa & Pengawas, Kantor Akuntan Publik, Kantor Jasa Akuntan, Rumah Sakit, Institusi Pendidikan, 
                                    Yayasan, Lembaga Swadaya Masyarakat, Institusi Sosial & Keagamaan.
                                </p>
                                <h1 class="title">Dina Sartika, S.E., M.Si., Ph.D.</h1>
                                <h1 class="subtitle">D-IV Akuntansi Sektor Publik</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/bisin.png" alt="">
                                <p>Lulusan Program Studi ini dapat bekerja sebagai: Manajer Ekspor Impor, Wirausahawan orientasi ekspor </p>
                                <h1 class="title">Yunizar, S.E., M.Sc. AD., Ph.D.</h1>
                                <h1 class="subtitle">D-IV Bisnis International</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/pemdig.png" alt="">
                                <p>Producing graduates who have Digital Marketing competencies that are relevant to environmental changes and highly competitive</p>
                                <h1 class="title">Prof. Dr. R. Arief Helmi, S.E., M.Si.</h1>
                                <h1 class="subtitle">D-IV Pemesaran Digital</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="bootcamp" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Informasi</h6>
            <h6 class="section-title mb-4">Bootcamp</h6>
            <!-- <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p> -->

            <div class="row text-left">
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/images/blog-1.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Sukseskan Karier Anda dengan Bootcamp Bisnis Digital: Peluang Baru di FEB</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Agtan</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 112</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 15</a>
                            </div>
                            <p>
                                Temukan bagaimana bootcamp Bisnis Digital di Fakultas Ekonomi dan Bisnis 
                                memberikan peluang unik bagi mahasiswa untuk mengembangkan keterampilan 
                                digital yang diperlukan di era ekonomi digital. Dengan fokus pada strategi 
                                pemasaran digital, analisis data, dan teknologi e-commerce, bootcamp ini 
                                mempersiapkan mahasiswa untuk menjadi pemimpin di dunia bisnis yang berubah dengan cepat.
                            </p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/images/blog-2.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Inovasi dalam Akuntansi: Mendalami Bootcamp Terbaru di FEB</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Bisnis Digital</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 45</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 12</a>
                            </div>
                            <p>
                                Ikuti perkembangan terbaru dalam dunia akuntansi dengan bootcamp terbaru di Fakultas 
                                Ekonomi dan Bisnis. Dalam bootcamp ini, mahasiswa akan mendalami konsep-konsep akuntansi terkini, 
                                teknologi keuangan, dan praktik terbaik dalam menghadapi tantangan-tantangan akuntansi modern. 
                                Bersiaplah untuk mengeksplorasi peran penting teknologi dalam meningkatkan efisiensi dan akurasi 
                                dalam proses akuntansi.
                            </p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/images/blog-3.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Menjadi Ahli Ekonomi yang Kompeten: Ikuti Bootcamp Ilmu Ekonomi di FEB</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: FEB</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 65</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 23</a>
                            </div>
                            <p>
                                Dengan perubahan cepat dalam dinamika ekonomi global, menjadi penting untuk memiliki 
                                pemahaman yang kuat tentang prinsip-prinsip ekonomi modern. Bootcamp Ilmu Ekonomi di 
                                Fakultas Ekonomi dan Bisnis menawarkan kesempatan bagi mahasiswa untuk mendalami teori 
                                ekonomi terkini, menganalisis kebijakan ekonomi, dan menguasai alat-alat analisis ekonomi 
                                yang canggih. Bergabunglah dan persiapkan diri untuk menjadi pemikir ekonomi yang berpengaruh 
                                di masa depan.
                            </p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <!-- Contact Section -->
    <section id="contact" class="position-relative section">
        <div class="container text-center">
            <h6 class="subtitle">Kontak</h6>
            <h6 class="section-title mb-4">Hubungi Kami</h6>

            <div class="contact text-left">
                <div class="contact-infos">
                    <br>
                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5>lokasi</h5>
                            <p> Gedung Alpha Lantai 1, Fakultas Ekonomi dan Bisnis Universitas Padjadjaran</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-mobile"></i>
                        <div>
                            <h5>No Telepon</h5>
                            <p>+62 22 250 9055 / +62 22 2511426</p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5>Email</h5>
                            <p>Agtan0508@gmail.com</p>
                        </div>
                    </div>
                    <br>
                </div>                  
            </div>
        </div>  
    </section>

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="https://www.instagram.com/agtddf_/" target="_blank">Agtan Dwi Putra Permadi (TAN EDUCATION BUSINESS)</a></p>
                </div>
            </div>
        </div>
    </footer> 
 
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="assets/js/steller.js"></script>

</body>
</html>
