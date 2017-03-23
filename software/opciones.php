<?php

	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'test');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['ocpiones'])){
			$errors[] = "ocpiones vacío";
		}   else if (
			
			!empty($_POST['opciones'])
			
		){
 
		// escaping, additionally removing everything that could be (html/javascript-) code
		$opciones='';

	if(isset($_POST['opcion'])){
	
		$opciones=implode('/', $_POST['opcion']);
	} 

	if(isset($_POST['opcion1'])){
		$opciones=$opciones.''.$_POST['opcion1'];
	}
	if(isset($_POST['opcion2'])){
		$opciones=$opciones.''.$_POST['opcion2'];
	}
	if(isset($_POST['opcion3'])){
		$opciones=$opciones.''.$_POST['opcion3'];
	}
	if(isset($_POST['opcion4'])){
		$opciones=$opciones.''.$_POST['opcion4'];
	}
	if(isset($_POST['opcion5'])){
		$opciones=$opciones.''.$_POST['opcion5'];
	}
	if(isset($_POST['opcion6'])){
		$opciones=$opciones.''.$_POST['opcion6'];
	}
	if(isset($_POST['opcion7'])){
		$opciones=$opciones.''.$_POST['opcion7'];
	}
	if(isset($_POST['opcion8'])){
		$opciones=$opciones.''.$_POST['opcion8'];
	}
	if(isset($_POST['opcion9'])){
		$opciones=$opciones.''.$_POST['opcion9'];
	}
		
		$sql="INSERT INTO countries8 ( opciones ) VALUES ('".$opciones."')";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
 
?>