
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Tricot Fashion</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flex-slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flexslider-rtl-min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/glightbox/css/glightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css" />
    <link rel="stylesheet" href="./{{asset('assets/css/animate.css')}}">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css" />
</head>




<body>

    <button onclick="topFunction()" id="myBtn"><i class="fa fa-arrow-up"></i></button>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="width: 100% !important;padding: 0px !important;">
        <nav class="main-nav navbar navbar-nav" style="border-radius:0px;width: 100% !important;box-shadow: 1px 1px 8px #4c4478;">
            <div class="container" style="width: 100% !important;">
                <div class="row" style="width: 100% !important;">
                    <div class="col-md-12 col-lg-12 col-sm-12 navbar-text" id="nav-responsive">

                        <!-- ***** Logo Start ***** -->
                        <!-- <a href="#" class="navbar-brand logo"> -->
                        <a href="#welcome" class="navbar-brand navbar-text ml-50">
                            <img src="{{asset('assets/images/Tricotfashion.PNG')}}" alt="Tricot Fashion" style="height: 40px;" />
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->

                        <ul class="nav navbar-text ul-nav">
                            <li><a href="#welcome" class="active">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="#sustainability">Mission & Vision</a></li>
                            <li><a href="#work-process">Work Process</a></li>
                            <li><a href="#management">Management</a></li>
                            <!-- <li><a href="#testimonials">Testimonials</a></li> -->
                            {{-- <li><a href="#blog">Latest News</a></li> --}}
                            <li><a href="#contact-us">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ***** Header Area End ***** -->



@yield('content')





    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{{asset('assets/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/imgfix.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/aos/aos.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/glightbox/js/glightbox.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.min.js"></script>
    <!-- Global Init -->
    <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/WOW.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>

    <script>
        // $(window).load(function () {
        $(document).ready(function() {
            $('.flexslider').flexslider({
                // animation: "slide",
                rtl: true

            });
        });
    </script>

    <script>
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    </script>

    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>
</html>

