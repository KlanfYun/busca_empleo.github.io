<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css.css">
  <link rel="stylesheet" href="../main.css">
  <title>CRUD System with Popups</title>
</head>
<style>
  .emergente input[type="text"] {
    margin: 10px;
    background: none;
    border: none;
    border-bottom: 1px solid black;
    max-width: 200px;
    color: white;
  }

  .btn {
    margin: 0 !important;
    background: none !important;
    background-color: rgb(147, 189, 226, 0.4) !important;
    color: white !important;
    margin: 5px !important;
  }

  .btn:hover {
    color: black !important;
    box-shadow: 0 0 20px rgb(66, 105, 155) !important;
  }

  .p-2{
    display: block; /* Cambiar a block para mostrar */
    opacity: 1; /* Opacidad al 100% */
    transform: translate(-50%, -50%) scale(1); /* Escala normal al mostrar */
}
.fondo-blur {
    display: block !important; /* Cambiar a block para mostrar */
    opacity: 1 !important; /* Opacidad al 100% */
}

</style>

<body>
    <!--?----EMPRESARIOS CONSULTAR------------------------------------------------------------------------------------------------------------------------------------------------------ -->
    <div class="emergente p-2"><!------------AQUI----------------->
      <form method="post" action="actualizar.php" class="ju-grid">
        <fieldset style="width: auto;">
          <legend style="color: white;">CONSULTAR EMPRESA</legend>

          <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
          include '../config.php';
          $id_empresario=$_POST['id_consultar'];
          $sin="Sin resultados";
          $query = "SELECT * FROM empresarios WHERE id_empresario='$id_empresario'";
          $result = $conn->query($query);
          if ($result -> num_rows > 0) {
            if($row = $result->fetch_assoc()){
              echo'
                 <div class="i">
            <label for="">ID EMPRESARIO<input pattern="[0-9]+" title="Solo números" readonly required placeholder="Id Empresario" type="text" name="id_empresario" value="'.$row['id_empresario'].'"></label>
          </div>
          <div class="i">
            <label for="">NOMBRE<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required placeholder="nombre" type="text" name="nombre" value="'.$row['nombre'].'"></label>
          </div>
          <div class="i">
            <label for="">APEIDOS<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required placeholder="Apeidos" type="text" name="apeidos" value="'.$row['apeidos'].'"></label>
          </div>
          <div class="i">
            <label for="">EDAD<input pattern="[0-9]+" title="Solo nùmeros" required placeholder="Edad" type="text" name="edad" value="'.$row['edad'].'"></label>
          </div>
          <div class="i">
            <label for="">NACIONALIDAD<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required placeholder="Nacionalidad" type="text" name="nacionalidad" value="'.$row['nacionalidad'].'"></label>
          </div>
          <div class="i">
            <label for="">CONTRASEÑA<input pattern="[0-9]+" title="Solo nùmeros" required placeholder="Nombre" type="text" name="contraseña" value="'.$row['contrasena'].'"></label>
          </div>
              ';
            }
            }else{
              echo'
                  <div class="i">
            <label for="">ID EMPRESARIO<input pattern="[0-9]+" title="Solo números" required placeholder="Id Empresario" type="text" name="id_empresario" value="'.$sin.'"></label>
          </div>
          <div class="i">
            <label for="">NOMBRE<input pattern="[0-9]+" title="Solo números" required placeholder="nombre" type="text" name="nombre" value="'.$sin.'"></label>
          </div>
          <div class="i">   
            <label for="">APEIDOS<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required placeholder="Apeidos" type="text" name="apeidos" value="'.$sin.'"></label>
          </div>
          <div class="i">
            <label for="">EDAD<input pattern="[0-9]+" title="Solo nùmeros" required placeholder="Edad" type="text" name="Edad" value="'.$sin.'"></label>
          </div>
          <div class="i">
            <label for="">NACIONALIDAD<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required placeholder="Nacionalidad" type="text" name="nombre" value="'.$sin.'"></label>
          </div>
          <div class="i">
            <label for="">CONTRASEÑA<input pattern="[0-9]+" title="Solo nùmeros" required placeholder="Nombre" type="text" name="contraseña" value="'.$sin.'"></label>
          </div>
              ';
            }
            }
		mysqli_close($conn);
?>

        </fieldset>
        <input type="submit" class="btn center" value="ACTUALIZAR">
      </form>
      <div class="ju-grid" style="margin-top: -25px;">
        <button class="btn" onclick="cancelar1_2()">CANCELAR</button><!-------AQUI------------->
      </div>
      <script>
        function cancelar1_2() {
          window.location = "../index.php";
        }
      </script>
    </div>
</body>

</html>