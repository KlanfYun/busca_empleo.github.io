 <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
          include '../config.php';

          $id_empresario=$_POST['id_empresario'];
          $nombre=$_POST['nombre'];
          $apeidos=$_POST['apeidos'];
          $edad=$_POST['edad'];
          $nacionalidad=$_POST['nacionalidad'];
          $contraseña=$_POST['contraseña'];

          $sin="Sin resultados";

          $query = "UPDATE empresarios SET nombre='$nombre',apeidos='$apeidos',edad='$edad',nacionalidad='$nacionalidad', contrasena='$contraseña' WHERE id_empresario='$id_empresario'";
          $result = $conn->query($query);
          if ($result) {
                  echo"<script type='text/javascript'>
                   alert('Actualizaste datos');
                   window.location ='../index.php';
                   </script>";
            }else{
                echo"<script type='text/javascript'>
                   alert('No se actualizaron :v');
                   window.location ='../index.php';
                   </script>";
            }   
            mysqli_close($conn);
          }
?>