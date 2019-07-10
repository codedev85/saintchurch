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
        @import url(../admin1.css);
    </style>

    <title>Admin/Media Page</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

                <p class="top__bar-hero">

                        <span><img src="images/home-page (1).svg" alt="" class="home__img"></span>
                        <span class="dash__line"></span>
                        <span>Homepage</span>

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
                <div>
                        <p class="text__description">Menu Update</p>
                </div>
                <div class="form__header--list1">
                    <p class="">
                        <img src="images/right-arrow-forward.svg" alt="" class="back__arrow"><span class=""><a href="{{url('/home')}}">Back</a></span>
                    </p>
                    <P class="aboutus__hero--container">
                    <button id="" class=""><span class=""><a href="{{url('/menu/create/')}}"> Add To Menu </a></span></button>
                    </P>
                </div>

            </div>


            <div class="form__container">


                <div class="table__container">

                    <table class="table__container--main">

                        <thead class="table__header">

                            <tr class="table__row">
                                <th class="table__section">S/N</th>
                                <th class="table__section">DATE POSTED</th>
                                <th class="table__section">TITLE</th>
                                <th class="table__section">ACTIONS</th>
                            </tr>

                        </thead>
                     @foreach($menu as $men)
                       <tr class="table__row">
                       <td class="table__data">{{$men->id}}</td>
                       <td class="table__data">{{$men->created_at}}</td>
                       <td class="table__data">{{$men->name}}</td>
                       <td class="table__data"><a href="{{url('/menu/edit/'.$men->id)}}"> EDIT</a> |
                       <form action="{{url('/menu/destroy/'.$men->id)}}" method="post">
                            <input class="btn btn-default" type="submit" value="Delete" />
                            <input type="hidden" name="_method" value="delete" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>

                    </td>
                       </tr>
                  @endforeach


                    </table>


                </div>

            </div>

        </div>

    </div>


</section>


</body>
</html>

