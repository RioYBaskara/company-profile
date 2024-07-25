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
                                    <a class="nav-link" href="#">TENTANG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">LAYANAN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">BLOG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">KLIEN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">KONTAK</a>
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