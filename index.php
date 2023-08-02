<?php 
    if(isset($_GET['email'])){
        //ya dio en el boton enviar
        require_once('conexion.php');
        $email=$_GET['email'];
        $pass=$_GET['pass'];

        $sql="SELECT * FROM profesores 
        WHERE email='$email' AND pass='$pass' ";
        
        $resultado=$mysqli->query($sql);
        $resultado->num_rows;

        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color: brown;
        }
    </style>
</head>
<body>
    <div class="row justify-content-md-center mt-4">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="index.php">

                        <!-- TITULO -->
                        <div class="row mt-4 mb-4">
                            <div class="col-12" style="text-align: center;">
                                <p><?php
                                    echo $sql;
                                    echo "<br>";
                                    printf("Valido: %d", $resultado->num_rows);
                                 ?></p>
                                <h1>INICIAR SESION</h1>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <!-- password-->
                        <div class="form-group">
                          <label for="pass">Password</label>
                          <input type="text" class="form-control" id="pass" name="pass">
                        </div>

                       <!-- boton-->
                       <div class="row mt-4">
                            <div class="col-12" style="text-align: center;">
                                <button type="submit" class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                       </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>