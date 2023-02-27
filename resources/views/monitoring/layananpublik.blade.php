<!DOCTYPE html>
<html lang="en">
@include('layout.head')
  <body>
    <div class="content-wrapper">
      <header class="wrapper bg-light">
        <nav class="navbar navbar-expand-lg classic transparent navbar-light">
          <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
              <a href="./demo21.html">
                <img
                  src="frontend/img/logo-kerjasama.png"
                  style="height: 45px"
                  srcset="frontend/img/logo-kerjasama.png 2x"
                  alt=""
                />
              </a>
            </div>
            <div
              class="navbar-collapse offcanvas offcanvas-nav offcanvas-start"
            >
              <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">
                  Bagian Kerja Sama Kota Bandung
                </h3>
                <button
                  type="button"
                  class="btn-close btn-close-white"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                  <!-- Navbar Profil -->
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      data-bs-toggle="dropdown"
                      >Profil</a
                    >
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="dropdown-item" href="latarbelakang.html"
                          >Latar Belakang</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="dasar-hukum.html"
                          >Dasar Hukum</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="layanan.html"
                          >Layanan Kami</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="personil.html"
                          >Personil</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="pk.html"
                          >Perjanjian Kerja</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="ik.html"
                          >Indikator Kinerja</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="kontak.html"
                          >Kontak Kami</a
                        >
                      </li>
                    </ul>
                  </li>
                  <!-- Kerja sama -->
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      data-bs-toggle="dropdown"
                      >Kerja Sama Daerah</a
                    >
                    <ul class="dropdown-menu">
                      <li class="dropdown dropdown-submenu dropend">
                        <a
                          class="dropdown-item dropdown-toggle"
                          href="#"
                          data-bs-toggle="dropdown"
                          >Dalam Negeri</a
                        >
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="dropdown-item" href="ksdd.html"
                              >Kerjasama Daerah dengan Daerah Lain (KSDD)</a
                            >
                          </li>
                          <li class="nav-item">
                            <a class="dropdown-item" href="ksdpk.html"
                              >Kerjasama Daerah dengan Pihak Ketiga (KSDPK)</a
                            >
                          </li>
                          <li class="nav-item">
                            <a class="dropdown-item" href="sinergitas.html"
                              >Sinergitas</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend">
                        <a
                          class="dropdown-item dropdown-toggle"
                          href="#"
                          data-bs-toggle="dropdown"
                          >Luar Negeri</a
                        >
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="dropdown-item" href="ksdpl.html"
                              >Kerjasama Daerah dengan Pemerintah Daerah di Luar
                              Negeri (KSDPL)</a
                            >
                          </li>
                          <li class="nav-item">
                            <a class="dropdown-item" href="ksdll.html"
                              >Kerjasama Daerah dengan Lembaga di Luar Negeri
                              (KSDLL)</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="pengajuan.html"
                          >Formulir Pengajuan Kerja Sama</a
                        >
                      </li>
                    </ul>
                  </li>
                  <!-- monev -->
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      data-bs-toggle="dropdown"
                      >Monitoring & Evaluasi</a
                    >
                    <ul class="dropdown-menu">
                      <li class="dropdown dropdown-submenu dropend">
                        <a
                          class="dropdown-item dropdown-toggle"
                          href="#"
                          data-bs-toggle="dropdown"
                          >Evaluasi Kerjasama</a
                        >
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="dropdown-item" href="rekapitulasi.html"
                              >Rekapitulasi</a
                            >
                          </li>
                          <li class="nav-item">
                            <a class="dropdown-item" href="ig.html"
                              >Informasi Grafis</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend">
                        <a
                          class="dropdown-item dropdown-toggle"
                          href="#"
                          data-bs-toggle="dropdown"
                          >Layanan Publik</a
                        >
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="dropdown-item" href="layananpublik.html"
                              >Fasilitasi Naskah Kerjasama
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- Navbar berita -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="berita.html">Berita</a>
                    </li>
                  </ul>
                  <!-- navbar tkksd -->
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      data-bs-toggle="dropdown"
                      >TKKSD</a
                    >
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="dropdown-item" href="tkksd.html"
                          >TKKSD</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="tkksd-award.html"
                          >TKKSD Award</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item" href="kaleidoskop.html"
                          >Kaledoiskop</a
                        >
                      </li> 
                    </ul>
                  </li>
                  <!-- Kontak -->
                  <!-- form -->
                  <!-- <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="#">Form Pengajuan</a></li>
                </ul> -->
                </ul>
                <!-- /.navbar-nav -->
                <div class="offcanvas-footer d-lg-none">
                  <div>
                    <a href="mailto:first.last@email.com" class="link-inverse"
                      >info@email.com</a
                    >
                    <br />
                    00 (123) 456 78 90 <br />
                    <nav class="nav social social-white mt-4">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                      <a href="#"><i class="uil uil-instagram"></i></a>
                      <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                  </div>
                </div>
                <!-- /.offcanvas-footer -->
              </div>
              <!-- /.offcanvas-body -->
            </div>
            <!-- navbar form pengajuan -->
            <!-- <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-none d-md-block">
                <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Form Pengajuan</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
          </div> -->
            <!-- /.navbar-other -->
          </div>
          <!-- /.container -->
        </nav>
        <!-- /.navbar -->
      </header>
      <!-- /header -->
      <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
          <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
              <h1 class="display-1 mb-3">Fasilitasi Naskah kerja Sama</h1>
              <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Layanan Publik
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Fasilitasi Naskah Kerja Sama
                  </li>
                </ol>
              </nav>
              <!-- /nav -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <div class="container">
        <div class="row gx-0">
          <!-- /column -->
          <div class="col-xl-20">
            <section id="terms-conditions" class="wrapper pt-16">
              <div class="card">
                <div class="card-body p-15">
                  <h1 class="mb-3">1. Fasilitasi Kerja Sama Dalam Negeri</h1>

                  <ul class="nav nav-tabs nav-pills">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        data-bs-toggle="tab"
                        href="#tab1-1"
                      >
                        <i class="uil uil-phone-volume pe-1"></i>
                        <span>KSDD</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
                        <i class="uil uil-shield-exclamation pe-1"></i>
                        <span>KSDPK</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab1-3">
                        <i class="uil uil-laptop-cloud pe-1"></i>
                        <span>Sinergitas</span>
                      </a>
                    </li>
                  </ul>
                  <br />
                  <!-- /.nav-tabs -->

                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1-1">
                      <h2 class="mb-3">1. Kerja Sama Daerah dengan Daerah</h2>
                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>

                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>
                      <p>
                        Sed posuere consectetur est at lobortis. Maecenas
                        faucibus mollis interdum. Cum sociis natoque penatibus
                        et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec id elit non mi porta gravida at eget metus. Cras
                        justo odio, dapibus ac facilisis in, egestas eget quam.
                        Cum sociis natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus.
                      </p>
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab1-2">
                      <h2 class="mb-3">
                        2. Kerja Sama Daerah dengan Pihak Ketiga
                      </h2>
                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>

                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>
                      <p>
                        Sed posuere consectetur est at lobortis. Maecenas
                        faucibus mollis interdum. Cum sociis natoque penatibus
                        et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec id elit non mi porta gravida at eget metus. Cras
                        justo odio, dapibus ac facilisis in, egestas eget quam.
                        Cum sociis natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus.
                      </p>
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab1-3">
                      <h2 class="mb-3">3. Sinergitas</h2>
                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>

                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>
                      <p>
                        Sed posuere consectetur est at lobortis. Maecenas
                        faucibus mollis interdum. Cum sociis natoque penatibus
                        et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec id elit non mi porta gravida at eget metus. Cras
                        justo odio, dapibus ac facilisis in, egestas eget quam.
                        Cum sociis natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus.
                      </p>
                    </div>
                    <!--/.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                  <p>
                    Nullam quis risus eget urna mollis ornare vel eu leo.
                    Maecenas sed diam eget risus varius blandit sit amet non
                    magna. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Nullam id dolor id nibh ultricies vehicula
                    ut id elit. Donec ullamcorper nulla non metus auctor
                    fringilla. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Etiam porta sem malesuada magna mollis
                    euismod. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Nulla vitae elit libero, a pharetra augue.
                    Curabitur blandit tempus porttitor. Cras justo odio, dapibus
                    ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac
                    cursus commodo, tortor mauris condimentum nibh, ut fermentum
                    massa justo sit amet risus. Aenean eu leo quam. Pellentesque
                    ornare sem.
                  </p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </section>
            <section id="privacy-policy" class="wrapper pt-16">
              <div class="card">
                <div class="card-body p-15">
                  <h1 class="mb-3">2. Fasilitasi Kerja Sama Luar Negeri</h1>
                  <ul class="nav nav-tabs nav-pills">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        data-bs-toggle="tab"
                        href="#tab2-1"
                      >
                        <i class="uil uil-phone-volume pe-1"></i>
                        <span>KSDPL</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tab2-2">
                        <i class="uil uil-shield-exclamation pe-1"></i>
                        <span>KSDLL</span>
                      </a>
                    </li>
                  </ul>
                  <br />
                  <!-- /.nav-tabs -->

                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab2-1">
                      <h2 class="mb-3">1. Kerja Sama Daerah dengan Pemerintah di Luar Negeri</h2>
                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>

                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>
                      <p>
                        Sed posuere consectetur est at lobortis. Maecenas
                        faucibus mollis interdum. Cum sociis natoque penatibus
                        et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec id elit non mi porta gravida at eget metus. Cras
                        justo odio, dapibus ac facilisis in, egestas eget quam.
                        Cum sociis natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus.
                      </p>
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab2-2">
                      <h2 class="mb-3">
                        2. Kerja Sama Daerah dengan Lembaga di Luar Negeri
                      </h2>
                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>

                      <p>
                        Donec id elit non mi porta gravida at eget metus.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cras mattis consectetur purus sit amet
                        fermentum. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nulla vitae elit libero, a pharetra
                        augue. Nullam quis risus eget urna mollis ornare vel eu
                        leo. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam.
                      </p>
                      <p>
                        Sed posuere consectetur est at lobortis. Maecenas
                        faucibus mollis interdum. Cum sociis natoque penatibus
                        et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec id elit non mi porta gravida at eget metus. Cras
                        justo odio, dapibus ac facilisis in, egestas eget quam.
                        Cum sociis natoque penatibus et magnis dis parturient
                        montes, nascetur ridiculus mus.
                      </p>
                    </div>
                    <!--/.tab-pane -->
                    </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </section>
            
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
@include('layout.footer')
@include('layout.wrapper')
  </body>
</html>
