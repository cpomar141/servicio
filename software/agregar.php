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
	 if (empty($_POST['codigo'])){
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
			!empty($_POST['codigo']) && 
			!empty($_POST['cliente']) &&
			!empty($_POST['telefono']) &&
			!empty($_POST['direccion']) &&
			!empty($_POST['empleado']) &&
			!empty($_POST['data']) &&
			!empty($_POST['trabajo']) &&
			!empty($_POST['observacion']) &&
			!empty($_POST['operacion']) &&
			!empty($_POST['fecha']) &&
			!empty($_POST['inicio']) &&
			!empty($_POST['final']) &&
			!empty($_POST['tiempo']) &&
			!empty($_POST['material']) &&
			!empty($_POST['cantidad']) &&
			$_POST['estado']!=""

		){
 
		// escaping, additionally removing everything that could be (html/javascript-) code
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["codigo"],ENT_QUOTES)));
		$cliente=mysqli_real_escape_string($con,(strip_tags($_POST["cliente"],ENT_QUOTES)));
		$telefono=mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$direccion=mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
		$empleado=mysqli_real_escape_string($con,(strip_tags($_POST["empleado"],ENT_QUOTES)));
        $date=mysqli_real_escape_string($con,(strip_tags($_POST["date"],ENT_QUOTES)));
        $estado=mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));
       
        $trabajo=mysqli_real_escape_string($con,(strip_tags($_POST["trabajo"],ENT_QUOTES)));
        $observacion=mysqli_real_escape_string($con,(strip_tags($_POST["observacion"],ENT_QUOTES)));
        $fecha=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));
        $inicio=mysqli_real_escape_string($con,(strip_tags($_POST["inicio"],ENT_QUOTES)));
        $final=mysqli_real_escape_string($con,(strip_tags($_POST["final"],ENT_QUOTES)));
        $tiempo=mysqli_real_escape_string($con,(strip_tags($_POST["tiempo"],ENT_QUOTES)));
        $material=mysqli_real_escape_string($con,(strip_tags($_POST["material"],ENT_QUOTES)));
        $cantidad=mysqli_real_escape_string($con,(strip_tags($_POST["cantidad"],ENT_QUOTES)));
		
		$sql="INSERT INTO countries7 (countryCode, cliente, telefono, direccion, empleado, date, estado, trabajo, observacion, fecha, inicio, final, tiempo, material, cantidad ) VALUES ('".$codigo."','".$cliente."','".$telefono."', '".$direccion."', '".$empleado."', '".$date."','".$estado."','".$trabajo."','".$observacion."','".$fecha."','".$inicio."','".$final."','".$tiempo."','".$material."','".$cantidad."'	)";
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