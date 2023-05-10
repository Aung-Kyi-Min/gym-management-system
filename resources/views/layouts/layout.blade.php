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

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="css/font.css" rel="stylesheet" />
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex  flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Workout List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Purchase</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                        </ul>
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
        &copy; 2019 All Rights Reserved. Design by
        <a href="https://html.design/">Free Html Templates</a>
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
