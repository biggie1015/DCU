<?php
require ('database.php');
require('config.php');

if(isset($_GET['materia'])){ 
   

 $gid=$_GET['materia'];
	
}
   
var_dump($gid);
    $db = new database(DB_HOST,DB_USER,DB_PASS,DB_NAME);
     
    $db->preparar(" SELECT nombre_estu,nombre_materia
					FROM estudiantes as est
					INNER JOIN materias AS mat
					ON est.id_materia = mat.id_materias WHERE id_materias =? ");
    $db->prep()->bind_param('i',$gid);
    $db->ejecutar();
    $db->prep()->bind_result($dbnombre_estu);
    $db->resultado();
	

   
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Materias</title>
</head>
<body>
	<?php
	echo $dbnombre_estu;
?>
	
</body>
</html>