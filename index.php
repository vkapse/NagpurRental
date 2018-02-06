
<!DOCTYPE html>
<html>
    <head>
        <title>Nagpur Rental</title>
        <!--mobile apps-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Nagpur Rental property Ad post site, Room,apartment,house,flat,plot,property for rent, Nagpur rental website"/>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--mobile apps-->
        <!--Custom Theme files -->
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="css/prettySticky.css" type="text/css"  media="all">
        <link rel="stylesheet" href="css/lightbox.css"  media="all">
        <!-- //Custom Theme files -->
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script> 
        <!-- //js -->
        <!-- start-smoth-scrolling-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();

                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!--//end-smoth-scrolling-->
    </head>
    <body>
        <!--banner-->

        <script src="js/responsiveslides.min.js"></script>
        <div  id="home" class="banner about-banner">
            <div class="banner-info">

                <!--navigation-->
                <div class="top-nav">
                    <nav>
                        <div class="container">
                            <div class="navbar-header logo">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-right">
                                    <li><a href="index.php" class="link-kumya active "><span data-letters="Rental">Rental</span></a></li>
                                    <li><a href="about.php" class="link-kumya "><span data-letters="About">About</span></a></li>	
                                </ul>	
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </nav>
                </div>	
            </div>
            <div class="more">
                <strong><a href="contact.php" class="button-pipaluk button--inverted" id="show_rental_ad" >Click Here to Post Your Advertisement</a></strong>
            </div>
            <br>
        </div> <br> <br>  
        <!--//banner-->

        <br><br> 
        <!--Database connection-->
        <?php
        require_once './mydbconnection.php';
        $dbclass = new DbClass();

        if (isset($_REQUEST['startLimit'])) {
            $stLimit = $_REQUEST['startLimit'];
        } else {
            $stLimit = 1;
        }
        $reason1 = "";

        $fetch = $dbclass->pagination($stLimit);
        $totalCount = $dbclass->paginationAll() . '<br>';
        $q = ($totalCount) / 25;
        (ceil($q));
        $cnt = $stLimit;
        $i = 1;
        ?>

        <?php
        while ($query2 = mysql_fetch_array($fetch)) {
            if ($cnt <= ($stLimit + 24)) {
                ?>
            <center>
                <div> 
                    <table border="1" style="width: 80%; table-layout: fixed;border-color: whitesmoke;" >
                        <tr>
                            <td style="width: 60%;text-align:center" ><b><font color='#745EC5' size='3'>Date </font></b></td>                       
                            <td>&nbsp;&nbsp;<?= $query2['date'] ?></td>
                        </tr>
                        <tr>
                            <td style="width: 30%;text-align:center"><b><font color='#745EC5' size='3'>Category</font></b></td>
                            <td>&nbsp;&nbsp;<?= $query2['reason'] ?></td>
                        </tr>
                        <tr>
                            <td style="width: 30%;text-align:center"><b><font color='#745EC5' size='3'>Name</font></b></td>
                            <td>&nbsp;&nbsp;<?= $query2['fname'] ?></td>
                        </tr>
                        <tr>
                            <td style="width: 30%;text-align:center"><b><font color='#745EC5' size='3'>Email</font></b></td>                            
                            <td style="height: auto;overflow-wrap: break-word" >&nbsp;&nbsp;<?= $query2['email'] ?></td>
                        </tr>
                        <tr>
                            <td style="width: 30%;text-align:center"><b><font color='#745EC5' size='3'>Contact </font></b></td>                            
                            <td style="height: auto;overflow-wrap: break-word">&nbsp;&nbsp;<?= $query2['contact'] ?></td>
                        </tr>

                        <tr>
                            <td style="width: 30%;text-align:center"><b><font color='#745EC5' size='3' >Details </font></b></td>
                            <td style="height: auto;overflow-wrap: break-word">&nbsp;&nbsp;&nbsp;<?= $query2['descrip'] ?></td>
                        </tr>

                    </table>
                </div>
            </center>
            <hr>
            <br>

            <?php
            $cnt++;
        }
    }
    ?>

    <style>
        .page{
            color: #fff;
            background: #745EC5;
            border-color: #5A37DC;
            border-radius: 20px;    
            padding: 4px 20px;
        }
        .page:hover{
            color: #fff;
            background: #7800F0;
            font-size:1.1em;
        }
    </style>

    <center>
        <?php
        $i = 1;
        $next;
        $back;
        $st = $stLimit;
        if (($stLimit > 25)) {
            ?>
            <a href="index.php?page=<?= $i++ ?>&$stLimit=Query&startLimit=<?= $st - 25 ?>" class="page" style="margin-left:1%"> <?= 'Previous' ?></a> 

            <?php
        }
        
        ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
        if (($stLimit <= $totalCount - 25)) {
            ?>
            <a href="index.php?page=<?= $i++; ?>&startLimit=<?= $st + 25 ?>&$stLimit=Query" class="page" style="margin-left:6%"> <?= '&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;' ?></a><?php
        }
        $i++;
        ?>
        <!--//Database connection-->
    </center>
    <br> <br> <br> <br> <br> <br> <br> <br>
    <!--footer--> 
    <center>
        <div class="footer">
            <div class="container">
                <div class="col-md-4 footer-grids"> </div>
                <div class="col-md-3 footer-grids" >
                    <h3>Contact Me</h3>
                    <p>Lakdipul Aychit Mandir<br>
                        Bus-stop, Apt No : 438<br> 
                        Mahal , Nagpur - 440032<br> 
                        Maharashtra , INDIA<br>
                        <span>     </span></p>                      
                </div>            			
                <div class="clearfix"> </div>
                <div class="footer-copy">
                    <p>© 2017 Rental. All rights reserved | Design by <a href="http://vktechvalley.com/?utm_source=GooglePlaces&utm_medium=GoogleMaps&utm_campaign=VKTechValley"> VKTechValley Pvt. Ltd. ,</a>  <a href="http://www.axiomtechguru.com/"> Axiom Techguru Pvt. Ltd.</a></p>
                </div>
            </div>
        </div>

        <!--//footer-->
        <script src="js/prettySticky.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>