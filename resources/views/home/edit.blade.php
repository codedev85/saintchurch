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
        @import url(../../admin1.css);
    </style>

    <title>Admin/programs Page</title>
</head>
<body>
<div class="top__bar">
        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span><img src="images/home-page (1).svg" alt="" class="home__img"></span>
                        <span class="dash__line"></span>
                        <span>About Us</span>

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
                    <img src="images/church.svg" alt="" class="left__menu--icon">
                    <span><a href="{{url('/')}}">Back To Main Site</a></span>
                </div>
                <div class="left__menu--item">
                        <img src="images/logout.svg" alt="" class="left__menu--icon">
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
            <div class="form__header--list">
                <p class="form__header--sub">
                    <img src="images/right-arrow-forward.svg" alt="" class="back__arrow"><span><a href="{{url('/home/show')}}">Back</a></span>
                </p>
                <p class="text__description">Edit HomePage</p>
            </div>


            <div class="form__container">
                <div class="data__field">
                <form action="{{url('/home/update/'.$find_page->id)}}" method="post" enctype="multipart/form-data">
                 @csrf

                    <div class="data__field--1">
                    <input type="text" name="name" value="{{$find_page->name}}" class="title__box">
                    </div>
                    <div class="data__field--1">

                        <textarea class="textarea__box" name="desc" rows="4" cols="50">
                            {{$find_page->description}}
                        </textarea>

                    </div>
                    <div class="data__field--1">

                        <input type="file" name="img_path1"/>
                    </div>
                    <div class="data__field--1">

                        <input type="file" name="img_path2"/>
                    </div>


                </div>
                <div class="featured__image">

  {{-- <img src="{{url('storage/'.$program_edit->img_path1)}}" alt="" class="advert-img img-fluid mb-3 shadow-in"> --}}

                <img src="{{url('storage/'.$find_page->img_path1)}}" width="200" height="400" alt="" class="bg__image">
                <button class="add__photo bg__image"><span>FIRST PHOTO</span></button>
                    {{-- <button class="add__photo"><span>ADD PHOTO</span></button> --}}

                </div>
                <div class="featured__image">

                        <img src="{{url('storage/'.$find_page->img_path2)}}" width="200" height="400" alt="" class="bg__image">
                    {{-- <button class="add__photo bg__image"><span>ADD PHOTO</span></button> --}}
                     {{-- <button class="add__photo bg__image"><span>SECOND PHOTO</span></button> --}}

                </div>
                <div class="save__button--container">

                    <button id="submit__button"><span>Save Changes</span></button>

                </div>
            </form>
            </div>

        </div>

    </div>


</section>


</body>
</html>

