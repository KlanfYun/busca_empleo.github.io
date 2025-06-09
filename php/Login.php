  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          include 'config.php';

            $nombre=$_POST["Usuario"];
            $tipo = $_POST["tipo"];
            $contrasena=$_POST["Contraseña"];
            
            if($nombre == "szaenth" && $contrasena == "123"){
              echo"<script type='text/javascript'>
                     alert('Iniciaste sesion Admin');
                     window.location ='../Admin/index.php';
                     </script>";
            }else{
              if($tipo == "usuario"){
              $sql = "SELECT * FROM usuarios where nombre='$nombre' and contrasena='$contrasena'";
              $res1 = $conn->query($sql);
  
                 if($res1 -> num_rows > 0){
                      echo"<script type='text/javascript'>
                     alert('Iniciaste sesion Usuario');
                     window.location ='../Usuario/index_.html';
                     </script>";
              }else{
                  echo"<script type='text/javascript'>
                     alert('Contraseña incorrecta Usuario');
                     window.location ='../Login.html';
                     </script>";
              } 
              }else if($tipo == "empresario"){
                $sql = "SELECT * FROM empresarios where nombre='$nombre' and contrasena='$contrasena'";
                $res2 = $conn->query($sql);
                if($res2 -> num_rows > 0){
                      echo"<script type='text/javascript'>
                          alert('Iniciaste sesion Empresario');
                          window.location ='../Empresario/index_.html';
                          </script>";
              }else{
                  echo"<script type='text/javascript'>
                    alert('Contraseña incorrecta Empresario');
                     window.location ='../Login.html';
                     </script>";
              }
            }else{
                echo"<script type='text/javascript'>
                    alert('Selecciona un Tipo de inicio');
                     window.location ='../Login.html';
                     </script>";
            }
            }
        }
           ?>