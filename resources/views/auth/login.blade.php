@extends('layouts.app')

@section('content')
<div class="container">
</div>

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="features row">
                <div class="col-md-4 mt-2">
                    {{-- <img src="{{url('frontend/images/pramuka.png')}}" alt="user" class="features-image"> --}}
                    <div>
                        <br>
                        <h2>SIPPRA</h2>
                        <h4>Presensi Application</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="card o-hidden border-0 shadow-lg my-5" style="width: 35rem">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                            <div class="col-lg-10">
                                <div class="p-3">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-3 my-3">Selamat Datang</h1>
                                        <h6 class="h6 text-gray-900 mb-4"> Silahkan login dengan username dan password yang telah anda miliki !</h6>
                                    </div>



                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="username" placeholder="Username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                                    @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label> -->

                                                <!-- <div class="row mb-3">
                                                <label for="nta" class="col-md-4 col-form-label text-md-end">{{ __('NTA') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="nta" type="nta" class="form-control @error('nta') is-invalid @enderror" name="nta" value="{{ old('nta') }}" required autocomplete="nta" placeholder="NTA" autofocus>

                                                    @error('nta')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        

                                            <div class="form-group row">
                                                <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-0">
                                                    <div class="form-check">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-12 offset-md-0">
                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                        {{ __('Login') }}
                                                    </button>
                                                    <br>
                                                    @if (Route::has('password.request'))
                                                    <p align="center">
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Lupa Password') }}
                                                        </a>
                                                        @endif
                                                </div>

                                            </div>
                                        </form>
                                    </div>


                                    <!-- <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ url ('register') }}">Register</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="#">Lupa Password</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection