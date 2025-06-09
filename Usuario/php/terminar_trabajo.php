<?php
    include 'config.php';


    $id_ter=$_POST['id_ter'];

    if(is_numeric($id_ter)){
         $sql = "UPDATE trabajos SET estado='Terminado',id_usuario='0'  WHERE id_trabajo='$id_ter'";
                $res = $conn->query($sql);
                    if($conn->affected_rows > 0){
                          echo"<script type='text/javascript'>
                    alert('Terminaste Trabajo');
                    window.location = '../Trabajos.php';
                </script>";
                    }else{
                          echo"<script type='text/javascript'>
                    alert('No existe esa id');
                    window.location = '../Trabajos.php';
                </script>";
                    }
      }else{
         echo"<script type='text/javascript'>
                    alert('Error al terminar Trabajo, No puesde digitar Letra, solo numero, ingresaste $id_ter');
                    window.location = '../Trabajos.php';
                </script>";
    }
?>