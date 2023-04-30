<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SRM PR LASCOM</title>

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
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#menu">
                            <h1 style="font-size: 1.4em;">SRMPR LASCOM</h1>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a class="scroll" href="Home.php">Home</a></li>
                            <li><a href="AboutUS.php">About US</a></li>
                            <li class="active"><a class="scroll" href="Services.php">Services</a></li>
                            <li><a href="Portfolio.php">Portfolio</a></li>
                            <li><a href="Team.php">Team</a></li>
                            <li><a href="Blog.php">Blog</a></li>
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

                                <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=1'  -->
                                <p>
                                    <?php
                                    //database connection
                                    $connection = new mysqli("localhost", "root", "", "lascomdb");

                                    // Check connection
                                    if (!$connection) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    //Fetching text from "paragraph" table
                                    $sql = "SELECT Paragraph FROM servicepage WHERE id = 1";
                                    $result = mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $Paragraph = $row['Paragraph'];

                                    echo $Paragraph;

                                    mysqli_close($connection);
                                    ?>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image:url(images/Slider/slider-1.jpg); filter: brightness(110%);">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">

                                <h2> Rooted In Agile ENGINEERING</h2>

                                <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=2'  -->
                                <p>
                                    <?php
                                    //database connection
                                    $connection = new mysqli("localhost", "root", "", "lascomdb");

                                    // Check connection
                                    if (!$connection) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    //Fetching text from "paragraph" table
                                    $sql = "SELECT Paragraph FROM servicepage WHERE id = 2";
                                    $result = mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    $Paragraph = $row['Paragraph'];

                                    echo $Paragraph;

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

        <!--Service-Section-Start-->
        <section id="service">

            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading">
                        <h2>OUR SERVIC<span>E</span></h2>
                        <div class="line"></div>
                        <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=3'  -->
                        <p>
                            <?php
                            //database connection
                            $connection = new mysqli("localhost", "root", "", "lascomdb");

                            // Check connection
                            if (!$connection) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            //Fetching text from "paragraph" table
                            $sql = "SELECT Paragraph FROM servicepage WHERE id = 3";
                            $result = mysqli_query($connection, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $Paragraph = $row['Paragraph'];

                            echo $Paragraph;

                            mysqli_close($connection);
                            ?>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="features-sec">
                        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                            <div class="media service-box">
                                <div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
                                <div class="media-body">
                                    <h5 class="media-heading">UI/UX Design</h5>
                                    <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=4'  -->
                                    <p>
                                        <?php
                                        //database connection
                                        $connection = new mysqli("localhost", "root", "", "lascomdb");

                                        // Check connection
                                        if (!$connection) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }

                                        //Fetching text from "paragraph" table
                                        $sql = "SELECT Paragraph FROM servicepage WHERE id = 4";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        $Paragraph = $row['Paragraph'];

                                        echo $Paragraph;

                                        mysqli_close($connection);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                            <div class="media service-box">
                                <div class="pull-left"> <i class="fa fa-cubes"></i> </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Static & Dynamic Website</h5>
                                    <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=5'  -->
                                    <p>
                                        <?php
                                        //database connection
                                        $connection = new mysqli("localhost", "root", "", "lascomdb");

                                        // Check connection
                                        if (!$connection) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }

                                        //Fetching text from "paragraph" table
                                        $sql = "SELECT Paragraph FROM servicepage WHERE id = 5";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        $Paragraph = $row['Paragraph'];

                                        echo $Paragraph;

                                        mysqli_close($connection);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                            <div class="media service-box">
                                <div class="pull-left"> <i class="fa fa-pie-chart"></i> </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Responsive Website</h5>
                                    <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=6'  -->
                                    <p>
                                        <?php
                                        //database connection
                                        $connection = new mysqli("localhost", "root", "", "lascomdb");

                                        // Check connection
                                        if (!$connection) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }

                                        //Fetching text from "paragraph" table
                                        $sql = "SELECT Paragraph FROM servicepage WHERE id = 6";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        $Paragraph = $row['Paragraph'];

                                        echo $Paragraph;

                                        mysqli_close($connection);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                            <div class="media service-box">
                                <div class="pull-left"> <i class="fa fa-bar-chart"></i> </div>
                                <div class="media-body">
                                    <h5 class="media-heading">E-Commerce Website</h5>
                                    <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=7'  -->
                                    <p>
                                        <?php
                                        //database connection
                                        $connection = new mysqli("localhost", "root", "", "lascomdb");

                                        // Check connection
                                        if (!$connection) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }

                                        //Fetching text from "paragraph" table
                                        $sql = "SELECT Paragraph FROM servicepage WHERE id = 7";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        $Paragraph = $row['Paragraph'];

                                        echo $Paragraph;

                                        mysqli_close($connection);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                            <div class="media service-box">
                                <div class="pull-left"> <i class="fa fa-language"></i> </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Portal Website</h5>
                                    <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=8'  -->
                                    <p>
                                        <?php
                                        //database connection
                                        $connection = new mysqli("localhost", "root", "", "lascomdb");

                                        // Check connection
                                        if (!$connection) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }

                                        //Fetching text from "paragraph" table
                                        $sql = "SELECT Paragraph FROM servicepage WHERE id = 8";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        $Paragraph = $row['Paragraph'];

                                        echo $Paragraph;

                                        mysqli_close($connection);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                            <div class="media service-box">
                                <div class="pull-left"> <i class="fa fa-bullseye"></i> </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Content Creation</h5>
                                    <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=9'  -->
                                    <p>
                                        <?php
                                        //database connection
                                        $connection = new mysqli("localhost", "root", "", "lascomdb");

                                        // Check connection
                                        if (!$connection) {
                                            die("Connection failed: " . mysqli_connect_error());
                                        }

                                        //Fetching text from "paragraph" table
                                        $sql = "SELECT Paragraph FROM servicepage WHERE id = 9";
                                        $result = mysqli_query($connection, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        $Paragraph = $row['Paragraph'];

                                        echo $Paragraph;

                                        mysqli_close($connection);
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/.col-md-4-->
                    </div>
                </div>
            </div>
        </section>

        <!--Features-Section-Start-->
        <section id="features">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="heading">
                        <h2>SERVICE PACKA<span>GE</span></h2>
                        <div class="line"></div>
                        <!-- Getting Content from 'featurespage' table in 'lascomdb' and 'id=3'  -->
                        <p>
                            <?php
                            //database connection
                            $connection = new mysqli("localhost", "root", "", "lascomdb");

                            // Check connection
                            if (!$connection) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            //Fetching text from "paragraph" table
                            $sql = "SELECT Paragraph FROM featurespage WHERE id = 3";
                            $result = mysqli_query($connection, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $Paragraph = $row['Paragraph'];

                            echo $Paragraph;

                            mysqli_close($connection);
                            ?>
                        </p>

                    </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-paper-plane"></i></a></li>
                    <li role="presentation"><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-laptop"></i></a></li>
                    <li role="presentation"><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-code"></i></a>
                    </li>
                    <li role="presentation"><a href="#tab-4" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                    <li role="presentation"><a href="#tab-5" role="tab" data-toggle="tab"><i class="fa fa-file-image-o"></i></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active feat-sec" id="tab-1">
                        <div class="col-md-6 tab">
                            <h5>Web Design</h5>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                            <!-- Getting Content from 'featurespage' table in 'lascomdb' and 'id=4'  -->
                            <p>
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM featurespage WHERE id = 4";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </p>
                        </div>
                        <div class="col-md-6 tab-img"><img src="images/Features/01.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-2">
                        <div class="col-md-6 tab">
                            <h5>Graphic Design</h5>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                            <!-- Getting Content from 'servicepage' table in 'lascomdb' and 'id=10'  -->
                            <p>
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM servicepage WHERE id = 10";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </p>


                        </div>
                        <div class="col-md-6 tab-img"><img src="images/Features/02.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-3">
                        <div class="col-md-6 tab">
                            <h5>Web Development</h5>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                            <!-- Getting Content from 'featurespage' table in 'lascomdb' and 'id=6'  -->
                            <p>
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM featurespage WHERE id = 6";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </p>

                        </div>
                        <div class="col-md-6 tab-img"><img src="images/Features/03.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-4">
                        <div class="col-md-6 tab">
                            <h5>Responsive Design</h5>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                            <!-- Getting Content from 'featurespage' table in 'lascomdb' and 'id=7'  -->
                            <p>
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM featurespage WHERE id = 7";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </p>

                        </div>
                        <div class="col-md-6 tab-img"><img src="images/Features/04.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-5">
                        <div class="col-md-6 tab">
                            <h5>Creative Gallery</h5>
                            <div class="line"></div>
                            <div class="clearfix"></div>
                            <!-- Getting Content from 'featurespage' table in 'lascomdb' and 'id=8'  -->
                            <p>
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM featurespage WHERE id = 8";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </p>

                        </div>
                        <div class="col-md-6 tab-img"><img src="images/Features/05.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Section Ends -->

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