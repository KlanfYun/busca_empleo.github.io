  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            include 'config.php';

            $nombre=$_POST['nombre'];
            $telefono=$_POST['telefono'];
            $correo=$_POST['correo'];
            $curp=$_POST['curp'];

            $sexo=$_POST['sexo'];
            $rfc=$_POST['rfc'];
            $ciudad=$_POST['ciudad'];
            $nacionalidad=$_POST['nacionalidad'];

            $licencia=$_POST['licencia'];
            $imss=$_POST['imss'];
            $meta=$_POST['meta'];

            $resumen_xp=$_POST['resumen-xp'];
            $experiencia_laboral=$_POST['experiencia_laboral'];
            $puesto=$_POST['puesto'];
            $empresa=$_POST['empresa'];

            $ubicacion=$_POST['ubicacion'];
            $inicio=$_POST['inicio'];
            $fin=$_POST['fin'];

            $des_trabajo=$_POST['experiencia_laboral'];
            $formacion=$_POST['formacion'];
            $titulos=$_POST['titulos'];

            $institucion=$_POST['institucion'];
            $tecnicas=$_POST['tecnicas'];
            $idiomas=$_POST['idioma'];

            $certificados=$_POST['certificados'];
            $proyectos=$_POST['proyectos'];

            $usuario=$_POST['usu'];
            $contrasena=$_POST['contra'];
        
            $sql = "SELECT * FROM usuarios where nombre='$usuario' and contrasena='$contrasena'";
            $res1 = $conn->query($sql);

               if($res1 -> num_rows > 0){

                  while ($row = $res1->fetch_assoc()) {
                    $id = $row["id_usuario"];
                    }

                    $sqle = "SELECT * FROM curriculum WHERE id_usuario = '$id'";
                    $ress = $conn->query($sqle);

                    if($ress -> num_rows == 0){
                     $sql = "INSERT INTO curriculum VALUES (null,'$id','$nombre','$telefono','$correo','$curp','$sexo','$rfc','$ciudad','$nacionalidad','$imss','$meta','$resumen_xp','$experiencia_laboral','$puesto','$empresa','$ubicacion','$inicio','$fin','$des_trabajo','$formacion','$titulos','$institucion','$tecnicas','$idiomas','$certificados','$proyectos')";
                    $res = $conn->query($sql);

                if($res){
                  echo"<script type='text/javascript'>
                   alert('Creaste tu Curriculum');
                   window.location ='../Perfil.php';
                   </script>";
                }else{
                echo"<script type='text/javascript'>
                   alert('No se creo la postulacion');
                   window.location ='../Perfil.php';
                   </script>";
                }
                    }else{
                      echo"<script type='text/javascript'>
                   alert('Ya tienes Curriculum');
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