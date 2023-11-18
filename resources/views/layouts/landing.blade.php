<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Memanggil Bootstrap --}}
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <script src="https://kit.fontawesome.com/5ce9b48f86.js" crossorigin="anonymous"></script>
</head>
<body>
    {{-- Navbar code --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
            </li>
            <li>
              <a class="nav-link mx-2 active" aria-current="page" href="#">About Us</a>
            </li>
            <li>
              <a class="nav-link mx-2 active" aria-current="page" href="#">Contact us</a>
            </li>
            <li>
              <a class="nav-link mx-2 active border rounded-pill border-success" aria-current="page" href="/register" type="button">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
     {{-- ============================================================================= --}}
     <div class="container-fluid custom-container mt-5">
      <div class="row justify-content-end">
          <div class="col-md-3 col-sm-6">
              <div class="card custom-card">
                  <div class="card-body">
                      <i class="fa-solid fa-shield fa-2x"></i>
                      <h5 class="card-title">Keamanan Kemasan</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="card custom-card">
                  <div class="card-body">
                    <i class="fa-solid fa-truck fa-2x"></i>
                      <h5 class="card-title">Kurir Terpadu</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="card custom-card">
                  <div class="card-body">
                    <i class="fa-solid fa-money-bill-wave fa-2x"></i>
                      <h5 class="card-title">Pembayaran Semua Metode</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="card custom-card">
                  <div class="card-body">
                      <i class="fa-solid fa-clock fa-2x"></i>
                      <h5 class="card-title">24 Jam Melayani</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
      {{-- ============================================================================= --}}


  
</body>
</html>
