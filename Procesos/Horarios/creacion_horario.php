<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Horario</title>

		 <!-- Custom fonts for this template-->
		 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>


<body>
    

<div style="display: flex;">
      
     <div class="col-md-4">
        <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">FECHA INICIO</label>
          <input type="date" name="inicio_programa" class="form-control form-control-solid "  placeholder="FECHA INICIO"/>
        </div>
     </div>

     <div class="col-md-4">
        <div class="mb-10">
          <label for="exampleFormControlInput1" class="required form-label">FECHA CIERRE</label>
          <input type="date" name="inicio_programa" class="form-control form-control-solid "  placeholder="FECHA CIERRE"/>
        </div>
     </div>

    

</div>  
 <button type="submit" class="btn btn-success" >Guardar Datos</button>

     <div class="table-responsive">
                <table class="table table-striped gy-7 gs-7">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                            <th class="min-w-200px">EDITAR</th>
                            <th class="min-w-200px">LUNES</th>
                        
                            <th class="min-w-200px">MARTES</th>
                            <th class="min-w-200px">MIERCOLES</th>
                        </tr>
                    </thead>
                    <tbody>

               
                        <tr>
                            <td >
                                <a href="">
                                    <button  class="btn btn-danger btn-xs" >Editar  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg>
                                    </button>
                                </a>
                            </td>

                            <td>24-04-2023</td>
                           

                        </tr>
                      
                    </tbody>
                </table>
            </div>


   <!-- Bootstrap core JavaScript-->
   <!--Bootstrap 3-5-2023--> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
</body>
</html>