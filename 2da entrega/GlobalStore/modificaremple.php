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
<title>Global Store - Register Employee</title>
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
    	  <h1><a href="index.html"></a></h1></div>
        <div id="header_right">
        	<p>&nbsp;</p>
            <p>&nbsp;</p>
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menubar">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="index.html">Home</a></li>
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
<h2>Modify Employee</h2>
<?php
include ("conexion.php");
session_start();
$user=$_POST['usuarioemple'];
//$user=$_SESSION['username2'];

$result0=pg_query($conexion,"select id_persona from PERSONA where usuario_persona='$user'");

$row0=pg_fetch_row($result0);

$_SESSION['id']=$row0[0];
/*
$result01=pg_query($conexion,"select FK_ROL from EMPLEADO where FK_PERSONA=$row0[0]");

$row01=pg_fetch_row($result01);

$_SESSION['idr']=$row01[0];*/

$result=pg_query($conexion,"select primer_nombre_persona,segundo_nombre_persona,primer_apellido_persona,segundo_apellido_persona,clave_persona from PERSONA where usuario_persona='$user'");

$row=pg_fetch_row($result);

$result1=pg_query($conexion,"select cuenta_correo from CORREO where FK_PERSONA=$row0[0]");

$row1=pg_fetch_row($result1);

$result2=pg_query($conexion,"select numero_telefono from TELEFONO where FK_PERSONA=$row0[0]");

$row2=pg_fetch_row($result2);

?>
<form method="post" id="adminForm" class="form-validate"action="modifyempleado.php">


			<div align="center">
		
  <table  class="adminForm user-details">
                    
					
					<td class="key" title="" >
						<label class="password" for="password_field">
							Password						</label>
					</td>
					<td>
						<input type="password" id="password_field" name="password" value="<?php echo $row[4]?>" size="30" class="inputbox" />
					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="password2" for="password2_field">
							Confirm Password						</label>
					</td>
					<td>
						<input type="password" id="password2_field" name="password2" value="<?php echo $row[4]?>" size="30" class="inputbox" />
					</td>
				</tr>
                <tr>
					<td class="key" title="" >
						<label class="email" for="email_field">
							E-Mail 						</label>
					</td>
					<td>
						<input type="text" id="email_field" name="email" size="30" value="<?php echo $row1[0]?>"  class="required" maxlength="100" /> 					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="title" for="title_field">
							ROL						</label>
					</td>
					<td>
						<select id="title" name="title" class="vm-chzn-select">
                        <option value="">-- Select --</option>
	<option value="Administrador del Sistema">System Administrator</option>
	<option value="Administrador de Contenidos">Content Manager</option>
    <option value="Revisor de Contenidos">Reviewer content</option>
</select>
					</td>
				</tr>
                <tr>
                <td class="key" title="" ><label for="username_field" class="username"> Office</label></td>
                <td>
                <?php include ("conexion.php");
				$result = pg_query($conexion , "select distinct nombre_cargo from CARGO" );
$result0 = pg_query($conexion,"select id_cargo from CARGO");
			?>
                	<select name="cargo" class="re" >
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
						<label class="first_name" for="first_name_field">
							First Name 						</label>
					</td>
					<td>
						<input type="text" id="first_name_field" name="first_name" size="30" value="<?php echo $row[0]?>"  class="required" maxlength="32" /> 					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="middle_name" for="middle_name_field">
							Middle Name 						</label>
					</td>
					<td>
						<input type="text" id="middle_name_field" name="middle_name" size="30" value="<?php echo $row[1]?>"  maxlength="32" /> 					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="last_name" for="last_name_field">
							Last Name 						</label>
					</td>
					<td>
						<input type="text" id="last_name_field" name="last_name" size="30" value="<?php echo $row[2]?>"  class="required" maxlength="32" /> 					</td>
				</tr>
                <tr>
					<td class="key" title="" >
						<label class="last_name" for="last_name_field">
							Second Last Name 						</label>
					</td>
					<td>
						<input type="text" id="last_name_field" name="second_last_name" size="30" value="<?php echo $row[3]?>"  class="required" maxlength="32" /> 					</td>
				</tr>
	    <tr>
      <td class="key" title="" >
      
		<label for="date">Date of Birth               </label> </td>
        <td>
                        <input name="date" type="date" required="required" id="date" max="1993-01-01" min="1980-01-01" /> </td>
					
					
	</tr>			
					
					<tr>
					<td class="key" title="" >
						<label class="title" for="title_field">
							Education						</label>
					</td>
					<td>
						<select  id="title" name="title_1"  required class="vm-chzn-select">
						<option value="">-- Select --</option>
                        <option value="Bachiller">Bachiller</option>
                        <option value="Tecnico">Tecnico</option>
                        <option value="Superior">Superior</option>
                        <option value="Licenciado">Licenciado</option>
						</select>					</td>
				</tr>
                <tr>
					<td class="key" title="" >
						<label class="title" for="title_field">
							Blood Group						</label>
					</td>
					<td>
						<select  id="title" name="title_2"  required class="vm-chzn-select">
						<option value="">-- Select --</option>
                        <option value="O-">O-</option>
                        <option value="O+">O+</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
						</select>					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="phone_1" for="phone_1_field">
							Phone						</label>
					</td>
					<td>
						<input name="phone_1" type="number" id="phone_1_field" max="1000000000000" min="0" value="<?php echo $row2[0]?>" size="30"  maxlength="32" /> 					</td>
				</tr>
				
	
	</table>
    </div>
            <p>&nbsp;</p>
<td align="center"> <p>&nbsp;
              </p>
              <p>
                <input name="submit" type="submit" id="submit"  value="Modify"  />
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                <input type="button" name="button" id="button" value="Cancel" /></a>              </p></td>
<p>
               
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