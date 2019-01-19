@extends('site.master')

@section('content')

<div class="swiper-container ">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="/vendor/site/images/about-bg.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-10 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h4> Recuperar senha</h4>
                                    
                                </header><!-- .entry-header -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
    </div><!-- .hero-slider -->



    

    <div class="featured-cause">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="cause-wrap  flex-wrap justify-content-between">
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="">{{ __('E-Mail') }}</label>

                           
                                <input id="email" placeholder="Digite seu e-mail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          
                        </div>

                        <div class="form-group ">
                       
                              <center>  <button type="submit" class="btn gradient-bg">
                                    {{ __('Recuperar senha') }}
                                </button> </center>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</br>
@endsection
