@extends('layouts.frontend.index.index')
@section('carousel')
    <div id="carousel-example-1z" class="carousel slide carousel-fade">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <video class="video-intro" autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4"/>
                    </video>
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Welcome to {{ config('app.name') }}</strong>
                            </h1>
                            <p>
                                <strong>Checking the magic of Laravel</strong>
                            </p>
                            <p class="mb-4 d-none d-md-block">
                                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid at corporis cumque eaque fuga, itaque minima nisi, officiis perspiciatis placeat praesentium quidem recusandae sit suscipit velit vero vitae. Voluptate.</strong>
                            </p>

                            @if (Route::has('login'))
                                @guest
                                    <a href="{{ url('login') }}"
                                       class="btn btn-outline-white btn-lg">Login
                                        <i class="fas fa-user ml-2"></i>
                                    </a>
                                <span>or</span>
                                    @if (Route::has('register'))
                                        <a href="{{ url('register') }}"
                                           class="btn btn-outline-red btn-lg">Register
                                            <i class="fas fa-user-circle ml-2"></i>
                                        </a>
                                    @endif
                                @endguest
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Welcome to {{ config('app.name') }}</strong>
                            </h1>
                            <p>
                                <strong>Checking the magic of Laravel</strong>
                            </p>
                            <p class="mb-4 d-none d-md-block">
                                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid at corporis cumque eaque fuga, itaque minima nisi, officiis perspiciatis placeat praesentium quidem recusandae sit suscipit velit vero vitae. Voluptate.</strong>
                            </p>

                            @if (Route::has('login'))
                                @guest
                                    <a href="{{ url('login') }}"
                                       class="btn btn-outline-white btn-lg">Login
                                        <i class="fas fa-user ml-2"></i>
                                    </a>
                                    <span>or</span>
                                    @if (Route::has('register'))
                                        <a href="{{ url('register') }}"
                                           class="btn btn-outline-red btn-lg">Register
                                            <i class="fas fa-user-circle ml-2"></i>
                                        </a>
                                    @endif
                                @endguest
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <video class="video-intro" autoplay loop muted>
                        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4"/>
                    </video>
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Welcome to {{ config('app.name') }}</strong>
                            </h1>
                            <p>
                                <strong>Checking the magic of Laravel</strong>
                            </p>
                            <p class="mb-4 d-none d-md-block">
                                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid at corporis cumque eaque fuga, itaque minima nisi, officiis perspiciatis placeat praesentium quidem recusandae sit suscipit velit vero vitae. Voluptate.</strong>
                            </p>

                            @if (Route::has('login'))
                                @guest
                                    <a href="{{ url('login') }}"
                                       class="btn btn-outline-white btn-lg">Login
                                        <i class="fas fa-user ml-2"></i>
                                    </a>
                                    <span>or</span>
                                    @if (Route::has('register'))
                                        <a href="{{ url('register') }}"
                                           class="btn btn-outline-red btn-lg">Register
                                            <i class="fas fa-user-circle ml-2"></i>
                                        </a>
                                    @endif
                                @endguest
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section('content')
    <div class="container">
        <section class="mt-5 wow fadeIn">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg"
                         class="img-fluid z-depth-1-half" alt="">
                </div>
                <div class="col-md-6 mb-4">
                    <h3 class="h3 mb-3">Material Design for Bootstrap</h3>
                    <p>This template is created with Material Design for Bootstrap (
                        <strong>MDB</strong> ) framework.</p>
                    <p>Read details below to learn more about MDB.</p>
                    <hr>
                    <p>
                        <strong>400+</strong> material UI elements,
                        <strong>600+</strong> material icons,
                        <strong>74</strong> CSS animations, SASS files, templates, tutorials and many more.
                        <strong>Free for personal and commercial use.</strong>
                    </p>
                    <a href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                       class="btn btn-grey btn-md">Download
                        <i class="fas fa-download ml-1"></i>
                    </a>
                    <a href="https://mdbootstrap.com/docs/jquery/components/"
                       class="btn btn-grey btn-md">Live demo
                        <i class="far fa-image ml-1"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection