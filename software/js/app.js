	function load(page){
		var parametros = {"action":"ajax","page":page};
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'paises_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='loader.gif'>");
			},
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
 
		$('#dataUpdate').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var codigo = button.data('codigo') // Extraer la información de atributos de datos
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var cliente = button.data('cliente') // Extraer la información de atributos de datos
		  var telefono = button.data('telefono') // Extraer la información de atributos de datos
		  var direccion = button.data('direccion') // Extraer la información de atributos de datos
		  var empleado = button.data('empleado') // Extraer la información de atributos de datos
		  var date = button.data('date') // Extraer la información de atributos de datos
		  var estado = button.data('estado') // Extraer la información de atributos de datos
		  var opciones = button.data('opciones') // Extraer la información de atributos de datos
		  var trabajo = button.data('trabajo') // Extraer la información de atributos de datos
		  var observacion = button.data('observacion') // Extraer la información de atributos de datos
		  var operacion = button.data('operacion') // Extraer la información de atributos de datos
		  var fecha = button.data('fecha') // Extraer la información de atributos de datos
		  var inicio = button.data('inicio') // Extraer la información de atributos de datos
		  var final = button.data('final') // Extraer la información de atributos de datos
		  var tiempo = button.data('tiempo') // Extraer la información de atributos de datos
		  var material = button.data('material') // Extraer la información de atributos de datos
		  var estado = button.data('cantidad') // Extraer la información de atributos de datos
		  
		  var modal = $(this)
		  modal.find('.modal-title').text('Modificar orden: '+cliente)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #codigo').val(codigo)
		  modal.find('.modal-body #cliente').val(cliente)
		  modal.find('.modal-body #telefono').val(telefono)
		  modal.find('.modal-body #direccion').val(direccion)
		  modal.find('.modal-body #empleado').val(empleado)
		  modal.find('.modal-body #date').val(date)
		  modal.find('.modal-body #estado').val(estado)
		  modal.find('.modal-body #opciones').val(opciones)
		  modal.find('.modal-body #trabajo').val(trabajo)
		  modal.find('.modal-body #observacion').val(observacion)
		  modal.find('.modal-body #operacion').val(operacion)
		  modal.find('.modal-body #fecha').val(fecha)
		  modal.find('.modal-body #inicio').val(inicio)
		  modal.find('.modal-body #final').val(final)
		  modal.find('.modal-body #tiempo').val(tiempo)
		  modal.find('.modal-body #material').val(material)
		  modal.find('.modal-body #cantidad').val(cantidad)
		  $('.alert').hide();//Oculto alert
		})
		
		$('#dataDelete').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var modal = $(this)
		  modal.find('#id_pais').val(id)
		})
 
	$( "#actualidarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "modificar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		$( "#guardarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "agregar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#datos_ajax_register").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$("#datos_ajax_register").html(datos);
					
					load(1);
				  }
			});
		  event.preventDefault();
		});
		
		$( "#eliminarDatos" ).submit(function( event ) {
		var parametros = $(this).serialize();
			 $.ajax({
					type: "POST",
					url: "eliminar.php",
					data: parametros,
					 beforeSend: function(objeto){
						$(".datos_ajax_delete").html("Mensaje: Cargando...");
					  },
					success: function(datos){
					$(".datos_ajax_delete").html(datos);
					
					$('#dataDelete').modal('hide');
					load(1);
				  }
			});
		  event.preventDefault();
		});