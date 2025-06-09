 <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
          include '../config.php';

          $id_empresa=$_POST['id_empresa'];
          $id_empresario=$_POST['id_empresario'];
          $nombre=$_POST['nombre'];

          $sin="Sin resultados";

          $query = "UPDATE empresa SET id_empresario='$id_empresario', nombre='$nombre' WHERE id_empresa='$id_empresa'";
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