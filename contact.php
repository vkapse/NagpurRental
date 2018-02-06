<?php
require_once './mydbconnection.php';
$dbclass = new DbClass();

if (isset($_REQUEST['submit'])) {
    $fname = "";
    $email = "";
    $contact = "";
    $reason = "";
    $descrip = "";
    if (isset($_REQUEST['fname'])) {
        $fname = $_REQUEST['fname'];
    }
    if (isset($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    }
    if (isset($_REQUEST['contact'])) {
        $contact = $_REQUEST['contact'];
    }
    if (isset($_REQUEST['reason'])) {
        $reason = $_REQUEST['reason'];
    }

    if (isset($_REQUEST['descrip'])) {
        $descrip = $_REQUEST['descrip'];
    }
    if ($dbclass->insert_all($fname, $email, $contact, $reason, $descrip)) {
        ?>
        <script>window.location.href = "./index.php"</script>   
        <?php
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Nagpur Rental </title>
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
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="formstyle.js"</script>

        <!-- start-smoth-scrolling-->
        <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });



    function myFunction() {
        windows.location("index.php");

    }
        </script>
        <!--//end-smoth-scrolling-->
    </head>
    <body>
        <!--banner-->
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
                            
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-right">
                                    <li><a href="index.php" class="link-kumya"><span data-letters="Rental">Rental</span></a></li>
                                    <li><a href="about.php" class="link-kumya"><span data-letters="About">About</span></a></li>
                                </ul>	
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--//navigation-->
            </div>
        </div>
        <!--//banner-->
        
        <!-- Ad post form -->
        <script type="text/javascript">
            var specialKeys = new Array();
            specialKeys.push(8); //Backspace
            function IsNumeric(e) {
                var keyCode = e.which ? e.which : e.keyCode
                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                document.getElementById("error").style.display = ret ? "none" : "inline";
                return ret;
            }

            function lettersOnly()
            {
                var charCode = event.keyCode;

                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8 || charCode == 32)
                    return true;
                else
                    return false;
            }

        </script>        


    <center>      
        <h3 class="title">Post Your Advertisement</h3> <br><br>

        <form method="POST" name="rental_adpost" id="rental" action="contact.php">          

            <input type="text" class="alert-s alert-info-s" name="fname" placeholder="Your Name" pattern="[A-Za-z ]{1,50}" onkeypress="return lettersOnly(event)" required="required"> <br>                 
            <input type="email" class="alert-s alert-info-s " name="email"  placeholder= "Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required"> <br>
            <input type="text"class="alert-s alert-info-s" name="contact" placeholder= "Your contact no." onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" maxlength="10" required="required"/>
            <span id="error" style="color: black; display: none"></span>
            <select  name="reason" id="category" class="alert-s alert-info-s" required="required" > 
                <option value="">--select reason--</option> 

                <option value="I need to rent a Room">I need to rent a Room</option>
                <option value="I need to rent an Apartment">I need to rent an Apartment</option>
                <option value="I need to rent a House">I need to rent a House</option>
                <option value="I have a room to rent">I have a room to rent</option>
                <option value="I have an apartment to rent">I have an apartment to rent</option>
                <option value="I have a house to rent">I have a house to rent</option>
                <option value="I have a room to sublease">I have a room to sublease</option>
                <option value="I have an apartment to sublease">I have an apartment to sublease</option>
                <option value="I have a house to sublease">I have a house to sublease</option>


                <option value="I have a Apartment to sell">I have an Apartment to sell</option>
                <option value="I have a House to sell">I have a House to sell</option>
                <option value="I have plot to sell">I have plot to sell</option>
                <option value="I have property to sell">I have property to sell</option>
            </select><br>
            <input type="hidden" name="page" value="0">
            <input type="hidden" name="startLimit" value="">
            <textarea type="text" class="alert-s alert-info-s" name="descrip" placeholder= "Description" rows="5" required="required" ></textarea>                  
            <center><input type="submit" name="submit" value="Submit"id="lname" style=margin-left:0.1%;> <input type="submit" name="cancel" id="hide" value="Cancel" style=margin-left:1.5%; onclick="window.location = 'index.php'" ></center>
        </form>
        <!-- //Ad post form -->

        <br> <br> <br> <br> <br> <br>  
        <!--footer-->
        <center>                      
            <div class="footer">
                <div class="container">
                    <div class="col-md-4 footer-grids">
                    </div>
                    <div class="col-md-3 footer-grids" >
                        <h3>Contact Me</h3>
                        <p>Lakdipul Aychit Mandir<br>
                            Bus-stop, Apt No : 438<br> 
                            Mahal , Nagpur - 440032<br> 
                            Maharashtra , INDIA<br>
                            <span>               </span>
                        </p>
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