<?php
function getmodule($module)
{
  require 'hacktheme/'.$module.'.php';
}

session_start();
if (!isset( $_SESSION['teamid'])) {
    header('location:../theme.html');
}
include 'config.php';
$counter = mysql_query("SELECT counter FROM counter");
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>HACKATHON 5.0</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../images/Red.png" />
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
        .card {
            min-height: 800px;
        }
        .btn {
            border-radius: 25px;
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
                         <h1 class="mb-0"><a href="logout.php" class="text-white h2 mb-0"><img src="../images/AltRed.png" style="width: auto; height: 100%; float:left;"> </a></h1>
                    </div>
                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">

                                <li class="cta"><a href="logout.php">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                </div>
            </div>

        </header>
        <div class="site-section site-hero inner">
            <div class="container">

                <div class="row align-items-center ">
                    <div class="col">
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br><br>
                        <h1 style="color:#eb3935;font-weight:100;font-size:50px; text-align: center; " data-aos="fade-up" data-aos-delay="100">Choose Your Theme</h1>
                        <h2 style="color:white;font-weight:100;font-size:30px; text-align: center;" data-aos="fade-up" data-aos-delay="200">Scroll Down &#8595;&#8595;</h2>

                        <br><br>










                    </div>

                </div>


            </div> <!-- /.container -->


        </div>
        <div class="site-section">
            <div class="container">

                <div class="row align-items-center ">
                    <div class="col">

                        <!-- Jumbotron Header-->

                        <h2 data-aos="fade-up" data-aos-delay="100"><span class="text-primary">CATEGORY A</span></h2>
                        <p class="lead" style="color:white;font-weight:100;font-size:20px;" data-aos="fade-up" data-aos-delay="200">Those candidates who are here to make some real life project and want to change the course of human history, refer to this group. Considerable bonus points will be awarded for choosing Category A.</p>

                        <br>
                        <!-- Page Features -->
                        <div class="row text-center " data-aos="fade-up" data-aos-delay="300">

                            <div class="col-lg-3 col-md-12 mb-4">
                                <div class="card">
                                    <!--<img class="card-img-top" src="http://placehold.it/500x325" alt="">-->
                                    <div class="card-body">
                                        <br>
                                        <h4 class="card-title" style="color:black;">Challenges in Agriculture Sector</h4>


                                        <p class="card-text" style="color:black;">Agriculture sector is the most important sector in Indian economy. But the sector faces a lot of challenges like natural calamities, irrigation problems, very less amount paid to the farmers and huge debt. Do you think that you can design an idea which can positively affect this social problem?</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining:<span style="color:red">
                                                <?php echo mysql_result($counter, 0);?>
                                            </span></h5>
                                        <?php 
                    if(mysql_result($counter,0)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=a1' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">

                                    <div class="card-body">
                                        <br>
                                        <h4 class="card-title" style="color:black;">Indian Combat and Defence</h4>
                                        <br>

                                        <p class="card-text" style="color:black;">Indian army is considered as the third largest army in this world and our expenditure on defense has been increasing every year. Whether its internal enemy or external, a solution is required. We have come to a point where we consider weapons as the final solution. But does it provide an answer to every problem?</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining:<span style="color:red"><?php echo mysql_result($counter, 1);?></span>
                                        </h5>
                                        <?php 
                    if(mysql_result($counter,1)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=a2' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <h4 class="card-title" style="color:black;">Cyber Bullying</h4>
                                        <p class="card-text" style="color:black;">Social media has become the most important part of our lives nowadays. But with very trend comes its side-effects. With the advantage that no one can see you face to face; the cyberspace has become the place where all kinds of hatred and bullying is done. A large number of youngsters become a victim of cyber bullying every day, is there any solution for it?</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining: <span style="color:red"><?php echo mysql_result($counter, 2);?></span>

                                        </h5>
                                        <?php 
                    if(mysql_result($counter,2)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=a3' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">

                                    <div class="card-body">
                                        <br>
                                        <h4 class="card-title" style="color:black;">Food & Water conservation</h4>
                                        <p class="card-text" style="color:black;">Food and water are the most important amenities required by us as humans. We can see a large amount of food being thrown away after parties. We can see people wasting water by not turning off the tap. In today’s world, not everyone can afford these amenities and their judicial should be of utmost importance. Do you think your idea can bring out a solution to the issue?</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;">Remaining: <span style="color:red"><?php echo mysql_result($counter, 3);?></span>

                                        </h5>

                                        <?php 
                    if(mysql_result($counter,3)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=a4' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4 ">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <h4 class="card-title" style="color:black;">Vigilantism and spread of fake news</h4>
                                        <p class="card-text" style="color:black;">Whether it’s Naxals in Chhattisgarh or stone pelters in Kashmir, the biggest weapon they use to induce fear is FAKE NEWS. Both the vigilantism and fake news have moved hand in hand for a long time. There needs to be a line between good journalism and publishing hoax for money (which is the new trend). It’s high time to stand against fake news as we have stood against vigilantism, before it’s too late.</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining: <span style="color:red"><?php echo mysql_result($counter, 4);?></span>

                                        </h5>
                                        <?php 
                    if(mysql_result($counter,4)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=a5' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->










                    </div>

                </div>


            </div> <!-- /.container -->

        </div>

        <div class="site-section">
            <div class="container">

                <div class="row align-items-center ">
                    <div class="col">

                        <!-- Jumbotron Header-->

                        <h2 data-aos="fade-up" data-aos-delay="100"><span class="text-primary">CATEGORY B</span></h2>
                        <p class="lead" style="color:white;font-weight:100;font-size:20px;" data-aos="fade-up" data-aos-delay="200">Those candidates who are here to make innovations refer to this group.</p>

                        <br>

                        <!-- Page Features -->
                        <div class="row text-center" data-aos="fade-up" data-aos-delay="300">

                            <div class="col-lg-3 col-md-12 mb-4">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <h4 class="card-title" style="color:black;">Artificial Intelligence</h4>
                                        <p class="card-text" style="color:black;"> They had some pretty interesting thoughts about the world and humanity. In the field of computer science, artificial intelligence (AI), sometimes called machine intelligence, is intelligence demonstrated by machines, in contrast to the natural intelligence displayed by humans and other animals. AI is the hot trend in the technical field but should we be threatened?</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining:<span style="color:red"> <?php echo mysql_result($counter, 5);?></span>

                                        </h5>
                                        <?php 
                    if(mysql_result($counter,5)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=b1' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <h4 class="card-title" style="color:black;">Blockchain</h4>
                                        <p class="card-text" style="color:black;">Bitcoin almost touched the value of $20,000 in December 2017. Bitcoin and every other cryptocurrency works on blockchain technology. A blockchain, originally block chain, is a growing list of records, called blocks, which are linked using cryptography. Each block contains a cryptographic hash of the previous block, a timestamp, and transaction data (generally represented as a merkle tree root hash).</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining:<span style="color:red"><?php echo mysql_result($counter, 6);?></span>

                                        </h5>
                                        <?php 
                    if(mysql_result($counter,6)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=b2' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <h4 class="card-title" style="color:black;">Industrial IOT</h4>
                                        <p class="card-text" style="color:black;">It is said that the future of IoT has the potential to be limitless. The Industrial Internet of Things originally described the IoT(Internet of Things) as it is used across several industries such as manufacturing, logistics, oil and gas, transportation, energy/utilities, mining and metals, aviation and other industrial sectors and in use cases which are typical to these industries.</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining:<span style="color:red"> <?php echo mysql_result($counter, 7);?></span>
                                        </h5>
                                        <?php 
                    if(mysql_result($counter,7)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=b3' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <h4 class="card-title" style="color:black;">Cloud</h4>
                                        <p class="card-text" style="color:black;">Cloud market is projected to be of the highest value in the coming decade. Simply put, cloud computing is the delivery of computing services—servers, storage, databases, networking, software, analytics, intelligence and more—over the Internet (“the cloud”) to offer faster innovation, flexible resources and economies of scale. .</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining:<span style="color:red"><?php echo mysql_result($counter, 8);?></span>

                                        </h5>
                                        <?php 
                    if(mysql_result($counter,8)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=b4' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>



                            <!-- Page Features -->

                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <h4 class="card-title" style="color:black;">Data Science</h4><br>
                                        <p class="card-text" style="color:black;">Data science has been giving quite a lot of amazing job opportunities recently. With the advent of AI, cloud and big data; this particular branch has advanced a lot too. Data science is a multidisciplinary blend of data inference, algorithm development, and technology in order to solve analytically complex problems.</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining:<span style="color:red"><?php echo mysql_result($counter, 9);?></span>
                                        </h5>
                                        <?php 
                    if(mysql_result($counter,9)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=b5' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <h4 class="card-title" style="color:black;">Choose Your Own</h4>
                                        <p class="card-text" style="color:black;">If you did not find any of the given options exciting, then don’t worry. You have the chance of working on a project of your choice. So, let’s code!!!!!</p>
                                    </div>
                                    <div class="card-footer">
                                        <h5 style="color:black;"> Remaining:<span style="color:red"><?php echo mysql_result($counter, 10);?></span>
                                        </h5>
                                        <?php 
                    if(mysql_result($counter,10)==0) 
                    {
                        echo "<a class='btn btn-disabled'>FULL!</a>";
                    }
                    else
                    {                        
                        echo "<a href='select.php?id=b6' class='btn btn-primary'>Select theme</a>";
                    }
                ?>
                                    </div>
                                </div>
                            </div>


                            <!-- /.row -->






                        </div>
                        <!-- /.row -->










                    </div>

                </div>


            </div> <!-- /.container -->

        </div>
              <footer class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h2 class="footer-heading text-uppercase mb-4">About Event</h2>
                     <p style="font-size: small;">Hackathon is a nationwide coding event organized every year by UPES-CSI student chapter. Participants from different states and communities come together to create a solution for the problems existing in our society. Every year thousands of budding codders register for this event, but only a few make it to the next round. Participants have the opportunity to interact and learn directly from the industry people.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <h2 class="footer-heading text-uppercase mb-4">Quick Links</h2>
                        <ul class="list-unstyled">
                              <li><a href="logout.php">Logout</a></li>
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
                                <span class="text-primary">HACKATHON 5.0 </span>| Created by <a href="https://upescsi.in/"><span class="text-primary">UPES-CSI</span></a>

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
