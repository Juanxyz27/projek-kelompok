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
     {{-- ============================================================================= --}}
     {{-- ============================================================================= --}}
     {{-- <div class="container-fluid custom-container mt-5">
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
                    <i class="fa-solid fa-thumbs-up fa-2x"></i>
                      <h5 class="card-title">Produk Terpercaya</h5>
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
                      <i class="fa-solid fa-headset fa-2x"></i>
                      <h5 class="card-title">24 Jam Melayani</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
      {{-- ============================================================================= --}}

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
                <a class="nav-link mx-2 active" aria-current="page" href="#">Teams</a>
              </li>
              <li>
                <a class="nav-link mx-2 active" aria-current="page" href="#">About Us</a>
              </li>
              <li>
                <a class="nav-link mx-2 active border rounded-pill border-success" aria-current="page" href="/register" type="button">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
        </nav>
      
      <!-- Hero Section -->
      <section class="hero-section" style="padding: 100px 0; background-color: #f8f9fa;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1 style="color: #007bff;">Welcome to Your E-commerce</h1>
              <p>Discover a wide range of high-quality products.</p>
              <a href="#" class="btn btn-primary">Shop Now</a>
            </div>
            <div class="col-md-6">
              <img src="https://via.placeholder.com/400" alt="Product Image" class="img-fluid">
            </div>
          </div>
        </div>
      </section>
      
      <!-- Featured Products -->
      <section class="featured-products" style="padding: 50px 0; background-color: #ffffff;">
        <div class="container">
          <h2 style="text-align: center; margin-bottom: 30px; color: #007bff;">Featured Products</h2>
          <div class="row">
            <!-- Product Cards go here -->
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
                            <i class="fa-solid fa-thumbs-up fa-2x"></i>
                              <h5 class="card-title">Produk Terpercaya</h5>
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
                              <i class="fa-solid fa-headset fa-2x"></i>
                              <h5 class="card-title">24 Jam Melayani</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
        </div>
      </section>
      
      <!-- Footer -->
      <footer class="footer" style="background-color: #f8f9fa; padding: 50px 0;">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 style="color: #007bff;">Your E-commerce</h3>
              <p>Your one-stop shop for all your needs.</p>
            </div>
            <div class="col-md-6">
              <h3 style="color: #007bff;">Contact Us</h3>
              <p>Email: info@your-ecommerce.com</p>
              <p>Phone: +123 456 789</p>
            </div>
          </div>
        </div>
      </footer>
  
</body>
</html>
