<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hackathon 5.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        table,
        th,
        td {
            border: 1px solid white;
            font-size: 25px;

        }

    </style>
</head>

<body>
    <div class="site-wrap">
        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar py-3" role="banner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-11 col-xl-2">
                        <h1 class="mb-0"><a href="../index.html" class="text-white h2 mb-0">UPES<span class="text-primary">-CSI</span> </a></h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../about.html">About</a></li>
                                <li><a href="../tobe.html">Speakers</a></li>
                                <li><a href="../tobe.html">Schedule</a></li>
                         

                            </ul>
                        </nav>
                    </div>
                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                </div>
            </div>

        </header>
        <div class="site-section site-hero inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 style="color:#eb3935;font-weight:100;font-size:50px; text-align: center; " data-aos="fade-up" data-aos-delay="100">Teams and Selected Theme &#8595;&#8595;</h1>
                        
                        <br>
                        <br>
                          <div class="row text-center" data-aos="fade-up" data-aos-delay="200">



                            <table style="width:100%; border-color: antiquewhite;">
                                <tr>
                                    <th style="color:#eb3935;">TEAM ID</th>
                                    <th style="color:#eb3935;">THEME</th>

                                </tr>

                                <?php
                include 'config.php';
                             $que = mysql_query("SELECT * FROM teamdetails WHERE `theme` IS NOT NULL");
                  while ($row = mysql_fetch_array($que)) {
                     echo "
  <tr>
    <td >".$row['teamid']."</td>
    <td>".$row['theme']."</td></tr>";  }
                ?>



                            </table>





                        </div>
                   

                    </div>
                </div>
            </div>
        </div>
    
        <footer class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h2 class="footer-heading text-uppercase mb-4">About Event</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aliquid quibusdam fugit architecto.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <h2 class="footer-heading text-uppercase mb-4">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="../about.html">About</a></li>
                            <li><a href="../tobe.html">Speakers</a></li>
                            <li><a href="../tobe.html">Schedule</a></li>
                        
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h2 class="footer-heading text-uppercase mb-4">Connect with Us</h2>
                        <p>
                            <a href="https://m.facebook.com/upescsi/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="https://twitter.com/upescsi" class="p-2"><span class="icon-twitter"></span></a>
                            <a href="https://www.youtube.com/user/TheYugmaK" class="p-2"><span class="icon-youtube"></span></a>
                            <a href="https://www.instagram.com/upescsi/" class="p-2"><span class="icon-instagram"></span></a>

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="border-top pt-5">
                            <p>
                                <span class="text-primary">HACKATHON 5.0 </span>| created by <a href="https://upescsi.in/"><span class="text-primary">UPES-CSI</span></a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/bootstrap-datepicker.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/main.js"></script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
</body>

</html>
