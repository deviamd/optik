<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('glasses website/css/style.css')}}">


    <!-- custom js file link  -->
    <script src="{{asset('glasses website/js/script.js')}}" defer></script>

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="home.html" class="logo"> LOGO </a>

    <nav class="navbar">
        <ul>

            <li><a href="products.html">products</a></li>
            <li><a href="about.html">about</a></li>
            </li>
            <li><a href="contact.html">contact</a></li>
            @auth
            <li>
                <a href="#">Selamat datang, {{ Auth::user()->name }}</a>
                <ul>

                    <li><a href="/home ">Dashboard</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf

                    </form>
                    <li><a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a></li>

                </ul>
            </li>
            @else
                <li>
                    <a href="#">account +</a>
                    <ul>

                        <li><a href="{{ route('login') }}">login</a></li>
                        <li><a href="{{ route('register') }}">register</a></li>

                    </ul>
                </li>
            @endauth
        </ul>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="cart.html" class="fas fa-shopping-cart"></a>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts      -->

<section class="home">

    <div class="slide active" style="background: url('glasses website/images/home-bg-1.png') no-repeat;">
        <div class="content">
            <span>protect your eyes</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="slide" style="background: url('glasses website/images/home-bg-2.png') no-repeat;">
        <div class="content">
            <span>protect your eyes</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="slide" style="background: url(glasses webstie/images/home-bg-3.png) no-repeat;">
        <div class="content">
            <span>protect your eyes</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

</section>

<!-- home section ends     -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box">
        <img src="glasses website/images/banner-1.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="box">
        <img src="glasses website/images/banner-2.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="box">
        <img src="glasses website/images/banner-3.jpg" alt="">
        <div class="content">
            <span>special offer</span>
            <h3>upto 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</section>

<!-- banner section ends -->











<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
            <a href="products.html"> <i class="fas fa-angle-right"></i> products</a>
            <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
            <a href="blogs.html"> <i class="fas fa-angle-right"></i> blogs</a>
            <a href="contact.html"> <i class="fas fa-angle-right"></i> contact</a>
            <a href="login.html"> <i class="fas fa-angle-right"></i> login</a>
            <a href="{{ route('register') }}"> <i class="fas fa-angle-right"></i> register</a>
            <a href="cart.html"> <i class="fas fa-angle-right"></i> cart</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> my account </a>
            <a href="#"> <i class="fas fa-angle-right"></i> my order </a>
            <a href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>kiyama optik</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

</body>
</html>
