  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          include 'config.php';

            $empresa=$_POST['empresa'];

            $usuario=$_POST['usuario'];
            $contrasena=$_POST['contraseña'];
        
            $sql = "SELECT * FROM empresarios where nombre='$usuario' and contrasena='$contrasena'";
            $res1 = $conn->query($sql);

               if($res1 -> num_rows > 0){

                  while ($row = $res1->fetch_assoc()) {
                    $id = $row["id_empresario"];
                    }
                    $sqlr = "SELECT * FROM empresa where id_empresario='$id'";
                    $res1r = $conn->query($sqlr);

                  if($res1r->num_rows == 0){
                    $sql = "INSERT INTO empresa VALUES (null,'$id','$empresa')";
                    $res = $conn->query($sql);

                if($res){
                  echo"<script type='text/javascript'>
                   alert('Creaste una empresa');
                   window.location ='../index_.html';
                   </script>";
                }else{
                echo"<script type='text/javascript'>
                   alert('No se creo la empresa');
                   window.location ='../index_.html';
                   </script>";
                }
                  }else{
                     echo"<script type='text/javascript'>
                   alert('Ya tienes empresa');
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