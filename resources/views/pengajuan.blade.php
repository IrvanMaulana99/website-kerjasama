<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body>
  <div class="content-wrapper">
    @include('layout.heder')
    <!-- /header -->
    <section class="wrapper bg-gray">
      <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#">Kerjasama Daerah</a></li>
            <li class="breadcrumb-item"><a href="{{ route('pengajuan') }}">Pengajuan Kerjasama</a></li>
          </ol>
        </nav>
        <!-- /nav -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-12">
          <div class="col-lg-8">
            <!-- <div class="alert alert-blue alert-icon mb-6" role="alert">
              <i class="uil uil-exclamation-circle"></i> Already have an account? <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="alert-link hover">Sign in</a> for faster checkout experience.
            </div> -->
            <h3 class="mb-4">Form Pengajuan Kerjasama Online</h3>
            <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" name = "nama_pengaju_dpn" class="form-control" id="nama_pengaju_dpn" placeholder="First name" value="" required>
                    <label for="nama_pengaju_dpn" class="form-label">Nama Depan</label>
                    <div class="invalid-feedback"> Sesuai dengan KTP </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input type="text" name = "nama_pengaju_blk" class="form-control" id="nama_pengaju_blk" placeholder="Last name" value="" required>
                    <label for="nama_pengaju_blk" class="form-label">Nama Belakang</label>
                    <div class="invalid-feedback"> Sesuai dengan KTP. </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="email" name = "email" class="form-control" id="email" placeholder="you@example.com" required>
                    <label for="email" class="form-label">Email</label>
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" name = "nama_instansi" class="form-control" id="nama_instansi" placeholder="instansi x" required>
                    <label for="nama_instansi" class="form-label">Nama Instansi</label>
                    <div class="invalid-feedback"> Pastikan Alamat Instansi Sesuai </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" name = "alamat_instansi" class="form-control" id="alamat_instansi" placeholder="jl.cangkurileng no.08902" required>
                    <label for="alamat_instansi" class="form-label">Alamat Instansi</label>
                    <div class="invalid-feedback"> Pastikan Alamat sudah sesuai dengan Instansi</div>
                  </div>
                </div><div class="col-12">
                  <div class="form-floating">
                    <input type="text" name="no_ktp" class="form-control" id="no_ktp" placeholder="1234567890123456" required>
                    <label for="no_ktp" class="form-label">No KTP</label>
                    <div class="invalid-feedback"> Max 16 Nomor </div>
                  </div>
                </div><div class="col-12">
                  <div class="form-floating">
                    <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="8907899807" required>
                    <label for="no_telp" class="form-label">No Telephone</label>
                    <div class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-select-wrapper">
                    <select name="kategori_pengajuan" class="form-select" id="kategori_pengajuan" required>
                      <option value="">Jenis Surat</option>
                      <option>Kerjasama Dalam Negri</option>
                    </select>
                    <br>
                  
                    <div class="col-md-12">
                      <label for="file_kak"> Masukan File PDF Kerangka Acuan Kerja</label>
                      <input type="file" name="file_kak" id="file_kak" class="form-control" accept=".pdf">
                    </div>
                    <br>
                    <div class="col-md-12">
                      <label for="file_kb"> Masukan File PDF Surat Permohoan ke Walikota</label>
                      <input type="file" name="file_kb" id="file_kb" class="form-control" accept=".pdf">
                    </div>
                    <br>
                    <div class="col-md-12">
                      <label for="file_pks"> Masukan File PDF Rencana Naskah Kesepakatan Bersama</label>
                      <input type="file" name="file_pks" id="file_pks" class="form-control" accept=".pdf">
                    </div>
                    <br>
                    <br>
                    <div class="invalid-feedback"></div>
                  </div>
                </div>
                <button type="submit" class="btn btn-blue rounded-pill">Ajukan Kerjasama</button>
              </div>
              <hr class="mt-7 mb-6">
              
            </form>

   

          </div>
          <!-- /column -->
          <div class="col-lg-4">
            <h3 class="mb-4">File Template Surat</h3>
            <div class="shopping-cart mb-7">
              <div class="shopping-cart-item d-flex justify-content-between mb-4">
                <div class="d-flex flex-row d-flex align-items-center">
                  <!-- <figure class="rounded w-17"><a href="./shop-product.html"><img src="frontend/img/photos/sth1.jpg" srcset="frontend/img/photos/sth1@2x.jpg 2x" alt="" /></a></figure> -->
                  <div class="w-100 ms-4">
                    <h3 class="post-title h6 lh-xs mb-1">Template Kerangka Acuan Kerja</h3>
                    <div class="small">Bagian Kerja Sama Kota Bandung</div>
                    <!-- <div class="small">Size: 43</div> -->
                  </div>
                </div>
                <div class="ms-2 d-flex align-items-center">
                  <p class="price fs-sm"><a href="./shop-product.html" class="link-blue">Download</a></p>
                </div>
              </div>
              <!--/.shopping-cart-item -->
              <div class="shopping-cart-item d-flex justify-content-between mb-4">
                <div class="d-flex flex-row d-flex align-items-center">
                  <!-- <figure class="rounded w-17"><a href="./shop-product.html"><img src="frontend/img/photos/sth2.jpg" srcset="frontend/img/photos/sth2@2x.jpg 2x" alt="" /></a></figure> -->
                  <div class="w-100 ms-4">
                    <h3 class="post-title h6 lh-xs mb-1">Surat Permohoan ke Walikota</h3>
                    <div class="small">Bagian Kerjasmaa Kota Bandung</div>
                    <!-- <div class="small">Size: 43</div> -->
                  </div>
                </div>
                <div class="ms-2 d-flex align-items-center">
                  <p class="price fs-sm"><a href=".shop-product.html" class="link-blue">Download</a></p>
                </div>
              </div>
              <!--/.shopping-cart-item -->
              <div class="shopping-cart-item d-flex justify-content-between mb-4">
                <div class="d-flex flex-row d-flex align-items-center">
                  <!-- <figure class="rounded w-17"><a href="./shop-product.html"><img src="frontend/img/photos/sth3.jpg" srcset="frontend/img/photos/sth3@2x.jpg 2x" alt="" /></a></figure> -->
                  <div class="w-100 ms-4">
                    <h3 class="post-title h6 lh-xs mb-1">Rencana Naskah Kesepakatan Bersama</h3>
                    <div class="small">Bagian Kerjasama Kota Bandung</div>
                  </div>
                </div>
                <div class="ms-2 d-flex align-items-center">
                  <p class="price fs-sm"><a href="./shop-product.html" class="link-blue">Download</a></p>
                </div>
              </div>
              <!--/.shopping-cart-item -->
            </div>
            <!-- /.shopping-cart-->
            <hr class="my-4">
            <h3 class="mb-2">Catatan</h3>
            <!-- <div class="mb-5">
              <div class="form-check mb-2">
                <input id="standart" name="shippingMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="standart">Free - Standart delivery</label>
                <small class="text-muted d-block">Shipment may take 5-6 business days</small>
              </div>
              <div class="form-check">
                <input id="express" name="shippingMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="express">$10 - Express delivery</label>
                <small class="text-muted d-block">Shipment may take 2-3 business days</small>
              </div>
            </div> -->
            <div class="table-responsive">
              <table class="table table-order">
                <tbody>
                  <tr>
                    <!-- <td class="ps-0"><strong class="text-dark">Subtotal</strong></td> -->
                    <p class="price">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec purus non leo euismod hendrerit. Aliquam sit amet metus sed velit posuere sodales.</p>
                    <!-- <td class="pe-0 text-end">
                      <p class="price">$135.99</p>
                    </td> -->
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="alert alert-blue alert-icon mb-6" role="alert">
              <i class="uil uil-exclamation-circle"></i> Masih Kesulitan? <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="alert-link hover">Tonton Disini</a> Tutorial pengajuan kerja sama.
            </div>
            <!-- <a href="#" class="btn btn-primary rounded w-100 mt-4">Place Order</a> -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
@include('layout.footer')
@include('layout.wrapper')
</body>

</html>