<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/sass/app.scss','resources/js/app.js'])
    {{-- link icon --}}
    <script src="https://kit.fontawesome.com/5ce9b48f86.js" crossorigin="anonymous"></script>
</head>
<body>
    
    {{-- <div class="container text-center pt-4">
        Selamat Datang {{ auth()->user()->name }}
        <div class="div">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" class="btn btn-danger" value="Logout">
            </form>
        </div>
    </div> --}}

    {{-- bagian navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom px-5">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-5" href="#">
          <i class="fa-regular fa-address-card"></i>
          Profile
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="ms-auto ">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <input type="submit" class="btn btn-outline-dark" value="Logout">
          </form>
          </div>
        </div>
      </div>
    </nav>

    {{-- Tombol ke beranda --}}
    <div class="mt-3 px-5">
      <a href="/beranda" class="text-black text-decoration-none">
        <i class="fa-solid fa-arrow-left fa-xl"></i>
        Beranda
      </a>
    </div>

    <div class="container mt-5 flex bg-light px-5 py-3 border border-black rounded">
      <div class="flex">
        <div class=" flex text-black fw-bold align-items-center">
          <h2>🙌Selamat Datang 
            <span class="text-success">{{ auth()->user()->name }}</span>
          </h2>
        </div>
      </div>
    </div>



    
    

</body>
</html>