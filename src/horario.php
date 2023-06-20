<?php 

 




class Horario {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;

      
  }
  

  public function getDias() {
    $sql = "SELECT * FROM dia";
    return $this->conn->query($sql)->fetchAll();
  }

  public function agregarHorario($fecha, $dia, $hora_ent, $hora_rec1, $hora_rec2, $hora_sal) {
    $sql = "INSERT INTO horarios (fecha, dia, hora_ent, hora_rec1, hora_rec2, hora_sal) VALUES (:fecha, :dia, :hora_ent, :hora_rec1, :hora_rec2, :hora_sal)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':hora_ent', $hora_ent);
    $stmt->bindParam(':hora_rec1', $hora_rec1);
    $stmt->bindParam(':hora_rec2', $hora_rec2);
    $stmt->bindParam(':hora_sal', $hora_sal);
    if ($stmt->execute()) {
      return "Horario agregado exitosamente";
    } else {
      return "Error al agregar el horario: " . $stmt->errorInfo()[2];
    }
  }

  public function actualizarHorario($id, $fecha, $dia, $hora_ent, $hora_rec1, $hora_rec2, $hora_sal) {
    $sql = "UPDATE horarios SET fecha=:fecha, dia=:dia, hora_ent=:hora_ent, hora_rec1=:hora_rec1, hora_rec2=:hora_rec2, hora_sal=:hora_sal WHERE id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':dia', $dia);
    $stmt->bindParam(':hora_ent', $hora_ent);
    $stmt->bindParam(':hora_rec1', $hora_rec1);
    $stmt->bindParam(':hora_rec2', $hora_rec2);
    $stmt->bindParam(':hora_sal', $hora_sal);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
      return "Horario actualizado exitosamente";
    } else {
      return "Error al actualizar el horario: " . $stmt->errorInfo()[2];
    }
  }

  public function getHorarios() {
    $sql = "SELECT * FROM horarios";
    return $this->conn->query($sql)->fetchAll();
  }

   public function eliminarHorario($id) {
    $sql = "DELETE FROM horarios WHERE id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
      return "Horario eliminado exitosamente";
    } else {
      return "Error al eliminar el horario: " . $stmt->errorInfo()[2];
    }
}

}
 


$pdo = new PDO("mysql:host=localhost;dbname=basedata", "root", "");
$horario = new Horario($pdo);

if (!empty($_POST['dia'])) {
    $fecha = $_POST['fecha'];
    $dia = $_POST['dia'];
    $hora_ent = $_POST['hora_ent'];
    $hora_rec1 = $_POST['hora_rec1'];
    $hora_rec2 = $_POST['hora_rec2'];
    $hora_sal = $_POST['hora_sal'];
    
    $mensaje = $horario->agregarHorario($fecha, $dia, $hora_ent, $hora_rec1, $hora_rec2, $hora_sal);
    
    echo $mensaje;
  }


  if (isset($_POST['id'], $_POST['dia'], $_POST['hora_ent'], $_POST['hora_sal'])) {
    $id = $_POST['id'];
    $fecha = $_POST['fecha'];
    $dia = $_POST['dia'];
    $hora_rec1 = $_POST['hora_rec1'];
    $hora_rec2 = $_POST['hora_rec2'];
    $hora_ent = $_POST['hora_ent'];
    $hora_sal = $_POST['hora_sal'];
    
    $mensaje = $horario->actualizarHorario($id, $fecha, $dia, $hora_ent, $hora_rec1, $hora_rec2, $hora_sal);
    
    echo $mensaje;
  }

  $horarios = $horario->getHorarios();
foreach ($horarios as $horario) {
  echo $horario['fecha'] . ' ' . $horario['hora_ent'] . ' ' . $horario['hora_sal'] . '<br>';

}

$horario = new Horario($pdo);

$id=1;
$mensaje = $horario->eliminarHorario($id);

echo $mensaje;




   

// OBTENER HORARIOS, Tenemos 2 variables , en la primera fecha guarda un valor tipo string por las "comillas", y luego tenemos el valor generalizado
//horarios donde lo qué hace es acceder a esa misma variable valga la redundancia para obtener el valor del paramétros de las variables $fecha
//luego usa el foreach es para crear un ciclo donde usa las grapas y le dice a las variables dentro de la funcionalidad de horarios recorreme a horario 
// donde abre la función y lo qué hara es correr y imprimir con un echo $horario donde guarda en corchete el valor obtenido de ['dia'].


$fecha = "2023-06-18";
$horarios = $horario->getHorarios($fecha);
foreach ($horarios as $horario) {
echo $horario['dia'] . ' ' . $horario['hora_ent'] . ' ' . $horario['hora_sal'] . '<br>';
}
             


 
/*Can you show me how to modify the code to update a horario?
What is the difference between DELETE and TRUNCATE in SQL?
How can I add a new horario to the database using PHP?*/
/*
Can you show me how to delete a horario using PHP?
What is the purpose of the private $conn variable in the Horario class?
How can I modify the code to display the horarios for a specific dia?

Can you help me identify the line where the error occurred?
Do you have any suggestions on how to fix the syntax error?
Is there a tool or resource you recommend for debugging PHP code?

Can you show me how to use the updated code to add a new schedule?
What should I do if I encounter an error while using the updated code?
How can I modify the code to display the schedules in a table?

Can you help me check if the Horario class is defined correctly?
What should I do if the error persists after checking the Horario class?
Is there a way to check if the $id variable is valid?

How can I get the value of $id from the form?
What other methods should I check for database connection errors?
Can you show me an example of how to get the ID from a form?


Además, si deseas verificar si la conexión a la base de datos está funcionando correctamente, puedes intentar ejecutar una consulta simple en la base de datos utilizando la conexión establecida en el constructor de la clase Horario. Por ejemplo, podrías intentar ejecutar la consulta SELECT 1 utilizando la conexión y verificar si se obtiene un resultado válido. Si la consulta no devuelve resultados o se produce una excepción, es posible que haya un problema con la conexión a la base de datos.

*/


