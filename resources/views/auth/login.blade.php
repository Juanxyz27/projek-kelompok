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
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-bold fs-5">Sign In</h5>
                <form action="{{ route('login') }}"method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                               name="email" placeholder="name@example.com" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                  <div class="form-check mb-3">
                    <p>don't have an account yet <a href="/register">Sign Up</a></p>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold rounded-pill" type="submit">Sign
                      in</button>
                  </div>
                  <hr class="my-4">
                  <div class="d-grid mb-2">
                    <button class="btn btn-google btn-login text-uppercase fw-bold bg-danger text-white rounded-pill" 
                    type="submit" value="Login">
                        <i class="fa-brands fa-google"></i> Sign in with Google
                    </button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>