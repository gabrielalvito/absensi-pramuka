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
                    <img src="{{url('frontend/images/pramuka.png')}}" alt="user" class="features-image">
                    <div class="description">
                        <h3>SIPPRA</h3>
                        <p>Presensi Application</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="card o-hidden border-0 shadow-lg my-5">
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
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf


                                            <div class="form-group row">
                                                <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="name" placeholder="Nama" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                <div class="col-md-12">
                                                    <input id="name" placeholder="No. KTA" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    {{-- @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror --}}
                                                </div>
                                            </div> -->

                                            <div class="form-group row">
                                                <!-- <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="username" placeholder="Username" type="text" class="form-control 
                                                    @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                                    @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-12 offset-md-0">
                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                        {{ __('Buat Akun') }}
                                                    </button>
                                                    <br>
                                                    <p align="center">
                                                        <a class="btn btn-link" href="{{ url ('login') }}">Sudah Punya Akun</a>
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