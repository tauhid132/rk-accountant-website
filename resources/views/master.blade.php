
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page-title')</title>
    <link rel="shortcut icon" href="{{ asset('fevicon.png') }}" type="image/png">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/slicknav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/tiny-slider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" media="screen">
    
    
</head>
<body>
    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/loader.svg" alt=""></div>
        </div>
    </div> --}}
    
    @include('includes.header')
    
    @yield('main-body')
    
    
    
    @include('includes.footer')
    
    
    <div class="back-top" id="topBtn"></div>
    
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/magiccursor.js') }}"></script> --}}
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/function.js') }}"></script>
    <script>
        window.addEventListener('scroll', function () {
            var headerMenu = document.querySelector('.main-header');
            if (headerMenu) {
                headerMenu.classList.toggle('sticky', window.scrollY > 700);
            }
        });

        window.addEventListener('scroll', function () {
                scrollpos = window.scrollY;
                var topBtn = document.getElementById("topBtn");
                if (scrollpos >= 800) {
                    topBtn.classList.add("back-top-show");
                    //e.select('.back-top').addClass("back-top-show");
                } else {
                    //e.select('.back-top').removeClass("back-top-show");
                    topBtn.classList.remove("back-top-show");
                }
                topBtn.addEventListener('click', () => window.scrollTo({
                top: 0,
                behavior: 'smooth',
            }));
            });
    </script>
</body>

</html>