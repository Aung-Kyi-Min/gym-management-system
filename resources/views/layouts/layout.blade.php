<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>GLP</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="css/font.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
    <!-- Custom styles for this template -->
    <link href="css/common.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" />
                    <span>
                        GLP
                    </span>
                </a>
                <div class="contact_nav" id="">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="images/location.png" alt="" />
                                <span>Location</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="images/call.png" alt="" />
                                <span>Call : + 01 1234567890</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="images/envelope.png" alt="" />
                                <span>demo@gmail.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid purple-bg">
            <div class="custom_nav2">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('user.index') }}">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.workout') }}">Workout List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('member.purchase') }}">Purchase</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.feedback') }}">Feedback</a>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-end">
                                @if (Auth::check())
                                    <a href="{{ route('user.profile') }}"
                                        class="nav-link btn btn-primary btn-sm">Profile</a>&nbsp;
                                    <a href="{{ route('logout') }}" class="nav-link btn btn-light btn-sm">Logout</a>
                                @else
                                    <a href="{{ route('auth.login') }}" class="nav-link text-dark">
                                        Login
                                    </a>
                                    <a href="{{ route('auth.register') }}" class="nav-link text-dark">
                                        Register
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- end header section -->
    @yield('content')

    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <p>
            &copy; 2023 All Rights Reserved. 
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/anchor.js"></script>

    <script>
        function openNav() {
            document.getElementById("myNav").classList.toggle("menu_width");
            document
                .querySelector(".custom_menu-btn")
                .classList.toggle("menu_btn-style");
        }
    </script>

</body>

</html>
