<!-- templatemo 367 shoes -->
<!-- 
Shoes Template 
http://www.templatemo.com/preview/templatemo_367_shoes 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<link rel="icon" type="image/png" href="images/favicon.png" /> 
<title>Global Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<?php session_start();?>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>

<body>


<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title">
    	  <h1><a href="indexuser.php">   </a></h1>
    	</div>
        <div id="header_right">
        	<p><a href="index.php"> Log Out</a></p>
        	<p>
            	Shopping Cart: <strong><?php $listac=$_SESSION['carrito']; $ide=sizeof($listac); echo $ide ;?> items</strong> ( <a href="shoppingcart.php">Show Cart</a> )
			</p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="indexuser.php" class="selected">Home</a></li>
                <li><a>Products</a>
                    <ul>
                        <li><a href="#submenu1">Applications</a></li>
                        <li><a href="#submenu2">Movies</a></li>
                        <li><a href="#submenu3">Musics</a></li>
                        <li><a href="#submenu4">Books</a></li>
                  </ul>
                </li>
                
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="templatemo_search">
            <form action="buscar.php" method="get">
              <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div> <!-- END of templatemo_menubar -->
    
   
           
<div id="templatemo_main">
    	<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Menu</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                    	<li class="first"><a href="modificarcli.php">Modify User</a></li>
                        <li><a href="registroformadepago.php">Add Credit Card</a></li>
                        <li><a href="#">Active Credit Card</a></li>
                        <li><a href="#">Delete Credit Card</a></li>
                        <li><a href="shoppingcart.php">Cart</a></li>
                        
                      
                        <li class="last"><a href="#">Delete User</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	 
                <div class="content"> 
                	<div class="bs_box">
                   
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	
                        <div class="cleaner"></div>
                    </div>
                    <div class="bs_box">
                    	
                     
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">
       	  <div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/avengers.jpg" alt="" />
                    <img src="images/slider/linkin.jpg" alt="" />
                    <img src="images/slider/instagram.jpg" alt="" />
                    <img src="images/slider/whatsapp.jpg" alt="" title="#htmlcaption" />
                </div>
            <div id="htmlcaption" class="nivo-html-caption">
                    
              </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        	</div>
            
            <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
          <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
			
            </script>
        	<h1>&nbsp;</h1>
        	<h1>&nbsp;</h1>
            <h1>WELCOME!</h1>

           
        	
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    
    <div id="templatemo_footer">
    	<p><a href="#">Home</a> | <a href="#">Products</a>| <a href="#">Contact Us</a>
		</p>

    	Copyright © 2015 Global Store<!-- Credit: www.templatemo.com --></div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>