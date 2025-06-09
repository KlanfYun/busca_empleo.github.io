  <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          include 'config.php';

            $usuario=$_POST['usuario'];
            $contrasena=$_POST['contraseña'];
        
            $sql = "SELECT * FROM empresarios where nombre='$usuario' and contrasena='$contrasena'";
            $res1 = $conn->query($sql);
            
            if($res1 -> num_rows > 0){
                
                while ($row = $res1->fetch_assoc()) {
                    $id_empresario = $row["id_empresario"];
                }

                $sqld = "SELECT * FROM empresa where id_empresario='$id_empresario'";
                $res1d = $conn->query($sqld);
                
                if($res1d -> num_rows > 0){
                    while ($row2 = $res1d->fetch_assoc()) {
                        $id_empresa = $row2["id_empresa"];
                    }   
                    $sqlr2 = "DELETE FROM trabajos where id_empresa='$id_empresa'";
                    $res1r2 = $conn->query($sqlr2);
                    
                    $sqlr = "DELETE FROM empresa where id_empresario='$id_empresario'";
                    $res1r = $conn->query($sqlr);

                  if($conn->affected_rows > 0){
                    echo"<script type='text/javascript'>
                   alert('Se elimino la empresa');
                   window.location ='../index_.html';
                   </script>";
                  }else{
                        echo"<script type='text/javascript'>
                    alert('No se elimino :v');
                    window.location ='../index_.html';
                    </script>";
                  }
            }else{
                    echo"<script type='text/javascript'>
                    alert('No tienes empresa');
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