<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <script src="https://kit.fontawesome.com/5ce9b48f86.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-4 border-bottom border-dark-subtle">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold fs-5" href="#">Ecommerce</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Laporkan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Teams</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}
            </ul>
            {{-- icon user and cart --}}
            <div class="px-3 d-flex align-items-center">
              <a href="/dashboard" class="text-black me-3">
                <img src="{{ auth()->user()->avatar }}" alt="Avatar" class="img-fluid rounded-circle mx-auto" style="width: 25px; height: 25px;">
              </a>
              <a href="/" class="text-black me-3">
                <i class="fa-solid fa-cart-shopping fa-lg"></i>
              </a>
            </div>            
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Cari Produk" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      {{-- kolom produk --}}
     

</body>
</html>