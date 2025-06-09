<?php
include '../config.php';
$id_empresa = $_POST['id_empresa'];

$sql3 = "SELECT * FROM empresa WHERE id_empresa='$id_empresa'";
$result3 = $conn->query($sql3);

if($result3-> num_rows > 0){
    
$sql2 = "DELETE FROM trabajos WHERE id_empresa='$id_empresa'";
$result2 = $conn->query($sql2);

$sql1 = "DELETE FROM empresa WHERE id_empresa='$id_empresa'";
$result1 = $conn->query($sql1);

if($result1 && $result2){   
            echo"
            <script type='text/javascript'>
            alert('Eliminaste empresa');
            window.location ='../index.php';
            </script>";
}else{
    echo"
    <script type='text/javascript'>
    alert('No se elimino :v');
    window.location ='../index.php';
    </script>";    
}
}else{
    echo"
            <script type='text/javascript'>
            alert('No se encontro la empresa');
            window.location ='../index.php';
            </script>";
}


?>