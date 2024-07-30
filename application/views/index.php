<div class="container-fluid navigasi" id="header">
    <div class="row">
        <div class="col-md-2 p-0 d-block"></div>
        <div class="col-md-8 p-0">
            <nav class="navbar navbar-expand-xl navbar-light  p-0 m-auto">
                <div class="container-fluid d-flex justify-content-between">
                    <a href="#">
                        <div class="headd h-100 d-flex align-items-center mx-3">
                            <div class="logo">
                                <img src="<?= base_url('assets/image/logo.png'); ?>" alt="">
                            </div>
                            <div class="teks ms-1 ">
                                <h1 class="m-0 p-0 navbar-brand">TECHNO MEDIC</h1>
                            </div>
                        </div>
                    </a>

                    <button class="navbar-toggler mx-3" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header pb-0">
                            <div class="headd h-100 d-flex align-items-center">
                                <div class="logo">
                                    <img src="<?= base_url('assets/image/logo.png'); ?>" alt="">
                                </div>
                                <div class="teks ms-1">
                                    <h5 class="m-0 p-0 offcanvas-title" id="offcanvasNavbarLabel">TECHNO MEDIC</h5>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-flex  align-items-between">
                            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 ">
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="#">BERANDA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tentang">TENTANG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#layanan">LAYANAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">BLOG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#klien">KLIEN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#kontak">KONTAK</a>
                                </li>
                            </ul>

                            <div class="kontak my-auto me-2 h-100 d-flex align-items-end">
                                <a
                                    href="https://api.whatsapp.com/send/?phone=6285641584013&text=Saya%20mau%20tanya%20terkait%20simrs%20technomedic"><i
                                        class="mx-1 fa fa-whatsapp"></i></a>
                                <a href="https://www.instagram.com/technomedic.id/"><i
                                        class="mx-1 fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-2 p-0 d-block"></div>
    </div>
</div>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img id="imgcarousel" src="<?= base_url('assets/image/hero.jpg'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-content d-flex">
                <div class="tekshero content-70 d-flex align-items-start text-start flex-column">
                    <!-- Konten 70% -->
                    <h1>ONE-STOP HEALTH SOLUTION SYSTEM</h1>
                    <div class="para">
                        <p>Tim kami akan membantu anda untuk
                            mempermudah pelayanan kesehatan dengan
                            solusi yang kami miliki</p>
                    </div>
                    <a href="">
                        <div class="tombolhero">HUBUNGI KAMI!</div>
                    </a>
                    <div class="socproof d-flex align-items-center justify-content-center mt-2">
                        <div class="rumahsakit mx-1">
                            <span class="rs ">
                                <img src="<?= base_url('assets/image/rs1.png'); ?>" alt="Image 1">
                            </span>
                            <span class="rs">
                                <img src="<?= base_url('assets/image/rs2.png'); ?>" alt="Image 2">
                            </span>
                            <span class="rs">
                                <img src="<?= base_url('assets/image/rs3.png'); ?>" alt="Image 3">
                            </span>
                        </div>
                        <span>Telah dipercayai 15+ rumah sakit</span>
                    </div>
                </div>
                <div class="gambarhero content-30">
                    <img class="d-block" src="<?= base_url('assets/image/hero-img.png'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img id="imgcarousel" src="<?= base_url('assets/image/hero2.jpg'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-content d-flex">
                <div class="tekshero content-70 d-flex align-items-start text-start flex-column">
                    <!-- Konten 70% -->
                    <h1>SIMRS MULTIPLATFORM</h1>
                    <div class="para">
                        <p>Kami menyediakan SIMRS(Sistem Informasi Manajemen Rumah Sakit) berbasis web dan android yang
                            telah support berbagai device, PC/Mobile</p>
                    </div>
                    <a href="">
                        <div class="tombolhero">HUBUNGI KAMI!</div>
                    </a>
                    <div class="socproof d-flex align-items-center justify-content-center mt-2">
                        <div class="rumahsakit mx-1">
                            <span class="rs ">
                                <img src="<?= base_url('assets/image/rs1.png'); ?>" alt="Image 1">
                            </span>
                            <span class="rs">
                                <img src="<?= base_url('assets/image/rs2.png'); ?>" alt="Image 2">
                            </span>
                            <span class="rs">
                                <img src="<?= base_url('assets/image/rs3.png'); ?>" alt="Image 3">
                            </span>
                        </div>
                        <span>Telah dipercayai 15+ rumah sakit</span>
                    </div>
                </div>
                <div class="gambarhero platform content-30">
                    <img class="d-block" src="<?= base_url('assets/image/platform.png'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img id="imgcarousel" src="<?= base_url('assets/image/hero3.jpg'); ?>" class="d-block w-100" alt="...">
            <div class="carousel-content d-flex">
                <div class="tekshero content-70 d-flex align-items-start text-start flex-column">
                    <!-- Konten 70% -->
                    <h1>INTEGRASI APLIKASI</h1>
                    <div class="para">
                        <p>SIMRS kami telah terintegrasi dengan berbagai aplikasi seperti BPJS, KEMKES, Laboratory
                            Informatics System, PAYMENT, RIS PACS, TTE</p>
                    </div>
                    <a href="">
                        <div class="tombolhero">HUBUNGI KAMI!</div>
                    </a>
                    <div class="socproof d-flex align-items-center justify-content-center mt-2">
                        <div class="rumahsakit mx-1">
                            <span class="rs ">
                                <img src="<?= base_url('assets/image/rs1.png'); ?>" alt="Image 1">
                            </span>
                            <span class="rs">
                                <img src="<?= base_url('assets/image/rs2.png'); ?>" alt="Image 2">
                            </span>
                            <span class="rs">
                                <img src="<?= base_url('assets/image/rs3.png'); ?>" alt="Image 3">
                            </span>
                        </div>
                        <span>Telah dipercayai 15+ rumah sakit</span>
                    </div>
                </div>
                <div class="gambarhero bunderan content-30">
                    <img class="d-block rounded-circle" src="<?= base_url('assets/image/bunderan.png'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel Controls -->
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
</div>

<!-- Tab List -->
<div class="carousel-tabs">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
</div>