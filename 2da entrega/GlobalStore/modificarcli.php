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
<title>Global Store - Modificar</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css" />
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.button.custom.min.js" type="text/javascript"></script>
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
<h2>Modify Client</h2>
<?php
include ("conexion.php");
session_start();
$user=$_SESSION['username2'];

$result0=pg_query($conexion,"select id_persona from PERSONA where usuario_persona='$user'");

$row0=pg_fetch_row($result0);

$_SESSION['id']=$row0[0];

$result01=pg_query($conexion,"select FK_LUGAR from CLIENTE where FK_PERSONA=$row0[0]");

$row01=pg_fetch_row($result01);

$_SESSION['idl']=$row01[0];

$result=pg_query($conexion,"select primer_nombre_persona,segundo_nombre_persona,primer_apellido_persona,segundo_apellido_persona,clave_persona from PERSONA where usuario_persona='$user'");

$result1=pg_query($conexion,"select cuenta_correo from CORREO where FK_PERSONA=$row0[0]");

$row1=pg_fetch_row($result1);

$result2=pg_query($conexion,"select numero_telefono from TELEFONO where FK_PERSONA=$row0[0]");

$row2=pg_fetch_row($result2);

$result3=pg_query($conexion,"select nombre_lugar,FK_LUGAR from LUGAR where id_lugar=$row01[0]");

$row3=pg_fetch_row($result3);

$result4=pg_query($conexion,"select nombre_lugar,FK_LUGAR from LUGAR where id_lugar=$row3[1]");

$row4=pg_fetch_row($result4);

$result5=pg_query($conexion,"select nombre_lugar,FK_LUGAR from LUGAR where id_lugar=$row4[1]");

$row5=pg_fetch_row($result5);

$result6=pg_query($conexion,"select nombre_lugar,FK_LUGAR from LUGAR where id_lugar=$row5[1]");

$row6=pg_fetch_row($result6);

$result7=pg_query($conexion,"select nombre_lugar,FK_LUGAR from LUGAR where id_lugar=$row6[1]");

$row7=pg_fetch_row($result7);

$result8=pg_query($conexion,"select nombre_lugar,FK_LUGAR from LUGAR where id_lugar=$row7[1]");

$row8=pg_fetch_row($result8);

$row=pg_fetch_row($result);


?>
<form method="post" name="userForm"  class="form-validate" action="modificarcliente.php">


			<div align="center">
		
              
              <table align="center"  >

					</tr>
					
				</tr>
					<tr>
					<td class="key" title="" ><label for="password_field2" class="password"> Password</label></td>
					<td>
						<input name="password" type="password" required="required" class="inputbox" id="password_field" value="<?php echo $row[4]?>" size="30" />
					</td>
				</tr>
					<tr>
					<td class="key" title="" ><label for="password2_field2" class="password2"> Confirm Password</label></td>
					<td>
						<input name="password2" type="password" required="required" class="inputbox" id="password2_field" value="<?php echo $row[4]?>" size="30" />
					</td>
				</tr>
               
                <td class="key" title="" >
						<label class="email" for="email_field">
							E-Mail 						</label>
				  </td>
					<td>
						<input name="email" type="text" required="required"  class="required" id="email_field" value="<?php echo $row1[0]?>" size="30" maxlength="100" /> 					</td>
				</tr>
    <tr>
      <td class="key" title="" >
      
		<label for="date">Date of Birth               </label> </td>
        <td>
                        <input name="date" type="date" required="required" id="date" max="2014-01-01" min="1980-01-01" /> </td>
					
					
				</tr>
					<tr>
					<td class="key" title="" ><label for="estadocivil_field2" class="estadocivil"> Marital Status</label></td>
					<td>
						<select name="title" required="required" class="vm-chzn-select" id="title">
    <option value="">-Select-</option>
	<option value="Soltero">Single</option>
	<option value="Casado">Married</option>
    <option value="Divorciado">Divorced</option>
    <option value="Viudo">Widower</option>
