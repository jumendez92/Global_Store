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
<title>Global Store - Register Application</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

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

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="templatemo_header">
    	<div id="site_title">
    	  <h1><a href="index.php"></a></h1></div>
        <div id="header_right">
        	<p>&nbsp;</p>
            <p>&nbsp;</p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">Home</a></li>
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


        	<input type="hidden" name="task" value="user.login" />
                <input type="hidden" name="option" value="com_users" />
        <input type="hidden" name="return" value="L2ZyZWVfMjAxM192aXJ0dWVtYXJ0XzJfMF8yMl9hL2luZGV4LnBocC9vbmxpbmUtc3RvcmUvdXNlci1lZGl0LWFkZHJlc3MvZWRpdGFkZHJlc3M=" />
        <input type="hidden" name="9ce09d49c98474ec96ad0d54ade14f82" value="1" />    </form>


<br />
<h2>Register Application </h2>
<form method="post" id="adminForm" class="form-validate"action="registrarA.php" enctype="multipart/form-data">


			<div align="center">
		
  <table  class="adminForm user-details">
                    		<tr>
					<td class="key" title="" >Application Name*</td>
					<td>
						<input name="applicationname" type="text" required="required" id="username_field" value="" size="30"  maxlength="25" /> 					</td>
				</tr>
					
                <tr>
					<td class="key" title="" >
						<label class="email" for="email_field">
							Developer Company or Person Name*						</label>
					</td>
					<td>
                <?php include ("conexion.php");
				$result = pg_query($conexion , "select distinct nombre_empresa_persona from EMPRESA_PERSONA" );
$result0 = pg_query($conexion,"select id_empresa_persona from EMPRESA_PERSONA");
			?>
                	<select name="company" class="re" >
                	  <!--<option value="null">Todas las Ciudades</option>-->
                        <?php
						while ($fila2= pg_fetch_row($result0)){
                			while ($fila = pg_fetch_row($result)) { 
                    	?>
                        <option value="<?php echo $fila2[0];?>"><?php echo $fila[0];?></option>
                    	<?php
							}
                		}
                		?>
        			</select>
                    </td>
				</tr>
					<tr>
       <td class="key" title="" >
      
		<label for="date">Description*               </label> </td>
        <td>
                          <textarea name="textarea" cols="45" rows="5" required="required" id="textarea"></textarea>
                        </td>
					
					
	</tr>
					<tr>
					<td class="key" title="" >
						<label class="middle_name" for="middle_name_field">
							Size*						</label>
					</td>
					<td>
						<input name="size" type="text" required="required" id="middle_name_field" value="" size="30"  maxlength="32" /> 					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="last_name" for="last_name_field">
							Current Version *						</label>
					</td>
					<td>
						<input name="current_version" type="text" required="required"  class="required" id="last_name_field" value="" size="30" maxlength="32" /> 					</td>
				</tr>
                <tr>
					<td class="key" title="" >
						<label class="last_name" for="last_name_field">
							Minimum Operating System Version *						</label>
					</td>
					<td>
						
                <?php include ("conexion.php");
				$result = pg_query($conexion , "select  nombre_sistema from SISTEMA" );
$result0 = pg_query($conexion,"select id_sistema from SISTEMA");
$result1= pg_query($conexion,"select id_version,nombre_version,fk_sistema from VERSION ");


			?>
                	<select name="version" class="re" >
                	  <!--<option value="null">Todas las Ciudades</option>-->
                        <?php
						while ($fila2= pg_fetch_row($result0)){
                			while ($fila = pg_fetch_row($result)and$fila3= pg_fetch_row($result1)) { 
						
								if ($fila3[3]=$fila2[0]){
                    	?>
                        <option value="<?php echo $fila3[1];?>"><?php echo $fila[0]." Version:".$fila3[1];?></option>
                    	<?php
								}
							}
							}
                		
                		?>
        			</select>
                  				</td> 
				</tr>		
                 <tr>
      <td class="key" title="" >
      
		<label for="date">Last Update*               </label> </td>
        <td>
                        <input name="date" type="date" required="required" id="date" max="2015-01-01" min="2000-01-01" /> </td>
					
					
	</tr>		
					<tr>
					<td class="key" title="" >
						<label class="title" for="title_field">
							Rate Content*						</label>
					</td>
					<td>
						<select  id="title" name="title"  required class="vm-chzn-select">
						<option value="">-- Select --</option>
                        <option value="Para Todos">For All</option>
                        <option value="Para Niños">For Children</option>
                        <option value="Para Adultos">Adult</option>
                        <option value="Para Adolescentes">For Teens</option>
						</select>					</td>
				</tr>
                <tr>
					<td class="key" title="" >
						<label class="email" for="email_field">
							Cost *						</label>
					</td>
					<td>
						<input name="cost" type="number" required="required"  class="required" id="company_field" max="99999999999999" min="0" value="" /> 					</td>
				</tr>
				<tr>
					<td class="key" title="" ><label for="name_field" class="name">Image*</label></td>
					<td>
                      <input name="imagen" type="file" required="required" id="fileField"  />
                     </td>
				      
					</tr>
                    <tr>
                <td class="key" title="" ><label for="name_field" class="name">Url Video*</label></td>
					<td>
              <input name="url" type="url" required="required" id="url" />
            </td>
					
	</tr>
			
	
	</table>
    </div>
           
<td align="center"> <p>&nbsp;
              </p>
              <p>
                <input name="submit" type="submit" id="submit"  value="Next"  />
               <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                <input type="button" name="button" id="button" value="Cancel" /></a>
              </p></td>
<p>
              <p>
              <label>*Field Required</label>
              </p>
        </div> 
    	</div>
   <!-- END of templatemo_main -->
    
<div id="templatemo_footer">
    	<p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">Checkout</a> | <a href="#">Contact Us</a>
		</p>

		Copyright © 2015 <a href="#">Global Store</a> <!-- Credit: www.templatemo.com -->
    	
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->

</body>
</html>