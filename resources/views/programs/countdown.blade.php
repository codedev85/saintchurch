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
            p {
              text-align: center;
              font-size: 60px;
            }
            </style>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:100,300,300i,400');
        @import url(resources/css/directory.css);
        @import url(../admin1.css);
    </style>

    <title>Admin/Editcountdown Page</title>
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
                    <span><a href="{{url('/home')}}"> Dashboard </a></span><span>Dashboard</span>
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
                    <img src="images/right-arrow-forward.svg" alt="" class="back__arrow"><span><a href="{{url('/home')}}">Back</a></span>
                </p>
                <p class="text__description">Edit Countdown Timer</p>
            </div>


            {{-- <div class="form__container"> --}}

                <div class="data__field">

                    <div>Registration closes in <span id="time">10:00</span> minutes!</div>


                    <script>

         function startTimer(duration, display) {
           var timer = duration, minutes, seconds;
           setInterval(function () {
               minutes = parseInt(timer / 60, 10);
               seconds = parseInt(timer % 60, 10);

               minutes = minutes < 10 ? "0" + minutes : minutes;
               seconds = seconds < 10 ? "0" + seconds : seconds;

               display.textContent = minutes + ":" + seconds;

               if (--timer < 0) {
                   timer = duration;
               }
           }, 1000);
       }

       window.onload = function () {
           var fiveMinutes = 60 * 10,
               display = document.querySelector('#time');
           startTimer(fiveMinutes, display);
       };
       </script>


            {{-- </div>



        </div> --}}

    </div>


</section>


</body>
</html>