</select>
					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="first_name" for="first_name_field">
							First Name 						</label>
					</td>
					<td>
						<input name="first_name" type="text" required="required"  class="required" id="first_name_field" value="<?php echo $row[0]?>" size="30" maxlength="32" /> 					</td>
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
						<input name="last_name" type="text" required="required"  class="required" id="last_name_field" value="<?php echo $row[2]?>" size="30" maxlength="32" /> 					</td>
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
						<label class="address_1" for="address_1_field">
							Urb 						</label>
					</td>
					<td>
						<input name="address_1" type="text" required="required"  class="required" id="address_1_field" value="<?php echo $row6[0]?>" size="30" maxlength="64" /> 					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="address_2" for="address_2_field">
					  Street						</label>
					</td>
					<td>
						<input name="address_2" type="text" required="required" id="address_2_field" value="<?php echo $row5[0]?>" size="30"  maxlength="64" /> 					</td>
				</tr>
                <tr>
					<td class="key" title="" >
						<label class="address_3" for="address_2_field">
							Apt 						</label>
					</td>
					<td>
					  <input name="address_3" type="text" required="required" id="address_2_field" value="<?php echo $row3[0]?>" size="30"  maxlength="64" /> 					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="zip" for="zip_field">
							Zip / Postal Code 						</label>
					</td>
					<td>
						<input name="zip" type="text" required="required"  class="required" id="zip_field" value="<?php echo $row4[0]?>" size="30" maxlength="32" /> 					</td>
				</tr>
                <tr>
					<td class="key" title="" >
						<label class="city" for="city_field">
							State / Province / Region 						</label>
					</td>
					<td>
						<input name="state" type="text" required="required"  class="required" id="city_field" value="<?php echo $row8[0]?>" size="30" maxlength="32" /> 					</td>
				</tr>
					<tr>
					<tr>
					<td class="key" title="" >
						<label class="city" for="city_field">
							City 						</label>
					</td>
					<td>
						<input name="city" type="text" required="required"  class="required" id="city_field" value="<?php echo $row7[0]?>" size="30" maxlength="32" /> 					</td>
				</tr>
					<tr>
					<td class="key" title="" >
						<label class="virtuemart_country_id" for="virtuemart_country_id_field">
							Country 						</label>
					</td>
					<td><select name="pais2" required="required" class="vm-chzn-select required" id="virtuemart_country_id">
	<option value="" selected="selected">-- Select --</option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="American Samoa">American Samoa</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antarctica">Antarctica</option>
	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Bouvet Island">Bouvet Island</option>
	<option value="Brazil">Brazil</option>
	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
	<option value="Brunei Darussalam">Brunei Darussalam</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina Faso">Burkina Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Canary Islands">Canary Islands</option>
	<option value="Cape Verde">Cape Verde</option>
	<option value="Cayman Islands">Cayman Islands</option>
	<option value="Central African Republic">Central African Republic</option>
	<option value="Chad">Chad</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Christmas Island">Christmas Island</option>
	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
	<option value="Colombia">Colombia</option>
	<option value="Comoros">Comoros</option>
	<option value="Congo">Congo</option>
	<option value="Cook Islands">Cook Islands</option>
	<option value="Costa Rica">Costa Rica</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech Republic">Czech Republic</option>
	<option value="C&ocirc;te d'Ivoire">C&ocirc;te d'Ivoire</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican Republic">Dominican Republic</option>
	<option value="East Timor">East Timor</option>
	<option value="East Timor">East Timor</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El Salvador">El Salvador</option>
	<option value="Equatorial Guinea">Equatorial Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
	<option value="Faroe Islands">Faroe Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French Guiana">French Guiana</option>
	<option value="French Polynesia">French Polynesia</option>
	<option value="French Southern Territories">French Southern Territories</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guadeloupe">Guadeloupe</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guinea">Guinea</option>
	<option value="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
	<option value="Honduras">Honduras</option>
	<option value="Hong Kong">Hong Kong</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jersey">Jersey</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kiribati">Kiribati</option>
	<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
	<option value="Korea, Republic of">Korea, Republic of</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Lesotho">Lesotho</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macau">Macau</option>
	<option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Marshall Islands">Marshall Islands</option>
	<option value="Martinique">Martinique</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mayotte">Mayotte</option>
	<option value="Mexico">Mexico</option>
	<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
	<option value="Moldova, Republic of">Moldova, Republic of</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nauru">Nauru</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="Netherlands Antilles">Netherlands Antilles</option>
	<option value="New Caledonia">New Caledonia</option>
	<option value="New Zealand">New Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Niue">Niue</option>
	<option value="Norfolk Island">Norfolk Island</option>
	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palau">Palau</option>
	<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
	<option value="Panama">Panama</option>
	<option value="Papua New Guinea">Papua New Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Pitcairn">Pitcairn</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto Rico">Puerto Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Romania">Romania</option>
	<option value="Russian Federation">Russian Federation</option>
	<option value="Rwanda">Rwanda</option>
	<option value="R&eacute;union">R&eacute;union</option>
	<option value="Saint Helena">Saint Helena</option>
	<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
	<option value="Saint Lucia">Saint Lucia</option>
	<option value="Saint Martin (French part)">Saint Martin (French part)</option>
	<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
	<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
	<option value="Samoa">Samoa</option>
	<option value="San Marino">San Marino</option>
	<option value="Sao Tome And Principe">Sao Tome And Principe</option>
	<option value="Saudi Arabia">Saudi Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Serbia">Serbia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Sierra Leone">Sierra Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Solomon Islands">Solomon Islands</option>
	<option value="Somalia">Somalia</option>
	<option value="South Afric">South Africa</option>
	<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
	<option value="Spain">Spain</option>
	<option value="Sri Lanka">Sri Lanka</option>
	<option value="St. Barthelemy">St. Barthelemy</option>
	<option value="St. Eustatius">St. Eustatius</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tajikistan">Tajikistan</option>
	<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
	<option value="Thailand">Thailand</option>
	<option value="The Democratic Republic of Congo">The Democratic Republic of Congo</option>
	<option value="Togo">Togo</option>
	<option value="Tokelau">Tokelau</option>
	<option value="Tonga">Tonga</option>
	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turkmenistan">Turkmenistan</option>
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
	<option value="Tuvalu">Tuvalu</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United Arab Emirates">United Arab Emirates</option>
	<option value="United Kingdom">United Kingdom</option>
	<option value="United States">United States</option>
	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vanuatu">Vanuatu</option>
	<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Viet Nam">Viet Nam</option>
	<option value="Virgin Islands, British">Virgin Islands, British</option>
	<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
	<option value="Wallis and Futuna">Wallis and Futuna</option>
	<option value="Western Sahara">Western Sahara</option>
	<option value="Yemen">Yemen</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>
</select></td>
				</tr>
					
					<tr>
					<td class="key" title="" ><label for="phone_1_field2" class="phone_1"> Phone</label></td>
					<td>
						<input name="phone_1" type="number" required="required" id="phone_1_field" max="10000000000" min="00000000000" value="<?php echo $row2[0]?>" size="30"  maxlength="32" /></td>
				</tr>

	
	</table>
            <td align="center"> <p>&nbsp;
              </p>
              <p>
                <input name="submit" type="submit" id="submit"  value="Modify"  />
              <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                <input type="button" name="button" id="button" value="Cancel" /></a>
              </p></td>
              <p>
              
</div> 
    	</div>
   <!-- END of templatemo_main -->
    
<div id="templatemo_footer">
    	<p><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">Checkout</a> | <a href="#">Contact Us</a>
		</p>

		Copyright © 2015 Global Store <!-- Credit: www.templatemo.com -->
    	
</div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->
</div> <!-- END of templatemo_body_wrapper -->
<script type="text/javascript">
$(function() {
	$( "#Button1" ).button(); 
});
</script>
</body>
</html>