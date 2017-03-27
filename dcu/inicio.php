<?php

require ('database.php');
require('config.php');

if($_POST){
	
	extract($_POST,EXTR_OVERWRITE);
	
	
}
/*
  if(isset($usuario) && isset($contra)){
	  $db = new database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
     
    $validaruser = $db->validarDatos('usuario','dcu',$usuario);
   
    if($validaruser!=0){
    $db->preparar("select id,usuario,clave from dcu where usuario ='$usuario'");
    $db->ejecutar();
    $db->prep()->bind_result($id,$dbusuario,$dbclave);
    $db->resultado();
    $db->liberar();
  }
	  
	  if($usuario ==$dbusuario){
           
             if($contra == $dbclave){
             $ok=true;
        }
        else{
            echo"La contrasena es invalida, por favor ingrese una valida";
            header("refresh:5; url=index.php");
        }
}
	  
	  else{
		  echo"Usario incorrecto";
		   header("refresh:5; url=index.php");
	  }
        

  }



*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Asistencia Materias</title>
	<style>
	
		.barra{
			position: relative;
			background-color: aquamarine;
			width: 100%;
			height: 85px;
			float: left;
			position: fixed;
			z-index: 1;

		}
		
	
	</style>
</head>
<body>
	
	<div class="barra">
	<h2> ITLA</h2>
	</div>
	<?php 
	
	for($x=0;$x<=4;$x++){
		echo "<br>";
	}
	?>
	
	<center>
	<h3>Materias</h3>
	<hr>
	</center>
	<?php
	
	$db = new database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   
    $db->preparar("SELECT id_materias,
	                      nombre_materia,
						  horario
						  FROM materias");
    $db->ejecutar();
    $db->prep()->bind_result($id,$dbmateria,$dbhorario);
	
    
		?>
		


	<?php
	
	while($db->resultado()){
		echo"
		   <ul>
		   <li><a href='materias.php?materia=$id'>$dbmateria</li></a>
		   <strong>Hora:$dbhorario</strong>
		   </ul>
		   <hr>
		";
	}
		$db->liberar();
		
		?>
	


	</body>
	
</html>
	