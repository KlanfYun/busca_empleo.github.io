  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
         include 'config.php';

            $usuario=$_POST['usuario'];
            $contrasena=$_POST['contraseña'];

            $sql = "SELECT * FROM usuarios where nombre='$usuario' and contrasena='$contrasena'";
            $res = $conn->query($sql);

               if($res -> num_rows > 0){

                  while ($row = $res->fetch_assoc()) {
                    $id = $row["id_usuario"];
                    }

                    $sql2 = "DELETE FROM trabajos WHERE id_usuario='$id'";
                    $sql3 = "DELETE FROM curriculum WHERE id_usuario='$id'";
                    $sql4 = "DELETE FROM usuarios WHERE id_usuario='$id'";
                    $res2 = $conn->query($sql2);
                    $res3 = $conn->query($sql3);
                    $res4 = $conn->query($sql4);

                if($res2 && $res3 && $res4){
                  echo"<script type='text/javascript'>
                   alert('Borraste tu perfil :v');
                   window.location ='../salir.html';
                   </script>";
                }else{
                echo"<script type='text/javascript'>
                   alert('No se borro :D');
                   window.location ='../Perfil.php';
                   </script>";
                }
            }else{
                echo"<script type='text/javascript'>
                   alert('Contraseña incorrecta Usuario');
                   //window.location ='../Perfil.php';
                   </script>";
                } 
        }
?>