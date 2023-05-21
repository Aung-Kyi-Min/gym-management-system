@extends('layouts.layout')

@section('content')

  <!-- slider section -->
  <section class=" slider_section position-relative">
    <div class="slider_container adj-size">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                    <h2>
                        Get Your Body
                    </h2>
                    <h1>
                        Fitness Here
                    </h1>
                    <p>
                        Are you ready to take your fitness to the next level? Join our gym and let us help you reach your goals.
                        Our experienced trainers will guide you every step of the way, and our state-of-the-art equipment will make
                        your workouts more effective and enjoyable. Don't wait any longer, start your fitness journey today!
                    </p>
                    <div class="btn-box">
                        <a href="#about-us" class="btn-1">
                        Read More
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="carousel-item ">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                    <h2>
                        Unleashed Your Inner Fighter
                    </h2>
                    <h1>
                        IN HERE
                    </h1>
                    <p>
                        Boxing is not just a sport, it's a way of life.
                        Our gym offers top-notch boxing training that will help you improve your strength,
                        coordination, and mental toughness. Our experienced trainers will teach you the fundamentals of boxing
                        and guide you towards achieving your goals.
                        Join our gym and become the best version of yourself through boxing!
                    </p>
                    <div class="btn-box">
                        <a href="#about-us" class="btn-1">
                        Read More
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="carousel-item ">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                    <h2>
                        Aim Your Target Body Weight
                    </h2>
                    <h1>
                        WITH US
                    </h1>
                    <p>
                        Are you ready to transform your body and your life?
                        Our gym offers personalized support and cutting-edge equipment to help you reach your weight loss goals.
                        Our experienced trainers will guide you every step of the way, and our supportive community will keep you motivated.
                        Don't wait any longer, start your weight loss journey today!
                    </p>
                    <div class="btn-box">
                        <a href="#about-us" class="btn-1">
                        Read More
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Mainn Services
        </h2>
      </div>
      <div class="service_container">
        <div class="box">
          <img src="/images/gym.webp" class="test" alt="">
          <h6 class="visible_heading">
            Gym Traning
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Gym Traning
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/boxing.jpg" class="test" alt="">
          <h6 class="visible_heading">
            Boxing Traning
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Boxing Traning
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/cardio.jpg" class="test" alt="">
          <h6 class="visible_heading">
            Cardio Traning
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Cardio Traning
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="images/custom.jpg" class="test" alt="">
          <h6 class="visible_heading">
            Custom Package
          </h6>
          <div class="link_box">
            <a href="">
              <img src="images/link.png" alt="">
            </a>
            <h6>
              Custom Package
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- trainer section -->
  <section class="client_section layout_padding ">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Trainers
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Trainer 1
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Trainer 2
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Trainer 3
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end trainer section -->

  <!-- Us section -->
  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img-box">
            <img src="images/u-1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              QUALITY EQUIPMENT
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/u-2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              HEALTHY NUTRITION PLAN
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/u-3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              SHOWER SERVICE
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/u-4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              UNIQUE TO YOUR NEEDS
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end us section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Consectetur
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Consectetur
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Consectetur
                </h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end client section -->

  <!-- result section -->
  <section class="result_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/result-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="detail-box">
            <h2>
              BUILT TO BRING <br>
              BEST RESULTS
            </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end result section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2 id="about-us">
          About GLP
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="images/about-img.png" alt="">
        </div>
        <div class="detail-box">
          <p>
            Welcome to our fitness center, where we provide a holistic approach to health and wellness.
            Our state-of-the-art facility offers a wide range of amenities, including a fully-equipped gym,
            a boxing area, and a variety of cardio machines. We believe that physical fitness is not just about lifting weights
            or running on a treadmill, but it's about achieving balance in all areas of your life.
            Our knowledgeable and friendly staff are dedicated to helping you reach your fitness goals,
            whether that's building strength, increasing endurance, or improving overall health and well-being.
            With our focus on community, we aim to create a supportive and inclusive environment where everyone feels welcome
            and encouraged to be their best selves. Come join us and discover the transformative power of fitness!
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Get In Touch
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Message" />
                  </div>
                  <div class="mt-5">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                  width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding2-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h6>
            About GLP
          </h6>
          <p>
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation u
          </p>
        </div>
        <div class="col-md-3 offset-md-1">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="#">Workout List </a>
            </li>
            <li class="">
              <a class="" href="#">Services </a>
            </li>
            <li class="">
              <a class="" href="#">Purchase</a>
            </li>
            <li class="">
              <a class="" href="#">Feedback</a>
            </li>
          </ul>
        </div>

        <div class="col-md-3">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="images/location-white.png" alt="">
              <span> No.123, loram ipusm</span>
            </a>
            <a href="">
              <img src="images/call-white.png" alt="">
              <span>+01 12345678901</span>
            </a>
            <a href="">
              <img src="images/mail-white.png" alt="">
              <span> demo123@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->
  <script src="../js/sweetalert.min.js"></script>
  @if (Session::has('message'))
      <script>
          swal("Message", "{{ Session::get('message') }}", 'success', {
              button: true,
              button: "Ok",
          });
      </script>
  @endif
  @if (Session::has('success'))
  <script>
      swal("Message", "{{ Session::get('success') }}", 'success', {
          button: true,
          button: "Ok",
      });
  </script>
@endif
@endsection

