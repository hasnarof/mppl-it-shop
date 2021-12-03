@extends('layouts.main')

@section('content')

  <!-- sticky content fix -->
  <script src="js/sticky-content-fix.js"></script>

  {{-- jquery: atur jumlah --}}
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="js/atur-jumlah.js"></script>

  <div class="container mb-4">
    <div class="row">

      {{-- product + ulasan --}}
      <div class="col-lg-8 col-xl-9">
        {{-- data produk --}}
        <div class="row pt-4">

          {{-- foto product --}}
          <div class="col-5 ps-0 pe-4">

            {{-- foto product: besar --}}
            <div class="d-block">
              <div style="width: 100%; height: 20rem;">
                <div class="w-100 h-100 bg-image rounded-3 border border-secondary" style="background-image: url('https://picsum.photos/150/510'); background-size: cover; background-position: center center;"></div>
              </div>
            </div>

            {{-- foto product: kecil x3 --}}
            <div class="d-flex flex-row justify-content-between m-0 p-0 mt-2">
              <div class="p-0 me-1">
                <div style="width: 6.5rem; height: 6.5rem;">
                  <div class="w-100 h-100 bg-image rounded-3 border border-secondary" style="background-image: url('https://picsum.photos/150/510'); background-size: cover; background-position: center center;"></div>
                </div>
              </div>
              <div class="p-0 me-1">
                <div style="width: 6.5rem; height: 6.5rem;">
                  <div class="w-100 h-100 bg-image rounded-3 border border-secondary" style="background-image: url('https://picsum.photos/150/510'); background-size: cover; background-position: center center;"></div>
                </div>
              </div>
              <div class="p-0">
                <div style="width: 6.5rem; height: 6.5rem;">
                  <div class="w-100 h-100 bg-image rounded-3 border border-secondary" style="background-image: url('https://picsum.photos/150/510'); background-size: cover; background-position: center center;"></div>
                </div>
              </div>
            </div>

          </div>

          {{-- detail product --}}
          <div class="col-7">
            <div class="row">
              <h5 class="fw-bold text-break">VGA MSI GT1030 AERO ITX 2G OC | GT 1030 2GB1030 2GB</h5>
              <div class="d-flex align-items-center text-dark">
                <p class="m-0 me-1">Terjual 500</p>
                <p class="m-0 mx-1">•</p>
                <i class="fas fa-star text-warning me-1"></i>
                <p class="m-0">4.9 (3 ulasan)</p>
              </div>
            </div>
            <div class="row mt-2">
              <h3 class="fw-bolder">Rp1.500.000</h3>
            </div>
            <div class="row my-2 border-top border-bottom">
              <p class="py-1 my-0 fw-bold text-primary">Detail</p>
            </div>
            <div class="row">
              <div class="col-8">
                <p class="text-break">
                  Spesifikasi:<br>
                  Product Name : MSI GeForce GT 1030 2GB DDR4 - AERO ITX 2G OC<br>
                  Brand : MSI<br>
                  Interface : PCI Express x16 3.0<br>
                  GPU : GeForce GT 1030<br>
                  Base Clock : 1265 MHz<br>
                  Boost Clock : 1518 MHz<br>
                  Memory Clock Speed : 6008 MHz<br>
                  Memory Size : 2GB<br>
                  Memory Interface : 64 bit<br>
                  Garansi Resmi 2 Tahun<br>
                </p>
              </div>
              <div class="col-4">
                <p class="m-0"><b>Berat:</b></p>
                <p class="m-0">800 Gram</p>
                <br>
                <p class="m-0"><b>Kategori:</b></p>
                <p class="m-0">Graphics Card</p>
              </div>
            </div>
          </div>
        </div>

        {{-- title: ulasan --}}
        <div class="row pt-4 pb-2">
          <h5 class="pb-1 w-100 fw-bolder text-primary border-bottom">Ulasan</h5>
        </div>

        {{-- ulasan pengguna --}}
        <div class="row pb-3 mb-3 border-bottom">
          <div class="col" style="max-width: 250px;">
            <div class="row row-cols-auto">
              <div class="col" style="max-width: 80px;">
                <div style="width: 60px; height: 60px;">
                  <div class="w-100 h-100 bg-image rounded-circle border" style="background-image: url('https://picsum.photos/150/510'); background-size: cover; background-position: center center;"></div>
                </div>
              </div>
              <div class="col">
                <p class="m-0 p-0 fw-bold text-break">OniAhmad</p>
                <p class="m-0 p-0 text-secondary text-break">5 jam yang lalu</p>
              </div>
            </div>
          </div>

          {{-- isi ulasan --}}
          <div class="col m-0 p-0">

            {{-- bintang --}}
            <div class="row">
              <div class="col mb-2">
                @for ($i = 0; $i < 4; $i++)
                  <i class="fas fa-star text-warning me-1"></i> {{-- kuning --}}
                @endfor
                @for ($i = 0; $i < 1; $i++)
                  <i class="fas fa-star text-secondary me-1"></i> {{-- abu-abu --}}
                @endfor
              </div>

              {{-- option dropdown --}}
              <div class="col text-end">
                <div class="btn-group">
                  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split text-white py-0" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-lg-end">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
            </div>

            {{-- teks ulasan --}}
            <div class="row ms-1 pe-2">
              <p class="p-0 pe-3 m-0 text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo accusantium reprehenderit possimus laborum nemo, cumque nostrum veniam assumenda! Aut veniam amet quis? Hic fugit cumque sapiente? Tenetur corrupti dignissimos est dolor harum. Debitis sint tenetur incidunt nam molestias ratione illum, aperiam consequuntur adipisci vel rerum autem excepturi? Cum, et. Quasi accusamus magnam dolorum quisquam alias ut fuga aliquam! Eos doloribus architecto dolores? Iusto ullam omnis adipisci! Deleniti quam provident, atque soluta molestias ullam facere deserunt modi sunt aspernatur. Incidunt, dolor voluptatum provident perspiciatis nulla aspernatur, magnam labore quae adipisci eos ab illo deleniti perferendis asperiores quas. Necessitatibus blanditiis a facere?</p>

              {{-- reply admin --}}
              <div class="row m-0 mt-3 py-2 rounded-3" style="background-color: #F5F5F5">
                <div class="col" style="max-width: 80px;">
                  <div style="width: 60px; height: 60px;">
                    <div class="w-100 h-100 bg-image rounded-circle border border-2 border-primary" style="background-image: url('https://picsum.photos/150/510'); background-size: cover; background-position: center center;"></div>
                  </div>
                </div>
                <div class="col">
                  <p class="m-0 p-0 fw-bold text-break">Admin</p>
                  <p class="m-0 p-0 text-secondary text-break">5 jam yang lalu</p>
                  <div class="row mt-2">
                    <p class="my-0 text-break">Terima kasih telah berbelanja di it-shop.co.id!<br>Selalu cek it-shop supaya tidak ketinggalan promonya ya!</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>

      {{-- atur jumlah --}}
      <div class="col-lg-4 col-xl-3 py-4">
        <div class="sticky-top" id="sticky-fix">
          <div class="card">
            <div class="card-header">
              <h5 class="fw-bolder">Atur Jumlah</h5>
            </div>
            <div class="card-body">

              {{-- numeric up down --}}
              <div class="d-flex flex-row align-items-center input-group mb-3">
                <span class="input-group-btn">
                  <button type="button" class="quantity-left-minus btn btn-primary btn-number" data-type="minus" data-field="">
                    <i class="fas fa-minus text-white"></i>
                  </button>
                </span>
                <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="{{ '11' }}">
                <span class="input-group-btn">
                  <button type="button" class="quantity-right-plus btn btn-primary btn-number" data-type="plus" data-field="">
                    <i class="fas fa-plus text-white"></i>
                  </button>
                </span>
                <p class="card-text ms-3">Stok <b>{{ '11' }}</b></p>
              </div>

              {{-- masukkan keranjang / checkout --}}
              <button type="button" class="btn btn-primary w-100 mb-2 fw-bold">Masukkan Keranjang</button>
              <button type="button" class="btn btn-outline-primary w-100 fw-bold">Checkout</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

@endsection