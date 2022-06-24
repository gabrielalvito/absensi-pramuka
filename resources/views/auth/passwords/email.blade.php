@extends('layouts.login')

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
                                        <h1 class="h4 text-gray-900 mb-3 my-3">Reset Password</h1>
                                        <h6 class="h6 text-gray-900 mb-4"> Masukan email anda yang telah terdaftar, apabila lupa email segera hubungi pembina !</h6>
                                    </div>


                                    <div class="card-body">
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif

                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                                <div class="col-md-12">
                                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-12 offset-md-0">
                                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                                        {{ __('Send Password Reset Link') }}
                                                    </button>
                                                    <br>
                                                    <p align="center">
                                                        <a class="btn btn-link" href="{{ url ('login') }}">Back Login</a>
                                                
                                                    </p>    
                                                </div>
                                            </div>
                                        </form>
                                    </div>




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