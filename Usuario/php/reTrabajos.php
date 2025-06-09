<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<style>
</style>

<body>
    <?php
    include 'config.php';

    $nombre=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];

    if(!preg_match('/\d+/',$nombre)){
    if(is_numeric($contraseña)){
        $sql = "SELECT * FROM usuarios WHERE nombre='$nombre' and contrasena='$contraseña'";
        $res = $conn->query($sql);
    
        if($res -> num_rows > 0){
    
              while ($row = $res->fetch_assoc()) {
                        $id = $row["id_usuario"];
                        $_SESSION['id_usu'] = $id;
                    }
    
                $sql2 = "SELECT * FROM trabajos WHERE id_usuario='$id'";
                $result = $conn->query($sql2);
                if ($result) {
                    echo "
                                <table border='1' align='center'>
                                <tr>
                                <th style='color:white;'>ID</th>
                                <th style='color:white;'>ID EMPRESA</th>
                                <th style='color:white;'>ID USUARIO</th>
                                <th style='color:white;'>DESCRIPCION</th>
                                <th style='color:white;'>ESTADO</th>
                                <th style='color:white;'>AREA</th>
                                <th style='color:white;'>PAGO</th>
                                <th style='color:white;'>MONTO</th>
                                <th style='color:white;'>MONEDA</th>
                                </tr>";
                    if ($result -> num_rows > 0){
                        $i=0;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                    <td style='color:white;'>" .$row["id_trabajo"] . "</td>
                    <td style='color:white;'>" .$row["id_empresa"] . "</td>
                    <td style='color:white;'>" .$row["id_usuario"] . " </td>  
                    <td style='color:white;'>" .$row["descripcion"] . " </td>    
                    <td style='color:white;'>" .$row["estado"] . " </td>  
                    <td style='color:white;'>" .$row["area"] . " </td>   
                    <td style='color:white;'>" .$row["pago"] . " </td>   
                    <td style='color:white;'>" .$row["monto"] . " </td>   
                    <td style='color:white;'>" .$row["moneda"] . " </td>   
                    </tr>";
                    $i + 1;
                        }
                    }else{
                        echo "<tr style='color:white;'><td colspan='4'>No tienes Trabajos</td></tr>";
                    }
                }
                echo '</table> 
                <a href="../Trabajos.php">Regresar</a> <br>
    
                <form method="post" action="terminar_trabajo.php">
                <label style="color:white;">ID DEL TRABAJO QUE TERMINASTE<input style="width:120px;" type="text" required placeholder="Ingresa la id" name="id_ter"></label>
                <button name="btn">Terminar</button>
                </form> 
    
                ';
            }else{
                    echo"<script type='text/javascript'>
                        alert('Contraseña incorrecta Usuario');
                        window.location = '../Trabajos.php';
                    </script>";
                    } 

    }else{
         echo"<script type='text/javascript'>
                        alert('No se acepta texto en contraseña');
                        window.location = '../Trabajos.php';
                    </script>";
    }
    }else{
    echo"<script type='text/javascript'>
                        alert('No se aceptan numeros en nombre');
                        window.location = '../Trabajos.php';
                    </script>";
                    }


            ?>

</body>

</html>