<?php 




   //Eliminar Horario, en éste código, lo qué haces es qué las tablas de bd "en este caso tiene de principal el nombre de 'id' donde está enumerado y
    // y dice el va a ser "1", guardar (la id el valor "1") después se declara otra variables mensaje, donde mensaje asigna la variable horario
    //donde horario accede EliminarHorario ,que es un función donde se le tiene qué guarda un parametros en este caso la '$id' dentro de los parentesis
    //imprimi con un echo

    $id = 1;

    $mensaje = $horario->eliminarHorario($id);
    
    echo $mensaje;
    
     /*Para filtrar los horarios por fecha o día de la semana, puedes utilizar el método getHorarios() de la clase Horario y pasarle como parámetros la fecha o el día de la semana que quieres filtrar. Por ejemplo, para obtener todos los horarios del lunes en la base de datos, puedes hacer lo siguiente: */
    
    
    
    $horarios = $horario->getHorarios(null, "Lunes");
    foreach ($horarios as $horario) {
      echo $horario['fecha'] . ' ' . $horario['hora_ent'] . ' ' . $horario['hora_sal'] . '<br>';
    }
    /*
    En este caso, el primer parámetro del método getHorarios() se deja como null para indicar que no se quiere filtrar por fecha específica, y el segundo parámetro se establece como "Lunes" para indicar que se quiere filtrar los horarios del lunes.
    
    */ 
    
                // OBTENER HORARIOSS, Tenemos 2 variables , en la primera fecha guarda un valor tipo string por las "comillas", y luego tenemos el valor generalizado
                //horarios donde lo qué hace es acceder a esa misma variable valga la redundancia para obtener el valor del paramétros de las variables $fecha
                //luego usa el foreach es para crear un ciclo donde usa las grapas y le dice a las variables dentro de la funcionalidad de horarios recorreme a horario 
                // donde abre la función y lo qué hara es correr y imprimir con un echo $horario donde guarda en corchete el valor obtenido de ['dia'].
    
    
    $fecha = "2023-06-18";
    $horarios = $horario->getHorarios($fecha);
    foreach ($horarios as $horario) {
      echo $horario['dia'] . ' ' . $horario['hora_ent'] . ' ' . $horario['hora_sal'] . '<br>';
    }
     