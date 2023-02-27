<!DOCTYPE html>
@include('layout.head')
<html lang="en">
  <body>
    @include('layout.heder')
      <section class="wrapper bg-light">
        <div class="container pt-10 pt-md-14 pb-14 pb-md-16 text-center">
          <div
            class="row gx-lg-8 gx-xl-12 gy-10 gy-xl-0 mb-14 align-items-center"
          >
            <div class="col-lg-7 order-lg-2">
              <figure>
                <img
                  class="img-auto"
                  src="frontend/img/hero.png"
                  style="width: 480px"
                  alt=""
                />
              </figure>
            </div>
            <!-- /column -->
            <div
              class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start"
            >
              <h1 class="display-1 fs-54 mb-5 mx-md-n5 mx-lg-0 mt-7">
                Instansi Pemerintah <br class="d-md-none" />Fasilitasi Dalam
                <br class="d-md-none" /><span
                  class="rotator-fade display-5 text-primary"
                  >Kerja Sama Dalam Negeri,Kerja Sama Luar Negeri,Monitoring &
                  Evaluasi</span
                >
              </h1>
              <p class="lead fs-lg mb-7">
                Mewujudkan Efektivitas dan Efisiensi Dalam Fasilitasi
                Penyelenggaraan Kerjasama Daerah Yang Berkualitas
              </p>
              <span
                ><a
                  href="{{route('pengajuan')}}"
                  class="btn btn-lg btn-primary rounded-pill me-2"
                  >Ajukan Kerja Sama</a
                >
              </span>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <p class="text-center mb-8">
            Telah kerja sama dengan banyak pihak, diantaranya
          </p>
          <div
            class="row row-cols-4 row-cols-md-4 row-cols-lg-7 row-cols-xl-7 gy-10 mb-2 d-flex align-items-center justify-content-center"
          >
            <div class="col">
              <img
                class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5"
                src="frontend/img/brands/c1.png"
                alt=""
              />
            </div>
            <div class="col">
              <img
                class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5"
                src="frontend/img/brands/c2.png"
                alt=""
              />
            </div>
            <div class="col">
              <img
                class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5"
                src="frontend/img/brands/c3.png"
                alt=""
              />
            </div>
            <div class="col">
              <img
                class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5"
                src="frontend/img/brands/c4.png"
                alt=""
              />
            </div>
            <div class="col">
              <img
                class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5"
                src="frontend/img/brands/c5.png"
                alt=""
              />
            </div>
            <div class="col">
              <img
                class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5"
                src="frontend/img/brands/c6.png"
                alt=""
              />
            </div>
            <div class="col">
              <img
                class="img-fluid px-md-3 px-lg-0 px-xl-2 px-xxl-5"
                src="frontend/img/brands/c7.png"
                alt=""
              />
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
          <div class="divider text-soft-primary mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
              <path
                fill="currentColor"
                d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z"
              />
            </svg>
          </div>
        </div>
        <!-- /.overflow-hidden -->
      </section>
      <!-- /section -->
      <section class="wrapper bg-gradient-primary">
        <div class="container pt-12 pt-lg-8 pb-14 pb-md-17">
          <div class="row text-center">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
              <h2 class="fs-16 text-uppercase text-primary mb-3">
                Apa yang kami lakukan?
              </h2>
              <h3 class="display-3 mb-10 px-xxl-10">
                Kami Fasilitasi Kerja Sama di Lingkup Kota Bandung
              </h3>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <div
            class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end"
          >
            <div class="col-lg-4">
              <div class="px-md-15 px-lg-3">
                <figure class="mb-6">
                  <img
                    class="img-fluid"
                    src="frontend/img/layanan-kerjasama1.png"
                  />
                </figure>
                <h3>Kerja Sama Dalam Negeri</h3>
                <p class="mb-2">
                  Fasilitasi Kerja Sama dalam lingkup dalam negeri yang bekerja
                  sama dengan pemerintah kota bandung
                </p>
                <a href="#" class="more hover">Learn More</a>
              </div>
              <!--/.px -->
            </div>
            <!--/column -->
            <div class="col-lg-4">
              <div class="px-md-15 px-lg-3">
                <figure class="mb-6">
                  <img
                    class="img-fluid"
                    src="frontend/img/layanan-kerjasama2.png"
                  />
                </figure>
                <h3>Kerja Sama Luar Negeri</h3>
                <p class="mb-2">
                  Fasilitasi Kerja Sama dalam lingkup luar negeri yang bekerja
                  sama dengan pemerintah kota bandung
                </p>
                <a href="#" class="more hover">Learn More</a>
              </div>
              <!--/.px -->
            </div>
            <!--/column -->
            <div class="col-lg-4">
              <div class="px-md-15 px-lg-3">
                <figure class="mb-6">
                  <img class="img-fluid" src="frontend/img/monev.png" />
                </figure>
                <h3>Monitoring dan Evaluasi</h3>
                <p class="mb-2">
                  Monitoring dan Evaluasi mengenai perjanjian kerja sama yang
                  diajukan dan yang berjalan di pemerintah kota bandung
                </p>
                <a href="#" class="more hover">Learn More</a>
              </div>
              <!--/.px -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-17">
          <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 order-lg-2">
              <div class="card shadow-lg me-lg-6">
                <div class="card-body p-6">
                  <div class="d-flex flex-row">
                    <div>
                      <span
                        class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"
                        ><span class="number">01</span></span
                      >
                    </div>
                    <div>
                      <h4 class="mb-1">Tata Kelola</h4>
                      <p class="mb-0">
                        Pengelolahan yang efektif, melayani, dan pengelolahan
                        yang bersih
                      </p>
                    </div>
                  </div>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
              <div class="card shadow-lg ms-lg-13 mt-6">
                <div class="card-body p-6">
                  <div class="d-flex flex-row">
                    <div>
                      <span
                        class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"
                        ><span class="number">02</span></span
                      >
                    </div>
                    <div>
                      <h4 class="mb-1">Pembiayaan Kota</h4>
                      <p class="mb-0">
                        Pengelolaan yang partisipatif, Kolaboratif, dan
                        terintegrasi
                      </p>
                    </div>
                  </div>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
              <div class="card shadow-lg mx-lg-6 mt-6">
                <div class="card-body p-6">
                  <div class="d-flex flex-row">
                    <div>
                      <span
                        class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"
                        ><span class="number">03</span></span
                      >
                    </div>
                    <div>
                      <h4 class="mb-1">Lorem Ipsum</h4>
                      <p class="mb-0">
                        Cras mattis consectetur purus sit amet.
                      </p>
                    </div>
                  </div>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
              <h2 class="fs-16 text-uppercase text-primary mb-3">
                Strategi Kami
              </h2>
              <h3 class="display-3 mb-4">
                Tujuan Bagian Kerja Sama Sekretariat Kota Bandung
              </h3>
              <p>
                Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                venenatis vestibulum. Etiam porta sem malesuada magna mollis
                euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.
                Nullam quis risus eget urna mollis.
              </p>
              <p class="mb-6">
                Nullam id dolor id nibh ultricies vehicula ut id elit.
                Vestibulum id ligula porta felis euismod semper. Aenean lacinia
                bibendum nulla sed consectetur.
              </p>
              <a href="about1.html" class="btn btn-primary rounded-pill mb-0"
                >Tentang Kami</a
              >
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <section class="wrapper bg-gradient-reverse-primary">
        <div class="container pb-14 pb-md-16">
          <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7">
              <figure>
                <img
                  class="img-auto"
                  src="frontend/img/illustrations/i22.png"
                  srcset="frontend/img/illustrations/i22@2x.png 2x"
                  alt=""
                />
              </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
              <h2 class="fs-15 text-uppercase text-primary mb-3">
                Kenapa Kami Ada ?
              </h2>
              <h3 class="display-3 mb-7">
                Kami Fasilitasi Kerja Sama di lingkup Kota Bandung
              </h3>
              <div class="accordion accordion-wrapper" id="accordionExample">
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingOne">
                    <button
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      Fasilitiasi Kerja Sama Dalam Negeri
                    </button>
                  </div>
                  <!--/.card-header -->
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="card-body">
                      <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet
                        risus. Cras mattis consectetur purus sit amet fermentum.
                        Praesent commodo cursus magna, vel.
                      </p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
                </div>
                <!--/.accordion-item -->
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingTwo">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      Fasilitasi Kerja Sama Luar Negeri
                    </button>
                  </div>
                  <!--/.card-header -->
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="card-body">
                      <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet
                        risus. Cras mattis consectetur purus sit amet fermentum.
                        Praesent commodo cursus magna, vel.
                      </p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
                </div>
                <!--/.accordion-item -->
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingThree">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      Monitoring & Evaluasi Kerja Sama
                    </button>
                  </div>
                  <!--/.card-header -->
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample"
                  >
                    <div class="card-body">
                      <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet
                        risus. Cras mattis consectetur purus sit amet fermentum.
                        Praesent commodo cursus magna, vel.
                      </p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
                </div>
                <!--/.accordion-item -->
              </div>
              <!--/.accordion -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
          <div class="divider text-light mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
              <path
                fill="currentColor"
                d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z"
              />
            </svg>
          </div>
        </div>
        <!-- /.overflow-hidden -->
      </section>
      <!-- /section -->

      <!-- /section -->
      <section class="wrapper bg-light">
        <div class="container pt-6 pb-14 pb-md-16">
          <div class="row gx-lg-8 gx-xl-12 gy-10">
            <div class="col-lg-6 mb-0">
              <h2 class="fs-16 text-uppercase text-primary mb-4">
                Pertanyaan Yang Sering Ditanyakan
              </h2>
              <h3 class="display-3 mb-4">
                Jawaban dari pertanyaan yang sering ditanyakan
              </h3>
              <p class="mb-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <a href="kontak.html" class="btn btn-primary rounded-pill"
                >Kontak Kami</a
              >
            </div>
            <!--/column -->
            <div class="col-lg-6">
              <div id="accordion-3" class="accordion-wrapper">
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-1">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-1"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-1"
                    >
                      Apa itu Bagian Kerja Sama Sekretariat Kota Bandung ?
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-1"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-1"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet
                        risus. Cras mattis consectetur purus sit amet fermentum.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Donec sed
                        odio dui. Cras justo odio, dapibus ac facilisis.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <!-- /.card -->
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-2">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-2"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-2"
                    >
                      Melayani tipe Kerja Sama apa saja ?
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-2"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-2"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet
                        risus. Cras mattis consectetur purus sit amet fermentum.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Donec sed
                        odio dui. Cras justo odio, dapibus ac facilisis.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <!-- /.card -->
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-3">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-3"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-3"
                    >
                      Apakah semua informasi terbuka untuk publik ?
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-3"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-3"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet
                        risus. Cras mattis consectetur purus sit amet fermentum.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Donec sed
                        odio dui. Cras justo odio, dapibus ac facilisis.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <!-- /.card -->
                <div class="card accordion-item shadow-lg">
                  <div class="card-header" id="accordion-heading-3-4">
                    <button
                      class="collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-collapse-3-4"
                      aria-expanded="false"
                      aria-controls="accordion-collapse-3-4"
                    >
                      Apakah saya bisa mengajukan Kerja Sama melalui website ini
                      ?
                    </button>
                  </div>
                  <!-- /.card-header -->
                  <div
                    id="accordion-collapse-3-4"
                    class="collapse"
                    aria-labelledby="accordion-heading-3-4"
                    data-bs-target="#accordion-3"
                  >
                    <div class="card-body">
                      <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris
                        condimentum nibh, ut fermentum massa justo sit amet
                        risus. Cras mattis consectetur purus sit amet fermentum.
                        Praesent commodo cursus magna, vel scelerisque nisl
                        consectetur et. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Donec sed
                        odio dui. Cras justo odio, dapibus ac facilisis.
                      </p>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.accordion-wrapper -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
          <div class="divider text-navy mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
              <path
                fill="currentColor"
                d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z"
              />
            </svg>
          </div>
        </div>
        <!-- /.overflow-hidden -->
      </section>
      <!-- /section -->
    </div>
    @include('layout.footer')
    @include('layout.wrapper')
  </body>
</html>
