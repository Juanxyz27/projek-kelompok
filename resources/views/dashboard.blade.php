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
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-4 border-bottom border-dark-subtle">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-5" href="#">Profile </a>
      </div>
    </nav>

 {{-- Detail Profile --}}
 <section style="background-color: #000;">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            {{-- Image Avatar --}}
            <img src="{{ auth()->user()->avatar }}" alt="Avatar" class="img-fluid rounded-circle mx-auto" style="width: 150px; height: 150px;">
            {{-- Nama --}}
            {{-- <h5 class="my-3">{{ auth()->user()->name }}</h5> --}}
            {{-- Keterangan --}}
            <div class="d-flex justify-content-center mb-2">
              {{-- <form action="{{ route('logout') }}" method="post">
              @csrf
              <input type="submit" class="btn btn-outline-dark" value="Logout">
              </form> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->phone }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ auth()->user()->address }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <input type="submit" class="btn btn-outline-dark" value="Logout">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>