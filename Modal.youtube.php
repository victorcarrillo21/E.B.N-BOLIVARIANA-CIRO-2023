<!-- Modal -->
<!--<div class="modal fade" id="nuevoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="guarda.php" method="post" enctype="multipart/form-data">

            
                <div class="mb-3">

                    <label for="nombre" class="form-label">
                        NOMBRE:
                    </label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="mb-3">

                    <label for="descripcion" class="form-label">
                        DESCRIPCION:
                    </label>
                     <textarea name="nombre" id="nombre" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">

                    <label for="genero" class="form-label">
                        GÉNERO:
                    </label>
                    <select name="nombre" id="nombre" class="form-control" required>
                        <option value="">Selecionar...</option>

                        <?php while ($row_genero=$genero->fetch_assoc())
                       {  ?>
                       <option value="<?php echo $row_genero["id"]; ?>"><?=$row_genero['nombre']
                       ?></option>
            <?php } ?>



                    </select>
                </div>

                <div class="">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">ICONO--GUARDAR</button>


                </div>



            </form>  


      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>



--->


<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Título personalizado del modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modalBody">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#representante">Representante</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#alumno">Alumno</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#salud">Salud y transporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#procedencia">Procedencia</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="representante">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para representante -->
                  <li>Nombre: <input type="text" name="nombre_representante" class="form-control"></li>
              <li>Apellido: <input type="text" name="apellido_representante" class="form-control"></li>
              <li>Cédula: <input type="text" name="cedula_representante" class="form-control"></li>
              <li>Parentesco: <input type="text" name="parentesco_representante" class="form-control"></li>
              <li>Profesión: <input type="text" name="profesion_representante" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_representante" class="form-control"></li>
              <li>Dirección de trabajo: <input type="text" name="direccion_trabajo_representante" class="form-control"></li>
              <li>Teléfono: <input type="text" name="telefono_representante" class="form-control"></li>
              <li>Teléfono de trabajo: <input type="text" name="telefono_trabajo_representante" class="form-control"></li>
              <li>Vive con el alumno: <input type="text" name="vive_representante" class="form-control"></li>
              <li>Teléfono opcional: <input type="text" name="telefono_opcional_representante" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_representante" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_representante" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_representante" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_representante" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="alumno">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para alumno -->
                  
              <li>Nombre: <input type="text" name="nombre_alumno" class="form-control"></li>
              <li>Apellido: <input type="text" name="apellido_alumno" class="form-control"></li>
              <li>Género: <input type="text" name="genero_alumno" class="form-control"></li>
              <li>Fecha de nacimiento: <input type="text" name="fecha_nacimiento_alumno" class="form-control"></li>
              <li>Lugar de nacimiento: <input type="text" name="lugar_nacimiento_alumno" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_alumno" class="form-control"></li>
              <li>Periodo escolar: <input type="text" name="periodo_escolar_alumno" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_alumno" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_alumno" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_alumno" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_alumno" class="form-control"></li>
              <li>Procedencia: <input type="text" name="procedencia_alumno" class="form-control"></li>
              <li>Status: <input type="text" name="status_alumno" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="salud">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para salud y transporte -->
                  
              <li>Alergia: <input type="text" name="alergia" class="form-control"></li>
              <li>Dieta: <input type="text" name="dieta" class="form-control"></li>
              <li>Tratamiento médico: <input type="text" name="tratamiento_medico" class="form-control"></li>
              <li>Condición física: <input type="text" name="condicion_fisica" class="form-control"></li>
              <li>Atención especial: <input type="text" name="atencion_especial" class="form-control"></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="procedencia">
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <!-- campos para procedencia -->
                  
              <li>De dónde proviene: <input type="text" name="de_donde_proviene" class="form-control"></li>
              <li>Motivo: <input type="text" name="motivo_procedencia" class="form-control"></li>
              <li>Dirección: <input type="text" name="direccion_procedencia" class="form-control"></li>
              <li>Estado: <input type="text" name="estado_procedencia" class="form-control"></li>
              <li>Ciudad: <input type="text" name="ciudad_procedencia" class="form-control"></li>
              <li>Municipio: <input type="text" name="municipio_procedencia" class="form-control"></li>
              <li>Parroquia: <input type="text" name="parroquia_procedencia" class="form-control"></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>


