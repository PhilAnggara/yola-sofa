@extends('layouts.log')
@section('title', 'Masuk - Yola Sofa')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				{{-- <h1 class="text-primary text-center mt-5 font-weight-bold">Yola Sofa</h1> --}}
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Masuk</h5>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
							@csrf

              <div class="form-label-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
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

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">Ingat Saya</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Masuk</button>
							<a class="d-block text-center mt-2" href="{{ url('register') }}">Buat Akun</a>	
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection