  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            include 'config.php';

            $usuario=$_POST['usu'];
            $contrasena=$_POST['contra'];
        
            $sql = "SELECT * FROM usuarios where nombre='$usuario' and contrasena='$contrasena'";
            $res1 = $conn->query($sql);

               if($res1 -> num_rows > 0){

                  while ($row = $res1->fetch_assoc()) {
                    $id = $row["id_usuario"];
                    }

                    $sqle = "DELETE FROM curriculum WHERE id_usuario = '$id'";
                    $ress = $conn->query($sqle);

                if($conn->affected_rows > 0){
                  echo"<script type='text/javascript'>
                   alert('Se elimino Curriculum');
                   window.location ='../Perfil.php';
                   </script>";
               }else{
                   echo"<script type='text/javascript'>
                      alert('No tenias curriculum');
                      window.location ='../Perfil.php';
                      </script>";
                }
                


                 
            }else{
                echo"<script type='text/javascript'>
                   alert('Contraseña incorrecta Usuario');
                   window.location ='../Perfil.php';
                   </script>";
                } 
        }
?>