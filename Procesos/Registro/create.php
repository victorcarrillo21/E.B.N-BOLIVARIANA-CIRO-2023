<?php


require_once "vista_superior.php";








?>

<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
      <label for="editar" class="form-label">Editar</label>
      <input type="text" name="nombre" id="editar" class="form-control" placeholder="EDITAR" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>

    <!--<div class="mb-3">
      <label for="prosecucion_alumno" class="form-label">Prosecucion</label>
      <input type="text" name="prosecucion" id="prosecucion" class="form-control" placeholder="" aria-describedby="helpId" require>
      <small id="helpId" class="text-muted">Help text</small>
    </div>
-->

  <button type="submit" class="btn btn-primary">Guardar</button>

  <a class="btn btn-danger" href="registro_alumno.php">Agregar</a>

  </form>




<?php

        require_once "vista_inferior.php";

?>