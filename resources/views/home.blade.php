{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600"

        rel="stylesheet">
    <link href="vendor/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/jquery.ui.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,300i,400');
        @import url(resources/css/directory.css);
        @import url(admin1.css);
    </style>

    <title>Admin/Media Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span>Home</span>

                </p>

        </div>

</div>



<section class="container">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__menu--container">

                <div class="left__menu--item">
                    <img src="images/LOGO.svg" alt="" class="left__bar--image">
                </div>
                <div class="left__menu--item">
                    <img src="images/home-page (1).svg" alt="" class="left__menu--icon">
                    <span><a href="{{url('/home')}}"> Dashboard </a></span>
                </div>
                <div class="left__menu--item">
                    <img src="images/home-page (1).svg" alt="" class="left__menu--icon">
                <span><a href="{{url('/user/edit/'.$user->id)}}">Edit Account</a></span>
                </div>
                <div class="left__menu--item">
                    <img src="images/church.svg" alt="" class="left__menu--icon">
                    <span><a href="{{url('/')}}">Back To Main Site</a></span>
                </div>
                <div class="left__menu--item">
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                </div>

            </div>

        </div>

        <div class="center__Container">
            <div class="home__menu--container">
                    <div class="left__home--menus">

                            <div class="left__home--item">


                                <p><img src="images/homepage_img.svg" alt="" class="homepage__img"></p>
                            <p class="home__menu--description"><a href="{{url('/home/show/')}}" class="home__page--link">Home Page</a></p>

                            </div>
                            <div class="left__home--item">


                                <p><img src="images/contactus_img.svg" alt="" class="homepage__img"></p>
                            <p class="home__menu--description"><a href="{{url('/contact_us/show/')}}" class="home__page--link">Contact Us</a></p>


                            </div>
                            <div class="left__home--item">


                                <p><img src="images/media_img.svg" alt="" class="homepage__img"></p>
                            <p class="home__menu--description"><a href="{{url('/media/show/')}}" class="home__page--link">Media</a></p>


                            </div>
                            <div class="left__home--item">


                                <p><img src="images/footer_img.svg" alt="" class="homepage__img"></p>
                            <p class="home__menu--description"><a href="{{url('/footer/show/')}}" class="home__page--link">Footer</a></p>


                            </div>

                    </div>
                    <div class="right__home--menus">



                                <div class="right__home--item">


                                            <p><img src="images/aboutscc.svg" alt="" class="homepage__img" id="aboutscc__img"></p>
                                <p class="home__menu--description"><a href="{{url('/about_us/show/')}}" class="home__page--link">About SCC</a></p>


                                </div>
                                <div class="right__home--item">


                                            <p><img src="images/programs_img.svg" alt="" class="homepage__img"></p>
                                <p class="home__menu--description"><a href="{{url('/program/show/')}}" class="home__page--link">Programs</a></p>


                                </div>
                                <div class="right__home--item">


                                            <p><img src="images/partnership_img.svg" alt="" class="homepage__img"></p>
                                <p class="home__menu--description"><a href="{{url('/partnership/show/')}}" class="home__page--link">Partnerships</a></p>


                                </div>
                                <div class="right__home--item ">


                                            <p><img src="images/menu_img.svg" alt="" class="homepage__img"></p>
                                <p class="home__menu--description"><a href="{{url('/menu/show/')}}" class="home__page--link">Menu</a></p>


                                </div>

                    </div>


                        </div>
            </div>

        </div>

</section>


</body>
</html>


