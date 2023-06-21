@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Electronic</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="{{ asset('admin') }}\css\bootstrap.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css') }}\bootstrap.min.css" rel="stylesheet" />
    </head>
  <body>
        <section>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row">
                  <div class="col-md-6">
                      <h1 class="display-4 fw-border"><img src="\storage\{{$produks -> foto}}" alt=""></h1>
                      <p class="lead fw-normal text-white-50 mb-0"></p>
                  </div>
                  <div class="col-md-6">
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <p>SKU: BST-{{ $produks -> id }}</p>
                      <h1>{{ $produks -> kategori }}</h1>
                      <p>Tersedia Nama Produk : {{ $produks -> namaproduk }}</p>
                      Rp. {{ $produks -> harga }}
                    <div class="d-flex p-4">
                      <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                      <button class="btn btn-outline-light flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        <a href="https://api.whatsapp.com/send?phone=6281774189582&text=hallo">Beli Sekarang</a>
                      </button>
                    </div>
                   </div>
                 </div>
                </div>
              </div>
        </section>
        <!-- Footer-->
        <footer class="bg-danger p-5" style="margin-top: 25%">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Dea 2023</p></div>
          </footer>
          <!-- Bootstrap core JS-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
          <!-- Core theme JS-->
          <script src="js/scripts.js"></script>
      </body>
  </html>