<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   include 'config.php';

  $nombre=$_POST["nombre"];
  $apeidos=$_POST["apeidos"];
  $edad=$_POST['edad'];
  $nacionalidad=$_POST['nacionalidad'];
  $tipo=$_POST['tipo'];
  $contra=$_POST["contraseña"];
  $conficontra=$_POST["cc"];

   if($contra == $conficontra){

      

        if($tipo == "usuario"){
           $query="INSERT INTO usuarios VALUES(null,'$nombre','$apeidos','$edad','$nacionalidad','$contra')";
           $rs1=$conn->query($query);
           if($rs1){
              echo"<script type='text/javascript'>
              window.location ='../Login.html';
              alert('Registro Exitoso como Usuario');
              </script>";
           }else{
             echo"    <script type='text/javascript'>
            window.location ='../Registro.html';
            alert('No se a registrado 1');
            </script>";
           }
        } else if($tipo == "empresario"){
          $query="INSERT INTO empresarios VALUES(null,'$nombre','$apeidos','$edad','$nacionalidad','$contra')";
           $rs2=$conn->query($query);
           if($rs2){
              echo"<script type='text/javascript'>
              window.location ='../Login.html';
              alert('Registro Exitoso como Empresario');
              </script>";
           }else{
             echo"    <script type='text/javascript'>
            window.location ='../Registro.html';
            alert('No se a registrado');
            </script>";
           }
        }else{  
           echo"    <script type='text/javascript'>
            window.location ='../Registro.html';
            alert('Selecciona un tipo de registro');
            </script>";
        }
    }else{
      echo"<script type='text/javascript'>
      alert('Las contraseñas no son iguales');
      window.location ='../Registro.html';
      </script>";
    }
}
?>