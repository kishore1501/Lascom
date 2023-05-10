<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SRMPR LASCOM</title>
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Responsive-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!--Animation-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!--Prettyphoto-->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

    <!--Font-Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Owl-Slider-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">

</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

    <!--Preloader-->
    <div id="preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>

    <!--Navigation-->
    <header id="menu">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <h1 style="font-size: 1.4em;">SRMPR LASCOM</h1>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#menu">
                            <h1 style="font-size: 1.4em;">SRMPR Lascom</h1>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="Home.php">Home</a></li>
                            <li><a href="AboutUS.php">About US</a></li>
                            <li><a href="Services.php">Services</a></li>
                            <li><a href="Portfolio.php">Portfolio</a></li>
                            <li><a href="Team.php">Team</a></li>
                            <li class="active"><a class="scroll" href="Blog.php">Accomplishment</a></li>
                            <li><a href="Contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </header>
    <!--Slider-Start-->
    <section id="slider">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image:url(images/Slider/slider-4.jpg); filter: brightness(150%);">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">

                                <h2>Your Innovation Partner <br> Accelerating Productization</h2>
                                <!-- Getting Content from 'paragraph' table in 'lascomdb' and 'id=1'  -->
                                <p>
                                    <?php
                                    //database connection
                                    $connection = new mysqli("localhost", "root", "", "lascomdb");

                                    // Check connection
                                    if (!$connection) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    //Fetching text from "paragraph" table
                                    $sql = "SELECT Content FROM paragraph WHERE Paragraphid = 1";
                                    $result = mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $content = $row['Content'];

                                    echo $content;

                                    mysqli_close($connection);
                                    ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image:url(images/Slider/slider-1.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">

                                <h2> Rooted In Agile ENGINEERING</h2>
                                <!-- Getting Content from 'paragraph' table in 'lascomdb' and 'id=2'  -->
                                <p>
                                    <?php
                                    //database connection
                                    $connection = new mysqli("localhost", "root", "", "lascomdb");

                                    // Check connection
                                    if (!$connection) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    //Fetching text from "paragraph" table
                                    $sql = "SELECT Content FROM paragraph WHERE Paragraphid = 2";
                                    $result = mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $content = $row['Content'];

                                    echo $content;

                                    mysqli_close($connection);
                                    ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!--/#home-carousel-->
    </section>
    <!--Blog-Section-Start-->
    <section id="blog">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>LATEST ACCOMPLISHME<span>NT</span></h2>
                    <div class="line"></div>
                    <p><span><strong>H</strong></span>ere are the some off our Latest blog posts</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 blog-sec">
                        <div class="blog-info"> <img src="images/Blog/4.jpg" class="img-responsive" alt="">
                            <div class="data-meta">
                                <h4>Aug</h4>
                                <strong>27</strong><br>
                                2019
                            </div>
                            <a href="http://faceinews.com/?p=16398" target="_blank">
                                <h5>INR 3.5 Crore state-of-the-art technology inaugurated at SRMIST</h5>
                            </a>
                            <ul class="blog-icon">
                                <li><i class="fa fa-pencil"></i><a href="#">
                                        <h6>Kishore Ramesh</h6>
                                    </a></li>
                                <li class="comment"><i class="fa fa-comment"></i><a href="#">
                                        <h6>123</h6>
                                    </a></li>
                            </ul>
                            <p>The Benefits of Digital Transformation for the Food and Beverage Industry: With the rise
                                of Industry
                                4.0, digital transformation is becoming increasingly important for companies looking to
                                improve
                                efficiency, reduce costs, and stay competitive.</p>
                            <a href="#" class="btn-blg">Read More.....</a>
                        </div>
                    </div>
                    <div class="col-md-6 blog-sec">
                        <div class="blog-info"> <img src="images/Blog/5.jpg" class="img-responsive" alt="">
                            <div class="data-meta">
                                <h4>DEC</h4>
                                <strong>27</strong><br>
                                2020
                            </div>
                            <a href="https://www.collegechalo.com/news/srmist-16th-convocation-remains-a-great/" target="_blank">
                                <h5>SRMIST 16th convocation remains a great grand affair</h5>
                            </a>
                            <ul class="blog-icon">
                                <li><i class="fa fa-pencil"></i><a href="#">
                                        <h6>S. Vishnu Sharma</h6>
                                    </a></li>
                                <li class="comment"><i class="fa fa-comment"></i><a href="#">
                                        <h6>201</h6>
                                    </a></li>
                            </ul>
                            <p>The students who received the degrees during SRMIST 16th convocation were from the faculties of
                                engineering and technology, faculty of science and humanities, medicine and health sciences and management
                                studies including 129 Ph.D. scholars.</p>
                            <a href="#" class="btn-blg">Read More.....</a>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <footer id="footer">
        <div class="bg-sec">
            <div class="container">
                <h2>I'm excited to <strong>receive </strong>your feedback!</h2>
            </div>
        </div>
    </footer>
    <footer id="footer-down">
        <h2>Follow Us On</h2>
        <ul class="social-icon">
            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
        <p> &copy; Copyright Lascom- Created By : Kishore Ramesh</p>
        </p>
    </footer>
    <!--Jquery-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--Boostrap-Jquery-->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--Preetyphoto-Jquery-->
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!--NiceScroll-Jquery-->
    <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <!--Isotopes-->
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <!--Wow-Jquery-->
    <script type="text/javascript" src="js/wow.js"></script>
    <!--Count-Jquey-->
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
    <!--Owl-Crousels-Jqury-->
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <!--Main-Scripts-->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>