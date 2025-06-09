<?php
include '../config.php';
$id_empresario = $_POST['id_empresario'];

$sql3 = "SELECT * FROM empresarios WHERE id_empresario='$id_empresario'";
$result3 = $conn->query($sql3);

if($result3 -> num_rows > 0){

$sql = "SELECT * FROM empresa WHERE id_empresario='$id_empresario'";
$result = $conn->query($sql);
if($result-> num_rows > 0){
            while($row =$result->fetch_assoc()){
                $id_empresa = $row['id_empresa'];
            }

        $sql2 = "DELETE FROM trabajos WHERE id_empresa='$id_empresa'";
        $result2 = $conn->query($sql2);

        $sql1 = "DELETE FROM empresa WHERE id_empresario='$id_empresa'";
        $result1 = $conn->query($sql1);

        $sql4 = "DELETE FROM empresario WHERE id_empresario='$id_empresario'";
        $result4 = $conn->query($sql4);

        if($result1 && $result2 && $result4){   
                    echo"
                    <script type='text/javascript'>
                    //alert('Eliminaste empresario');
                    window.location ='../index.php';
                    </script>";
        }else{
            echo"
            <script type='text/javascript'>
            alert('No se elimino :v');
            //window.location ='../index.php';
            </script>";    
        }
}else{
        $sql4 = "DELETE FROM empresario WHERE id_empresario='$id_empresario'";
        $result4 = $conn->query($sql4);

        if($conn->affected_rows > 0){   
                    echo"
                    <script type='text/javascript'>
                    //alert('Eliminaste empresario');
                    window.location ='../index.php';
                    </script>";
        }else{
            echo"
            <script type='text/javascript'>
            alert('No se elimino :v');
            //window.location ='../index.php';
            </script>";    
        }
}
   
}else{
    echo"
            <script type='text/javascript'>
            alert('No se encontro el empresario');
            //window.location ='../index.php';
            </script>";
}


?>