<?php
include '../config.php';

          $nombre=$_POST['nombre'];
          $apeidos=$_POST['apeidos'];
          $edad=$_POST['edad'];
          $nacionalidad=$_POST['nacionalidad'];
          $contraseña=$_POST['contraseña'];

        $sql = "INSERT INTO empresarios VALUES (null,'$nombre','$apeidos','$edad','$nacionalidad','$contraseña')";
        $result = $conn->query($sql);
        if($result){
            echo"
            <script type='text/javascript'>
            alert('Insertaste empresario');
            window.location ='../index.php';
            </script>";  
        }else{
            echo"
            <script type='text/javascript'>
            alert('No se inserto :v');
            //window.location ='../index.php';
            </script>";
        }





?>