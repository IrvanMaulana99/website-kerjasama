<div class="content-wrapper">
    <header class="wrapper bg-light">
      <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{ route('welcome') }}">
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
                      <a class="dropdown-item" href="{{ route('latarbelakang') }}"
                        >Latar Belakang</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('dasar-hukum') }}"
                        >Dasar Hukum</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('layanan') }}"
                        >Layanan Kami</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('personil') }}"
                        >Personil</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('pk') }}"
                        >Perjanjian Kerja</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('ik') }}"
                        >Indikator Kinerja</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('kontak') }}"
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
                          <a class="dropdown-item" href="{{ route('ksdd') }}"
                            >Kerjasama Daerah dengan Daerah Lain (KSDD)</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="dropdown-item" href="{{ route('ksdpk') }}"
                            >Kerjasama Daerah dengan Pihak Ketiga (KSDPK)</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="dropdown-item" href="{{ route('sinergitas') }}"
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
                          <a class="dropdown-item" href="{{ route('ksdpl') }}"
                            >Kerjasama Daerah dengan Pemerintah Daerah di Luar
                            Negeri (KSDPL)</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="dropdown-item" href="{{ route('ksdll') }}"
                            >Kerjasama Daerah dengan Lembaga di Luar Negeri
                            (KSDLL)</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('pengajuan') }}"
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
                          <a class="dropdown-item" href="{{ route('rekapitulasi') }}"
                            >Rekapitulasi</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="dropdown-item" href="./services2.html"
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
                    <a class="nav-link" href="{{ route('berita') }}"
                    >Berita</a>
                  </li>
                </ul>
                <!-- navbar tkksd -->
                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('tkksd') }}"
                      >TKKSD</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('tkksd-award') }}"
                      >TKKSD Award</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('kaledoiskop') }}"
                      >Kaledoiskop</a
                    >
                  </li> 
                </ul>
                <!-- Navbar Profil -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href=""
                    data-bs-toggle="dropdown"
                    >TKKSD</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('tkksd') }}"
                        >TKKSD</a
                      >
                    </li>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('tkksd-award') }}"
                        >TKKSD Award</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item" href="{{ route('kaledoiskop') }}"
                        >Kaleodoskop</a>
                  </ul>
                </li>
              
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