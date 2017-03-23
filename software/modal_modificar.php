
<form id="actualidarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar producto:</h4>
      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>
      <div class="form-group">
                    <div class="col-md-6">
                        <label for="codigo" class="control-label">Código:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label for="cliente" class="control-label">cliente:</label>
                        <input type="text" class="form-control" id="cliente" name="cliente">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label for="telefono" class="control-label">telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"></input>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label for="direccion" class="control-label">direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label for="empresa" class="control-label">empresa:</label>
                        <input type="text" class="form-control" id="empresa" name="empresa">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-6">
                        <label for="fecha" class="control-label">fecha:</label>
                        <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo date("d/m/y");?>" readonly>
                        </div>
                    </div>
                    <div class="form-group" >
                    <div class="col-md-6">
                        <label for="estado" class="control-label">estado:</label>
                        <select class="form-control" id="estado" name="estado">
                            <option value="" selected>-- Selecciona estado --</option>
                            <option value="activo">activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="opciones" class="control-label">Opciones</label><br>
                        <div class="col-md-6">
                            <input type="checkbox" id="opciones" value="instalacion" name="opcion[]"/>instalacion<br>
                            <input type="checkbox" id="opciones" value="adicion" name="opcion[]"/>adicion<br>
                            <input type="checkbox" id="opciones" value="reinstalacion"
                                   name="opcion[]"/>reinstalacion<br>
                            <input type="checkbox" id="opciones" value="modificacion" name="opcion[]"/>modificacion<br>
                            <input type="checkbox" id="opciones" value="desmontar" name="opcion[]"/>desmontar<br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="opciones" value="revision punto" name="opcion[]"/>revision punto<br>
                            <input type="checkbox" id="opciones" value="revision sistema" name="opcion[]"/>revision
                            sistema<br>
                            <input type="checkbox" id="opciones" value="punto video" name="opcion[]"/>punto video<br>
                            <input type="checkbox" id="opciones" value="punto red" name="opcion[]"/>punto red
                        </div>
                    </div>

                    <table class="table table-bordered">

                        <thead>

                        <tr>
                            <th>operario/operacion</th>
                            <th>fecha</th>
                            <th>H.inicio</th>
                            <th>H.final</th>
                            <th>T.tiempo</th>
                            <th>opciones</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyAdd">
                        <tr id="tr1">
                            <td>
                                <textarea class="form-control" id="operacion" name="operacion"></textarea>

                            </td>
                            <td>
                                <input type="date" class="form-control" id="fecha" name="fecha">
                            </td>

                            <td>
                                <input type="time" class="form-control" id="inicio" name="inicio">
                            </td>

                            <td>
                                <input type="time" class="form-control" id="final" name="final0">
                            </td>

                            <td>
                                <input type="time" class="form-control" id="tiempo" name="tiempo0">
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" onclick="agregar()">agregar</button>

                            </td>

                        </tr>
                        </tbody>

                    </table>

                    <input type="hidden" value="1" id="cantCampos">

                    <table class="table table-bordered">

                        <thead>

                        <tr>
                            <th>material</th>
                            <th>cantidad</th>
                            <th>opciones</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyAdd2">
                        <tr id="tr2">
                            <td>
                                <textarea class="form-control" id="material" name="material"></textarea>

                            </td>
                            <td>
                                <input type="text" class="form-control" id="cantidad" name="cantidad">
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" onclick="agregar2()">agregar</button>

                            </td>

                        </tr>
                        </tbody>

                    </table>

                    <input type="hidden" value="1" id="cantCampos2">
         
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    function agregar() {
        console.log("intenta funcionar")
        var id = parseInt($("#cantCampos").val() + 1)
        var campos = "<tr id='tr"+id+"'>"
        campos += "<td><textarea name='operacion' class='form-control'></textarea></td>"
        campos += "<td><input type='date' name='fecha' class='form-control' ></td>"
        campos += "<td><input type='time' name='inicio' class='form-control' ></td>"
        campos += "<td><input type='time' name='final' class='form-control' ></td>"
        campos += "<td><input type='time' name='tiempo' class='form-control' ></td>"
        campos += '<td><button type="button" class="btn btn-primary" onclick="borrar(\'tr'+id+'\')">borrar</button></td>'
        campos += "</tr>"
        var newTr = $(campos)
        $("#tbodyAdd").append(newTr)


    }

     function borrar(id) {
        $("#"+id).remove()
    }


</script>
<script >
   

      function agregar2() {
        console.log("intenta funcionar")
        var id = parseInt($("#cantCampos2").val() + 1)
        var campos = "<tr id='tr2"+id+"'>"
        campos += "<td><textarea class='form-control' name='material'></textarea></td>"
        campos += "<td><input type='text' class='form-control' name='cantidad'></td>"
        campos += '<td><button type="button" class="btn btn-primary" onclick="borrar(\'tr2'+id+'\')">borrar</button></td>'
        campos += "</tr>"
        var newTr = $(campos)
        $("#tbodyAdd2").append(newTr)


    }

    function borrar(id) {
        $("#"+id).remove()
    }
</script>