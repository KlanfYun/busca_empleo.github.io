  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main2.css">
    <title>Document</title>
</head>

<body>
    
  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
             include 'config.php';

            $usuario=$_POST['usuario'];
            $contrasena=$_POST['contraseña'];
        
            $sql = "SELECT * FROM empresarios where nombre='$usuario' and contrasena='$contrasena'";
            $res1 = $conn->query($sql);

               if($res1 -> num_rows > 0){

                  while ($row = $res1->fetch_assoc()) {
                    $id = $row["id_empresario"];
                    $sql2 = "SELECT * FROM empresa where id_empresario='$id'";
                    $res12 = $conn->query($sql2);
                }
                if($res12 -> num_rows > 0){

                    while ($row  = $res12->fetch_assoc()) {
                    $id_empre = $row["id_empresa"];
                    }

                    $sql3 = "SELECT * FROM trabajos WHERE id_empresa='$id_empre'";
                    $res = $conn->query($sql3);

                if ($res) {
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
                if ($res){
                    $i=0;
                    while ($row = $res->fetch_assoc()) {
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
                    echo "<tr><td colspan='4'>No tienes Trabajos</td></tr>
                    ";
                }
            }
            echo "</table><a href='../Trabajos.html'>Regresar</a>";
        }else{
                echo"<script type='text/javascript'>
                   alert('Contraseña incorrecta empresario');
                   window.location ='../Trabajos.php';
                   </script>";
                } 
    }else{
                echo"<script type='text/javascript'>
                   alert('Contraseña incorrecta empresario');
                   window.location ='../Trabajos.html';
                   </script>";
                }
} 

        
            ?>
        </body>
</html>