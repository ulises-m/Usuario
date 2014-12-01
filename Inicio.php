<?php

	
session_start();


?>


<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8"/>

</head>

<body>


<?php
	
if(isset($_POST['userName'])&& isset($_POST['password'])){


                 
if($_POST['userName']=='admi' && $_POST['password']=='12345'){

                    
$_SESSION['userName'] = $_POST['userName'];


echo "Bienvenido! Has iniciado sesion: ".$_POST['userName'];

}

	
else{

	
echo "Acceso Restringido";

		
}



}
else
{


if(isset($_SESSION['userName']))
{

echo "Has iniciado Sesion: ".$_SESSION['userName'];


echo"<a href='cerrar.php'>Cerrar Sesion</a>";



}
else
{


echo "Acceso Restringido";


}


}


?>


<br/>
<a href="sesion.php">Home</a>


</body>

</html>