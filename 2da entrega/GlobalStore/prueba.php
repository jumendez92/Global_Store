<?php
function esImagen($name)
    {
                $imageSizeArray = getimagesize($name);
                $imageTypeArray = $imageSizeArray[2];
                return (bool)(in_array($imageTypeArray , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)));
    }

 if(esImagen($_FILES['name2']['tmp_name']))
{
	echo'es imagen';
	$rutaservidor="imagesA";
	$rutatmp=$_FILES['name2']['tmp_name'];
$nombreimagen=$_FILES['name2']['name'];
$rutadestino=$rutaservidor."/".$nombreimagen;
move_uploaded_file($rutatmp,$rutadestino);
}
else
{
     echo'no es imagen';
}
?>

