    <?php
    include 'config.php';

    $nombre=$_POST['nombre'];
    $contraseña=$_POST['contraseña'];
    $id_ter=$_POST['id_ter'];

    if(!preg_match('/\d+/',$nombre)){
    if(is_numeric($contraseña)){
        $sql = "SELECT * FROM usuarios WHERE nombre='$nombre' and contrasena='$contraseña'";
        $res = $conn->query($sql);
        
        if($res -> num_rows > 0){
    
              while ($row = $res->fetch_assoc()) {
                        $id = $row["id_usuario"];  
                    }
                    echo"
                    $id
                    $id_ter
                    ";
    
                $sql2 = "UPDATE trabajos SET id_usuario='$id',estado='ocupado' WHERE id_trabajo='$id_ter'";
                $result = $conn->query($sql2);
                if ($result) {
                        echo"<script type='text/javascript'>
                        alert('Solicitaste Trabajo');
                        window.location = '../Trabajos.php';
                    </script>";
                }else{

                }
              }else{
                    echo"<script type='text/javascript'>
                        alert('No se solicito nd');
                        window.location = 'solicitar.php';
                    </script>";
                    } 

    }else{
         echo"<script type='text/javascript'>
                        alert('No se acepta texto en contraseña');
                        window.location = 'solicitar.php';
                    </script>";
    }
    }else{
    echo"<script type='text/javascript'>
                        alert('No se aceptan numeros en nombre');
                        window.location = 'solicitar.php';
                    </script>";
                    }
                    ?>
