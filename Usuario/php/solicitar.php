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


                $sql2 = "SELECT * FROM trabajos";
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
                    if ($result){
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
                    } 
                    if($i = 0){
                        echo "<tr><td colspan='4'>No tienes Trabajos</td></tr>";
                    }
                }
                echo '</table> 
                <a href="../Trabajos.php">Regresar</a> <br>
    
                <form method="post" action="tenerTrabajo.php">
                <fieldset>
                <legend style="color:white;text-align:center;">Solicitar Trabajo</legend>
                <input  pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" required type="text" name="nombre" required placeholder="Usuario" style="color:white;                   width:120px;">
                <input pattern="[0-9]+" title="Solo numero, sin letras" required type="text" name="contraseña" required placeholder="Contraseña" style="color:white;            width:120px;">
                <input pattern="[0-9]+" title="Solo numero, sin letras" required type="text" name="id_ter" required placeholder="Ingresa la id del trabajo" style="color:white; width:120px;">
                <button name="btn" style="margin:5px;">Terminar</button>
                </fieldset>
                </form> 
    
                ';
            ?>

</body>

</html>