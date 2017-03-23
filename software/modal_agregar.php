<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar producto</h4>
      </div>
      <div class="modal-body">
      <div class="modal-body">
                    <div id="datos_ajax_register"></div>
                    <div class="form-group">
                    <div class="col-md-4">
                        <label for="codigo0" class="control-label">Código:</label>
                        <input type="text" class="form-control" id="codigo0" name="codigo">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-4">
                        <label for="cliente0" class="control-label">cliente:</label>
                        <input type="text" class="form-control" id="cliente0" name="cliente">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-4">
                        <label for="telefono0" class="control-label">telefono:</label>
                        <input type="text" class="form-control" id="telefono0" name="telefono"></input>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-4">
                        <label for="direccion0" class="control-label">direccion:</label>
                        <input type="text" class="form-control" id="direccion0" name="direccion">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-4">
                        <label for="empleado0" class="control-label">asignado a:</label>
                        <input type="text" class="form-control" id="empleado0" name="empleado">
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-4">
                        <label for="date0" class="control-label">fecha:</label>
                        <input type="text" class="form-control" id="date0" name="date" value="<?php echo date("d/m/y");?>" readonly>
                        </div>
                    </div>
                    <div class="form-group" >
                    <div class="col-md-4">
                        <label for="estado0" class="control-label">estado:</label>
                        <select class="form-control" id="estado0" name="estado">
                            <option value="x" selected>-- Selecciona estado --</option>
                            <option value="activo">activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">

                        <label for="opciones0" class="control-label">Opciones</label><br>
                        <div class="col-md-4">
                            <input type="checkbox" id="opciones0" value="instalacion" name="opcion[]"/>instalacion<br>
                            <input type="checkbox" id="opciones0" value="adicion" name="opcion[]"/>adicion<br>
                            <input type="checkbox" id="opciones0" value="reinstalacion"
                                   name="opcion[]"/>reinstalacion<br>
                            <input type="checkbox" id="opciones0" value="modificacion" name="opcion[]"/>modificacion<br>
                            <input type="checkbox" id="opciones0" value="desmontar" name="opcion[]"/>desmontar<br>

                            <input type="checkbox" id="opciones0" value="revision punto" name="opcion[]"/>revision punto<br>
                            <input type="checkbox" id="opciones0" value="revision sistema" name="opcion[]"/>revision
                            sistema<br>
                            <input type="checkbox" id="opciones0" value="punto video" name="opcion[]"/>punto video<br>
                            <input type="checkbox" id="opciones0" value="punto red" name="opcion[]"/>punto red<br>
                        </div>

                    </div>

                      <div class="form-group">
                    <div class="col-md-5">     
                        <label for="trabajo0" class="control-label">trabajo realizado:</label>
                        <textarea class="form-control" id="trabajo0" name="trabajo"></textarea>
                        <br>
                        <label for="observacion0" class="control-label">observaciones:</label>
                        <textarea class="form-control" id="observacion0" name="observacion"></textarea>
                        </div>
                    </div>
                    <br>
                    <br>

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
                                <textarea class="form-control" id="operacion0" name="operacion"></textarea>

                            </td>
                            <td>
                                <input type="date" class="form-control" id="fecha0" name="fecha">
                            </td>

                            <td>
                                <input type="time" class="form-control" id="inicio0" name="inicio">
                            </td>

                            <td>
                                <input type="time" class="form-control" id="final0" name="final">
                            </td>

                            <td>
                                <input type="text" class="form-control" id="tiempo0" name="tiempo">
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
                                <textarea class="form-control" id="material0" name="material"></textarea>

                            </td>
                            <td>
                                <input type="text" class="form-control" id="cantidad0" name="cantidad">
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" onclick="agregar2()">agregar</button>

                            </td>

                        </tr>
                        </tbody>

                    </table>

                    <input type="hidden" value="1" id="cantCampos2">
                </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
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