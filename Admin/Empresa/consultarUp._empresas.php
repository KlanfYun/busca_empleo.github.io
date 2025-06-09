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
      <form method="post" action="actualizar_empresa.php" class="ju-grid">
        <fieldset style="width: auto;">
          <legend style="color: white;">CONSULTAR EMPRESA</legend>

          <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
          include '../config.php';
          $id=$_POST['id_consultar'];
          $sin="Sin resultados";
          $query = "SELECT * FROM empresa WHERE id_empresa='$id'";
          $result = $conn->query($query);
          if($id){
          if ($result -> num_rows > 0) {
            if($row = $result->fetch_assoc()){
              echo'
                 <div class="i">
            <label for="">ID EMPRESA<input pattern="[0-9]+" title="Solo números" required placeholder="Id Empresa" type="text" name="id_empresa" value="'.$row['id_empresa'].'"></label>
          </div>
          <div class="i">
            <label for="">ID EMPRESARIO<input pattern="[0-9]+" title="Solo números" required placeholder="Id Emprensario" type="text" name="id_empresario" value="'.$row['id_empresario'].'"></label>
          </div>
          <div class="i">
            <label for="">NOMBRE<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required placeholder="Nombre" type="text" name="nombre" value="'.$row['nombre'].'"></label>
          </div>
              ';
            }
            }else{
              echo'
                 <div class="i">
            <label for="">ID EMPRESA<input pattern="[0-9]+" title="Solo números" required placeholder="Id del Emprendedor" type="text" name="id_empresa" value="'.$sin.'"></label>
          </div>
          <div class="i">
            <label for="">ID EMPRESARIO<input pattern="[0-9]+" title="Solo números" required placeholder="Id del Emprendedor" type="text" name="id_emprensario" value="'.$sin.'"></label>
          </div>
          <div class="i">
            <label for="">NOMBRE<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required placeholder="Nombre" type="text" name="nombre" value="'.$sin.'"></label>
          </div>
              ';
            }
          }
		mysqli_close($conn);
        }
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