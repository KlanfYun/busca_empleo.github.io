  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            include 'config.php';

            $nombre=$_POST['nombre'];
            $apeidos=$_POST['apeidos'];
            $correo=$_POST['edad'];
            $curp=$_POST['nacionalidad'];
            
            $usuario=$_POST['usuario'];
            $contrasena=$_POST['contraseña'];

            $sql = "SELECT * FROM usuarios where nombre='$usuario' and contrasena='$contrasena'";
            $res = $conn->query($sql);

               if($res -> num_rows > 0){

                  while ($row = $res->fetch_assoc()) {
                    $id = $row["id_usuario"];
                    }

                    $sql2 = "UPDATE usuarios SET nombre='$nombre',apeidos='$apeidos',edad='$correo', nacionalidad='$curp' WHERE id_usuario= '$id'";
                    $res2 = $conn->query($sql2);

                if($res2){
                  echo"<script type='text/javascript'>
                   alert('Actualizaste Datos');
                   window.location ='../Perfil.php';
                   </script>";
                }else{
                echo"<script type='text/javascript'>
                   alert('No se actualizaron');
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