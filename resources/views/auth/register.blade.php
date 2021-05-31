@extends('layouts.log')
@section('title', 'Buat Akun - Yola Sofa')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Daftar</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
							@csrf

              <div class="form-label-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama" required autofocus>
                <label for="name">Nama</label>

								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
              </div>

              <div class="form-label-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                <label for="email">Email</label>

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
              </div>

              <div class="form-label-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                <label for="password">Password</label>

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
              </div>

              <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required>
                <label for="password-confirm">Konfirmasi Password</label>
              </div>
							
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Daftar</button>
							<a class="d-block text-center mt-2" href="{{ url('login') }}">Masuk</a>	
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection