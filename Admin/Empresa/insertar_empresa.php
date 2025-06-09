<?php
include '../config.php';
$id_empresario = $_POST['id_empresario'];
$nombre = $_POST['nombre'];

$sql1 = "SELECT * FROM empresarios WHERE id_empresario='$id_empresario'";
$result1 = $conn->query($sql1);

if($result1 -> num_rows > 0){   
    $sql2 = "SELECT * FROM empresa WHERE id_empresario='$id_empresario'";
    $result2 = $conn->query($sql2);
    if($result2 -> num_rows < 1){
        $sql = "INSERT INTO empresa VALUES (null,'$id_empresario','$nombre')";
        $result = $conn->query($sql);
        if($result){
            echo"
            <script type='text/javascript'>
            alert('Insertaste empresa');
            window.location ='../index.php';
            </script>";  
        }else{
            echo"
            <script type='text/javascript'>
            alert('No se inserto :v');
            //window.location ='../index.php';
            </script>";
        }
    }else{
    echo"
    <script type='text/javascript'>
    alert('Ya tiene empresa el empresario :v');
    window.location ='../index.php';
    </script>";  
    }
}else{
    echo"
    <script type='text/javascript'>
    alert('No existe la id del empresario :v');
    window.location ='../index.php';
    </script>";    
}




?>