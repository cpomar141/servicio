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
	if (empty($_POST['id'])) {
           $errors[] = "ID vacío";
        } else if (empty($_POST['codigo'])){
			$errors[] = "Código vacío";
		} else if (empty($_POST['cliente'])){
			$errors[] = "cliente vacío";
		} else if (empty($_POST['telefono'])){
			$errors[] = "telefono vacío";
		} else if (empty($_POST['direccion'])){
			$errors[] = "direccion vacío";
			} else if (empty($_POST['empleado'])){
			$errors[] = "empleado vacío";
			} else if (empty($_POST['date'])){
			$errors[] = "date vacío";
		} else if (empty($_POST['estado'])){
			$errors[] = "estado vacío";
		} else if (empty($_POST['opciones'])){
			$errors[] = "opciones vacío";
		} else if (empty($_POST['trabajo'])){
			$errors[] = "trabajo vacío";
		} else if (empty($_POST['observacion'])){
			$errors[] = "observacion vacío";
		} else if (empty($_POST['operacion'])){
			$errors[] = "operacion vacío";
		} else if (empty($_POST['fecha'])){
			$errors[] = "fecha vacío";
		} else if (empty($_POST['inicio'])){
			$errors[] = "H:inicio vacío";
		} else if (empty($_POST['final'])){
			$errors[] = "H:final vacío";
		} else if (empty($_POST['tiempo'])){
			$errors[] = "T:tiempo vacío";
		} else if (empty($_POST['material'])){
			$errors[] = "material vacío";
		} else if (empty($_POST['cantidad'])){
			$errors[] = "cantidad vacío";
		}   else if (
			!empty($_POST['id']) &&
			!empty($_POST['codigo']) && 
			!empty($_POST['cliente']) &&
			!empty($_POST['telefono']) &&
			!empty($_POST['direccion']) &&
			!empty($_POST['empleado']) &&
			!empty($_POST['data']) &&
			$_POST['estado']!=""&&
			!empty($_POST['opciones']) &&
			!empty($_POST['trabajo']) &&
			!empty($_POST['observacion']) &&
			!empty($_POST['operacion']) &&
			!empty($_POST['fecha']) &&
			!empty($_POST['inicio']) &&
			!empty($_POST['final']) &&
			!empty($_POST['tiempo']) &&
			!empty($_POST['material']) &&
			!empty($_POST['cantidad']) 
			
			
		){
 
		// escaping, additionally removing everything that could be (html/javascript-) code
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));
		$cliente=mysqli_real_escape_string($con,(strip_tags($_POST["cliente"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
		$empleado=mysqli_real_escape_string($con,(strip_tags($_POST["empleado"],ENT_QUOTES)));
        $date=mysqli_real_escape_string($con,(strip_tags($_POST["date"],ENT_QUOTES)));
        $estado=mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));
        $opciones=mysqli_real_escape_string($con,(strip_tags($_POST["opciones"],ENT_QUOTES)));
        $trabajo=mysqli_real_escape_string($con,(strip_tags($_POST["trabajo"],ENT_QUOTES)));
        $observacion=mysqli_real_escape_string($con,(strip_tags($_POST["observacion"],ENT_QUOTES)));
        $fecha=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));
        $inicio=mysqli_real_escape_string($con,(strip_tags($_POST["inicio"],ENT_QUOTES)));
        $final=mysqli_real_escape_string($con,(strip_tags($_POST["final"],ENT_QUOTES)));
        $tiempo=mysqli_real_escape_string($con,(strip_tags($_POST["tiempo"],ENT_QUOTES)));
        $material=mysqli_real_escape_string($con,(strip_tags($_POST["material"],ENT_QUOTES)));
        $cantidad=mysqli_real_escape_string($con,(strip_tags($_POST["cantidad"],ENT_QUOTES)));
		$id=intval($_POST['id']);
		$sql="UPDATE countries7 SET  countryCode='".$codigo."', cliente='".$cliente."',
		telefono='".$telefono."',direccion='".$direccion."',empleado='".$empleado."', date='".$date."', estado='".$estado."', opciones='".$opciones."', trabajo='".$trabajo."', observacion='".$observacion."', fecha='".$fecha."', inicio='".$inicio."', final='".$final."', tiempo='".$tiempo."', material='".$material."', cantidad='".$cantidad."'	WHERE id='".$id."'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido actualizados satisfactoriamente.";
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