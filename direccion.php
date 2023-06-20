<?php 

require_once 'basedata/basedatapoo/basedata2.php';

class ubicacion extends db {

    public function getEstados(){

        $sql = "SELECT * FROM estados";
        $stmt = $this->conexion()->query($sql);
        while($row = $stmt->fetch()){
            echo '<option value=" ' . $row['estado'] . ' ">' . $row['estado'] . '</option>';
        }
    }
  

    public function getCiudades(){

        $sql = "SELECT * FROM ciudades";
        $stmt = $this->conexion()->query($sql);
        while($row = $stmt->fetch()){
            echo '<option value=" ' . $row['ciudad'] . ' ">' . $row['ciudad'] . '</option>';
        }
    }

    public function getMunicipios(){

        $sql = "SELECT * FROM municipios";
        $stmt = $this->conexion()->query($sql);
        while($row = $stmt->fetch()){
            echo '<option value=" ' . $row['municipio'] . ' ">' . $row['municipio'] . '</option>';
        }
    }

    public function getParroquias(){

        $sql = "SELECT * FROM parroquias";
        $stmt = $this->conexion()->query($sql);
        while($row = $stmt->fetch()){
            echo '<option value=" ' . $row['parroquia'] . ' ">' . $row['parroquia'] . '</option>';
        }
    }
}
?>




    <form>
<!-- Sección de ubicación del usuario -->
<fieldset>
    <legend>Ubicación del usuario</legend>
    <div class="form-group">
      <label for="state" class="form-label">Estado:</label>
      <select name="estado" id="state" class="form-select" required> 
        <option value="">Seleccione una opción</option>
            <?php
                $ubicacion->getEstados();
            ?>
      </select>
    </div>
    <div class="form-group">
      <label for="ciudad_select" class="form-label">Ciudad:</label>
      <select name="ciudad" id="ciudad_select" class="form-select" required>
        <option value="">Seleccione una opción</option>
       <?php
            $ubicacion->getCiudades();
       ?>
      </select>
    </div>
    <div class="form-group">
      <label for="municipio_select" class="form-label">Municipio:</label>
      <select name="municipio" id="municipio_select" class="form-select" required>
        <option value="">Seleccione una opción</option>
            <?php
                $ubicacion->getMunicipios();
            ?>


      </select>
    </div>
    <div class="form-group">
      <label for="parroquia_select"class="form-label">Parroquia:</label>
      <select name="parroquia" id="parroquia_select" class="form-select">
        <option value="">Seleccione una opción</option>
         <?php

                $ubicacion->getParroquias();
         ?>

      </select>
    </div>
    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección:</label>
      <textarea name="direccion" id="direccion" class="form-control" required></textarea>
    </div>
  </fieldset>
  <button type="submit" class="btn btn-primary" value="Guardar" name="Guardar" id="submitBtn">Guardar</button>
        </form> 