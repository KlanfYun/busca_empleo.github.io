  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'config.php';

            $area=$_POST['area'];
            $descripcion=$_POST['descripcion'];
            $pago=$_POST['pago'];
            $monto=$_POST['monto'];
            $moneda=$_POST['moneda'];

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

                    while ($row  =  $res12->fetch_assoc()) {
                    $id_empre = $row["id_empresa"];
                }

                    $sql3 = "INSERT INTO trabajos VALUES(null,'$id_empre','Ninguno','$descripcion','Disponible','$area','$pago','$monto','$moneda')";
                    $res = $conn->query($sql3);

                if($res){
                  echo"<script type='text/javascript'>
                   alert('Creaste un trabajo');
                   window.location ='../index_.html';
                   </script>";
                }else{
                echo"<script type='text/javascript'>
                   alert('No se creo el trabajo');
                   window.location ='../index_.html';
                   </script>";
                }
                    }else{
                             echo"<script type='text/javascript'>
                   alert('No tienes empresa, crea una');
                   window.location ='../index_.html';
                   </script>";
                    }
            }else{
                echo"<script type='text/javascript'>
                   alert('Contraseña incorrecta Empresario');
                   window.location ='../index_.html';
                   </script>";
                } 
        }
?>