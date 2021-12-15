@extends('layout/v_login')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 style="text-align: center;color:rgb(10, 8, 8)"><br>LOGIN</h2>
                <h5 style="text-align: center;color:rgb(10, 8, 8)">Masukkan Email & Password</h5>
            <div class="card-text mt-2">
                <form action="{{ url('/a') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="session" value="1" hidden="">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" autofocus required>
                    </div>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" value="remember-me">
                      <label class="form-check-label">Remember me</label>
                    </div>

                    <div class="form-group row mb-2">
                        <div class="col-md-8 offset-md-5">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    <div class="form-group col-md-8 offset-md-1">
                        <a class="nav-link" href="{{ url('/input-User') }}" type="submit">Belum punya akun?</a>
                    </div>
                    
                  </form>
            </div>
        </div>
    </div>
@endsection