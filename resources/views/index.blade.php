<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Clinic</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
        content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<style>
    .logo_div {
        width: 75px;
    }

    .margin-div {
        margin-bottom: 30px;
    }

    .margin-i {
        margin-bottom: -33px !important;
    }

    .logo_main {
        width: 15%;
        margin-top: 100px;
    }
    .whiteButton{
      color: white;
    }

    .ibrahim {
        border: solid #0c94b3 2px;
        color: white;
        background-color: #0c94b3;
        font-size: 20px;
        padding: 10px;
    }

    .ibrahim:hover {
        border: solid #0c94b3 2px;
        color: white;
        background-color: #0c94b3;
        font-size: 20px;
        padding: 10px;
    }

    @media (max-width:786px) {
        .logo_div {
            width: 75px;
        }

        .logo_main {
            width: 30%;

        }
        .contuctus-col{
          padding-top: 15px;
        }
    }
</style>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--banner-->
    <section id="banner" class="banner">
        <div class="bg-color">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="col-md-6">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand logo_div">
                                <img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
                            </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#banner">Home</a></li>
                                <li class=""><a href="#contact">Appointment</a></li>
                                <li class=""><a href="#about">About</a></li>
                                <li class=""><a href="#cta-1">Blogs</a></li>
                                <li class=""><a href="#cta-2">Contact US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="banner-info">
                        <div class="banner-logo text-center">
                            <img src="img/logo.png" class="img-responsive logo_main">
                        </div>
                        <div class="banner-text text-center margin-div">
                            <h1 class="white">Healthcare at your desk!!</h1>
                            <!-- <p>LorLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  <br>tempor incididunt ut labore et dolore magna aliqua.</p> -->
                            <a href="#contact" class="btn btn-appoint">Make an Appointment.</a>
                        </div>
                        <div class="overlay-detail text-center">
                            <a href="#service"><i class="fa fa-angle-down margin-i"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ banner-->
    <!--service-->
    <!-- <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Service</h2>
          <hr class="botm-line">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Emergency Services</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Medical Counseling</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Premium Healthcare</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!--/ service-->
    <!--cta-->
    <section id="cta-1" class="section-padding">
        <?php
        $blogs = DB::table('blogs')
            ->where('active', 1)
            ->orderBy('updated_at', 'desc')
            ->take(3)
            ->get();
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="ser-title" >Blogs</h2>
                    <hr class="botm-line">
                <div class="schedule-tab" style="width:100%">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 col-sm-4 bor-left col-lg-4">
                            <div class="mt-boxy-color"></div>
                            <div class="medi-info">
                                <h3>{{ $blog->title }}</h3>
                                <p>{{ $blog->description }}</p>
                                <a href="#" class="medi-info-btn">READ MORE</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div style="text-align: center">
                    <a href="#" class="medi-info-btn ibrahim">READ MORE</a>
                  </div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="section-title">

                        <img src="img/thumb.png" alt="" class="img-responsive" style="    border-radius: 200px;
                        ">
                        {{-- <hr class="botm-line"> --}}

                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div style="visibility: visible;" class="col-sm-9 more-features-box">
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon"> <i class="fa fa-angle-right"
                                    aria-hidden="true"></i> </div>
                            <div class="more-features-box-text-description">
                                <h1>It's something important you want to know about us.</h1>
                                <h3 data-qa-target="ProviderDisplayName">Dr. Ghaith Karam</h3>
                                <div>
                                    <p><span data-qa-target="ProviderDisplaySpeciality">Graduated from Damascus
                                            university factually of medcine</span><span><span>•</span><span
                                                data-qa-target="ProviderDisplayAge">Age
                                                <!-- -->24 •
                                            </span></span></p>
                                </div>
                                <p> Dr. Ghaith karam one of the best General Practitioner in syria , He is now preparing
                                    for specialization in the orthopedic department in an European country.</p>
                                <p>Dr. Ghaith is currently able to provide some medical advice and deal with some
                                    medical cases in general, and through this site there will be a management of his
                                    work in the clinic.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--doctor team-->

    <!--/ doctor team-->
    <!-- testimonial-->
    {{-- <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">see what patients are saying?</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>  {{-- <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">see what patients are saying?</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
    <!--/ testimonial -->
    <!--cta 2-->
    <section id="cta-2" class="section-padding">
        <style>
            #cta-2 {
                background-color: rgb(29 72 86);
            }
        </style>
        <div class="container">


            <div class="row">
                <div class="col-md-8">
                    <div class="mapouter">
                        <div class="">
                            <iframe width="100%" height="350px" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=%D8%AF%D9%85%D8%B4%D9%82%20%D8%A7%D9%84%D8%B5%D8%A7%D9%84%D8%AD%D9%8A%D8%A9&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <a href="https://fmovies-online.net">
                            </a>
                            <br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 100%;
                                    width: 100%;
                                }
                            </style>
                            {{-- <a href="https://www.embedgooglemap.net">embed google maps in wordpress</a> --}}
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 100%;
                                    width: 100%;
                                }
                            </style>

                        </div>
                    </div>
                </div>

                <div class="col-md-4  contuctus-col" id="contac-us">

                    <h2 class="ser-title" style="color: #fff;">Contact us</h2>
                    <hr class="botm-line">
                    <h3 style="color: #fff;">Contact Info</h3>
                    <div class="space"></div>
                    <p><i  class="fa fa-map-marker fa-fw pull-left fa-2x"></i> Alhamraa Street<br> Damascus, Salehieh
                    </p>
                    <div class="space"></div>
                    <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
                    <div class="space"></div>
                    <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+963 800 123 1234</p>

                </div>
            </div>


        </div>
    </section>
    <!--cta-->
    <!--contact-->
    <section id="contact" class="section-padding">

        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-8 marb20">
                    <div class="contact-info">
                        <h3 class="cnt-ttl">Request an appointment</h3>
                        <div class="space"></div>
                        <div id="sendmessage">Your details has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="{{ url('') }}/save_appointment" method="post" role="form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control br-radius-zero"
                                    id="name" placeholder="Your Name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control br-radius-zero" name="email"
                                    id="email" placeholder="Your Email" data-rule="email"
                                    data-msg="Please enter a valid email" />

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control br-radius-zero" name="number"
                                    id="number" placeholder="Your Number" data-rule="minlen:4"
                                    data-msg="Please enter your mobile number" />

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control br-radius-zero" name="id_number"
                                    id="IDNumber" placeholder="Your Identification Number" data-rule="minlen:4"
                                    data-msg="Please enter your Identification Number"
                                  />
                            </div>
                            <div class="form-group">
                                <?php
                                $appoint_date = date('Y-m-d H:i:s');
                                ?>
                                <input type="datetime-local" class="form-control br-radius-zero" id="date"
                                    name="date" data-msg="Please enter Date">

                            </div>
                            <div class="form-group">
                                <textarea class="form-control br-radius-zero" name="description" rows="5" data-rule="required"
                                    data-msg="Please write some words about your Pathological case" placeholder="Description"></textarea>

                            </div>

                            <div class="form-action">
                                <button type="submit" class="btn btn-form">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ contact-->
    <!--footer-->
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">About Us</h4>
                        </div>
                        <div class="info-sec">
                            <p>Our Clinic can provide some medical services, and you can read our medical blogs to increase your knowledge.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Quick Links</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Follow us</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">
                              <li class="bglight-blue"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook whiteButton"></i></a></li>
                                <li class="bgred"><a for="" href="https://www.google.com/" target="_blank"> <i class="fa fa-google whiteButton"></i></a></li>
                                <li class="bgdark-blue"><a for="" href="https://www.linkedin.com/" target="_blank"> <i class="fa fa-linkedin whiteButton"></i></a></li>
                                <li class="bglight-blue"><a for="" href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter whiteButton"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        © Copyright Ibrahim - Hani. All Rights Reserved
                        <div class="credits">
                            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
              -->
                            Designed by Ibrahim - Hani
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer-->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>

</html>
