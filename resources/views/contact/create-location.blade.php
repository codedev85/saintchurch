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
                    <img src="images/right-arrow-forward.svg" alt="" class="back__arrow"><span><a href="{{url('/contact_us/show')}}">Back</a></span>
                </p>
                <p class="text__description">Add Church location</p>
            </div>


            <div class="form__container">
            <form action="{{url('/store/location/')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="data__field">

                       <div class="data__field--1">

                                <input type="text" placeholder="Church Name" name="church_name" value="SAINTS COMMUNITY CHURCH" class="title__box" >

                       </div>
                       <div class="data__field--1">

                            <input type="text" placeholder="Phone Nmuber" name="phone_number" class="title__box">

                   </div>
                   <div class="data__field--1">

                        <input type="email" placeholder="Email" name="email" class="title__box" required>

               </div>
               <div class="data__field--1">

                    <input type="text" placeholder="Website" name="website" class="title__box">

               </div>


                       <div class="data__field--1">

                            <textarea name="desc"></textarea>

                          </div>
                          <div class="data__field--1">

                               <select name="states">
                                   <option value="Lagos">Lagos</option>
                                   <option value="Abuja">Abuja</option>
                                   <option value="portharcourt">PorthHarcourt</option>
                                   <option value="Ogun">Ogun State </option>

                               </select>

                       </div>

                       <div class="save__button--container">

                            <button id="submit__button"><span>Save Changes</span></button>

                        </div>


                </div>
            </form>


            </div>



        </div>


    </div>


</section>


</body>
</html>
