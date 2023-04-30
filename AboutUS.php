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
                            <li><a href="Home.php">Home</a></li>
                            <li class="active"><a class="scroll" href="AboutUS.php">About US</a></li>
                            <li><a href="Services.php">Services</a></li>
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
                <div class="item active" style="background-image:url(images/Slider/slider-4.jpg); filter: brightness(200%);">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">

                                <h2>Your Innovation Partner <br> Accelerating Productization</h2>
                                <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=1'  -->
                                <p>
                                    <?php
                                    //database connection
                                    $connection = new mysqli("localhost", "root", "", "lascomdb");

                                    // Check connection
                                    if (!$connection) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    //Fetching text from "paragraph" table
                                    $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 1";
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
                                <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=2'  -->
                                <p>
                                    <?php
                                    //database connection
                                    $connection = new mysqli("localhost", "root", "", "lascomdb");

                                    // Check connection
                                    if (!$connection) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    //Fetching text from "paragraph" table
                                    $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 2";
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

        <!--About-Section-Start-->
        <section id="about">
            <div class="container">
                <div class="wow fadeInDown" class="col-md-8 col-md-offset-2">
                    <div class="heading">
                        <h2>SRM LEGA<span>CY</span></h2>
                        <div class="line"></div>
                        <p style="text-align: left; font-size:20px;">Taking charge of destiny and steering its course comes easily to Dr. Ravi Pachamuthu, Chairman of SRM Group. </p>

                        <p style="text-align: left; font-size:20px;">The Group is known for its formidable foray into the multi-vertical enterprise, has made its presence in the fields of engineering, medical education, healthcare, research, industry, infotainment, hospitality, and transport across the country.</p>

                        <p style="text-align: left; font-size:20px;">The seeds of the SRM Group were first laid when Dr. T. R. Pachamuthu, father of Dr. Ravi Pachamuthu, began the Florence Nightingale
                            School in West Mambalam, Chennai, India, and the foundations for professional education in 1984, with the launch of Valliammai Polytechnic
                            Institute. Dr. Ravi Pachamuthu has expanded the frontiers of the SRM group from an educational institute to a business empire with the
                            largest portfolio of institutions in South India. With his broad vision, foresight, enterprise and determination, he has broadened the
                            horizon of the Group's business to new heights with SRM University, SRM Medical College Hospital and Research Centres, SRM Transport Private
                            Ltd, SRM Hotels, SRM Cements, SRM Civil Works Pvt Ltd, Ready-mix Concretes (RMC) etc. - all under the flagship of SRM.</p>

                        <p style="text-align: left; font-size:20px;">Today SRM University has evolved as one of the top-ranking universities in India with over 40000 students and 2600 plus faculty members, offering a wide range of undergraduate, postgraduate and doctoral programs in Engineering, Management, Medicine and Health Sciences, and Science and Humanities in Tamilnadu, Ghaziabad, Sonepat and Sikkim.</p>

                        <p style="text-align: left; font-size:20px;">The SRM group has established SRM Hospitals, colleges and research centres catering to the medical disciplines of nursing, physiotherapy, dentistry, occupational therapy and Indian medicine. SRM runs medical centres operating in multiple disciplines, including microbiology, biochemistry, biotechnology and pharmacology. These services, 40% of which are provided free of cost to the underprivileged, are made available to the general public at highly affordable rates in a bid to make good healthcare accessible to all.</p>

                        <p style="text-align: left; font-size:20px;">All SRM University colleges have achieved many milestones right from inception, by forging partnerships and global links with the world's leading medical universities. These partnerships and alliances give Group institutions</p>

                        <ul style="text-align:left; font-size: 20px;">
                            <li>Access to the latest developments taking place in the field of medicine</li>
                            <li>Breakthroughs and research findings</li>
                            <li>Sharing of latest knowledge and data for safer and better cures for mankind</li>
                            <li>Updated protocols being followed in the western and European hospitals</li>
                            <li>Creation of highest standards and practices for prevention of diseases, diagnosis and treatment</li>
                        </ul>

                        <p style="text-align: left; font-size:20px;">Dr. Ravi Pachamuthu always sees a unifying goal behind all diverse ventures, in the sense that they either support or feed into the other, as signified by the Group's foray into various businesses such as hospitality, transport, cement, construction, etc.</p>

                        <p style="text-align: left; font-size:20px;">Dr. Ravi Pachamuthu's passion for the Hospitality Industry has enabled the Group to set up five hotels of different categories at various locations in Tamil Nadu. He lays emphasis on quality, dedicated service, and focus on delivering sustainable growth. The Hotels under his control are acclaimed and conferred with awards.</p>

                        <p style="text-align: left; font-size:20px;">He has also set up SRM Transports Private Limited which has a fleet of over 120 buses plying across the five southern states and about 30 car carriers, minibusses, bulkers, Speed Parcel Carriers, and tourists cabs.</p>

                        <p style="text-align: left; font-size:20px;">SRM Civil Works Private Limited is engaged in the production of Ready Mix Concrete (RMC) used for construction activities undertaken by the Company and others. They have two factories located in the suburbs of Chennai city.</p>

                        <p style="text-align: left; font-size:20px;">Dr. Ravi Pachamuthu has a Midas' touch in whatever ventures he turns his attention to. He took over a sick cement company situated in the state of Andhra Pradesh and within a short span of time turned into a profit-making venture.
                            The company provides direct employment to over 250 people and indirect employment to many. The cement unit has now initiated steps for expansion of its capacity.</p>

                        <p style="text-align: left; font-size:20px;">Over the years, SRM has grown to be known for its integrity, ethical practice, and transparency. Across all its verticals, the SRM Group has built on its foundation of deep-rooted values and endeavors to continue the group's legacy with respect to its patients, partners, and employees.</p>

                        <h2>SRM Gruop Mileston<span>es</span></h2>
                        <div class="line"></div>

                        <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=4'  -->
                        <ul>
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 4";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=5'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 5";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=6'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 6";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=7'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 7";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=8'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 8";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=9'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 9";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=10'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 10";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=11'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 11";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=11'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 11";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=12'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 12";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=13'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 13";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=14'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 14";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=15'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 15";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=16'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 16";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=17'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 17";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=18'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 18";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=19'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 19";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=20'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 20";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=21'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 21";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=22'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 22";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=23'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 23";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=24'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 24";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=25'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 25";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=26'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 26";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=27'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 27";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=28'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 28";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>

                            <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=29'  -->
                            <li style="text-align: left; font-size:20px;">
                                <?php
                                //database connection
                                $connection = new mysqli("localhost", "root", "", "lascomdb");

                                // Check connection
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                //Fetching text from "paragraph" table
                                $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 29";
                                $result = mysqli_query($connection, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $Paragraph = $row['Paragraph'];

                                echo $Paragraph;

                                mysqli_close($connection);
                                ?>
                            </li>
                        </ul>
                        <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=30'  -->
                        <p style="text-align: left; font-size:20px;">
                            <?php
                            //database connection
                            $connection = new mysqli("localhost", "root", "", "lascomdb");

                            // Check connection
                            if (!$connection) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            //Fetching text from "paragraph" table
                            $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 30";
                            $result = mysqli_query($connection, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $Paragraph = $row['Paragraph'];

                            echo $Paragraph;

                            mysqli_close($connection);
                            ?>
                        </p>

                        <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=31'  -->
                        <p style="text-align: left; font-size:20px;">
                            <?php
                            //database connection
                            $connection = new mysqli("localhost", "root", "", "lascomdb");

                            // Check connection
                            if (!$connection) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            //Fetching text from "paragraph" table
                            $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 31";
                            $result = mysqli_query($connection, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $Paragraph = $row['Paragraph'];

                            echo $Paragraph;

                            mysqli_close($connection);
                            ?>
                        </p>

                        <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=32'  -->
                        <p style="text-align: left; font-size:20px;">
                            <?php
                            //database connection
                            $connection = new mysqli("localhost", "root", "", "lascomdb");

                            // Check connection
                            if (!$connection) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            //Fetching text from "paragraph" table
                            $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 32";
                            $result = mysqli_query($connection, $sql);
                            $row = mysqli_fetch_assoc($result);
                            $Paragraph = $row['Paragraph'];

                            echo $Paragraph;

                            mysqli_close($connection);
                            ?>
                        </p>

                        <!-- Getting Content from 'aboutuspage' table in 'lascomdb' and 'id=33'  -->
                        <p style="text-align: left; font-size:20px;">
                            <?php
                            //database connection
                            $connection = new mysqli("localhost", "root", "", "lascomdb");

                            // Check connection
                            if (!$connection) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            //Fetching text from "paragraph" table
                            $sql = "SELECT Paragraph FROM aboutuspage WHERE id = 33";
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