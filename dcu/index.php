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
	<title></title>
	
	<style>
		/*body {
   
}
*/
		body{
			 background-image: url('itla.jpg');
		}
		@media (min-width:310px){
			body{
				background-image: url('itla.jpg');
			}
		}

	</style>
</head>
<body>
  
<div class="container-fluid">
	<div class="modal-dialog">
		
		<div class="modal-content">
		 <div class="modal-header">
		 	<h1 class="text-center">ITLA </h1>
		 
		 </div>
		</div>
		<div class="modal-body">
			<form class="col-xs-12 center-block" action="inicio.php" method="post">
				
				<div class="form-group">
					<input type="text" name="usuario" class="form-control input-lg" placeholder="&#128272; Usuario">
				</div>
				<div class="form-group">
				
					<input type="password"  name="contra" class="form-control input-lg" placeholder="&#128273;  Contrasena">
					
				
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-block btn-lg btn-primary" value="login">
					<span class="pull-right"><a href="#">Olvido su contraseña?</a></span> 
					
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>