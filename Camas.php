<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camas</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Camas</h1>
    <a href="index.html" title="Clic para ir al inicio">ir a inicio</a>
    <head>
        <title>Dogs And Cats</title>
        
        <!--JQUERY-->
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script 
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        
        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="static/css/user-form.css"
            th:href="@{/css/user-form.css}">
        <!-- DATA TABLE -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">	
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    
        <script type="text/javascript">
        $(document).ready(function() {
            //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
            $('#userList').DataTable();
        } );
        </script>
    
    </head>
    <body>


        <li class="active"><a href="index.html">Registro</a></li>
        <li><a href="Ropa.html">Ropa</a></li>
        <li><a href="Accesorios.html">Accesorios </a></li>
        <li><a href="Alimento.html">Alimentos</a></li>
        <li><a href="shampu.html">Shampu</a></li>
        <li><a href="Cliente.html">Cliente</a></li>
        <li><a href="camas.html">Camas</a></li>
        <li><a href="sugerencias.html">sugerencias</a></li>
        <li><a href="comentarios.html">Comentarios</a></li>


        <div class="container">
            <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
                <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Camas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Registrar</a>				   	
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <div class="card">
                        <div class="card-header">
                            <h4>Camas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="userList" class="table table-bordered table-hover table-striped">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Color</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "camas";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `camas`";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    //output data of each row
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<th>".$row["id"]."</th>";
        echo "<th>".$row["Nombre"]."</th>";
        echo "<td>".$row["Codigo"]."</td>";
        echo "<td>".$row["material"]."</td>";
        echo "<td>".$row["color"]."</td>";
        echo "<td>
        <a href='index1/Page-10.html'><i class='fas fa-edit'></i></a></td>";
        echo "<td><a href='borrar.html'><i class='fas fa-user-times'></i></a>
    </td>";
    echo "</tr>";
    //echo "<br> "id:.row["id"] -Nombre: .$row["Nombre"]. -"Codigo:".$row["Codigo"]. -"Material:".$row["Material"]. -"Color:" .$row["Color"] . </br>;
    }
} else{
    echo "0 result";
}
// echo "<td>pruebac.r.username</td>";
// echo "<td>pruebac.r.username@blog.com</td>";
$conn->close();
?>
                                </tbody>
                            </table>
                        </div>                
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
                    <div class="card">
                            <div class="card-header">
                                <h4>Registrar informacion</h4>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Codigo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Material</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Color</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12 text-center">
                                        <input type="reset" class="btn btn-secondary" value="Cancelar">
                                        <input type="button" class="btn btn-primary"
                                            value="Registrar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>