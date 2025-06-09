<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="css.css">
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
</style>

<body>
  <div class="fondo-blur"></div>
  <header>
    <h1 style="font-size: 30px;color: rgb(255, 255, 255);text-shadow: 0 0 13px rgb(255, 255, 255,0.3);">Administra tu
      Sitio <br> </h1>
    <span style="font-size: 12px;transform: translateY(-20px);color: white;">Explora a tus Usuarios, Empresarios, Empresas Curriculums..... podria decirse que <b style="color: white;text-shadow: 0 0 13px rgb(63, 121, 136);">TODO</b></span>
    <a href="../Login.html"><i>CERRAR SESIÓN</i></a>
  </header>
  <!--?--EMPRESA INSERTAR-------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="emergente p-1"><!------------AQUI----------------->
      <form method="post" action="Empresa/insertar_empresa.php" class="ju-grid">
        <fieldset style="width: auto;">
          <legend style="color: white;">INSERTAR EMPRESA</legend>

          <input pattern="[0-9]+" title="Solo números" required placeholder="Id del Emprendedor"type="text" name="id_empresario">
          <input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required placeholder="Nombre"type="text" name="nombre">

        </fieldset>
        <input type="submit" class="btn center" value="INSERTAR">
      </form>
      <div class="ju-grid" style="margin-top: -25px;">
        <button class="btn" onclick="cancelar1_1()">CANCELAR</button><!-------AQUI------------->
      </div>
      <script>
        function cancelar1_1() {
          document.querySelector('.p-1').classList.remove('show');//-------AQUI-------------
          document.querySelector('.fondo-blur').classList.remove('show');
          setTimeout(() => {
            document.querySelector('.p-1').style.display = "none";//-----------AQUI--------------------
            document.querySelector('.fondo-blur').style.display = "none";
          }, 500);
        }
      </script>
    </div>
  <!--?-EMPRESA ELIMINAR--------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <div class="emergente p-2"><!------------AQUI----------------->
      <form method="post" action="Empresa/eliminar.php" class="ju-grid">
        <fieldset style="width: auto;">
          <legend style="color: white;">ELIMINAR EMPRESA</legend>

          <input pattern="[0-9]+" title="Solo números" required placeholder="Id de la empresa"type="text" name="id_empresa">

        </fieldset>
        <input type="submit" class="btn center" value="ELIMINAR">
      </form>
      <div class="ju-grid" style="margin-top: -25px;">
        <button class="btn" onclick="cancelar1_2()">CANCELAR</button><!-------AQUI------------->
      </div>
      <script>
        function cancelar1_2() {//<!-------AQUI------------->
          document.querySelector('.p-2').classList.remove('show');//-------AQUI-------------
          document.querySelector('.fondo-blur').classList.remove('show');
          setTimeout(() => {
            document.querySelector('.p-2').style.display = "none";//-----------AQUI--------------------
            document.querySelector('.fondo-blur').style.display = "none";
          }, 500);
        }
      </script>
    </div>
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
   <!--?--EMPRESARIOS INSERTAR-------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="emergente p-3"><!------------AQUI----------------->
      <form method="post" action="Empresarios/insertar.php" class="ju-grid">
        <fieldset style="width: auto;">
          <legend style="color: white;">INSERTAR EMPRESARIOS</legend>

          <input name="nombre" placeholder="Nombre" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required type="text">
          <input name="apeidos" placeholder="Apeidos" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required type="text">
          <input name="edad" placeholder="Edad" pattern="[0-9]+" title="Solo números" required type="text">
          <input name="nacionalidad" placeholder="Nacionalidad" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras" required type="text">
          <input name="contraseña" placeholder="Contraseña" pattern="[0-9]+" title="Solo números" required type="password">

        </fieldset>
        <input type="submit" class="btn center" value="INSERTAR">
      </form>
      <div class="ju-grid" style="margin-top: -25px;">
        <button class="btn" onclick="cancelar2_1()">CANCELAR</button><!-------AQUI------------->
      </div>
      <script>
        function cancelar2_1() {
          document.querySelector('.p-3').classList.remove('show');//-------AQUI-------------
          document.querySelector('.fondo-blur').classList.remove('show');
          setTimeout(() => {
            document.querySelector('.p-3').style.display = "none";//-----------AQUI--------------------
            document.querySelector('.fondo-blur').style.display = "none";
          }, 500);
        }
      </script>
    </div>
  <!--?-EMPRESARIOS ELIMINAR--------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <div class="emergente p-4"><!------------AQUI----------------->
      <form method="post" action="Empresarios/eliminar.php" class="ju-grid">
        <fieldset style="width: auto;">
          <legend style="color: white;">ELIMINAR EMPRESARIOS</legend>

          <input pattern="[0-9]+" title="Solo números" required placeholder="Id del empresario" type="text" name="id_empresario">

        </fieldset>
        <input type="submit" class="btn center" value="ELIMINAR">
      </form>
      <div class="ju-grid" style="margin-top: -25px;">
        <button class="btn" onclick="cancelar2_2()">CANCELAR</button><!-------AQUI------------->
      </div>
      <script>
        function cancelar2_2() {//<!-------AQUI------------->
          document.querySelector('.p-4').classList.remove('show');//-------AQUI-------------
          document.querySelector('.fondo-blur').classList.remove('show');
          setTimeout(() => {
            document.querySelector('.p-4').style.display = "none";//-----------AQUI--------------------
            document.querySelector('.fondo-blur').style.display = "none";
          }, 500);
        }
      </script>
    </div>
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--?---------------------------------------------------------------------------------------------------------------------------------------------------------- -->

  <!--TODO---------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <section class="container-grand">
    <div class="container-father">
      <fieldset class="over-y over-x" style="max-height: 400px;">
        <legend style="color: white;">Empresas</legend>
        <?php
		        include 'config.php';
            $sql = "SELECT * FROM empresa";
            $result = $conn->query($sql);
            if ($result) {
                echo "
                            <table border='1' align='center' class='over-x'>
                            <tr>
                            <th style='color:white;'>ID</th>
                            <th style='color:white;'>ID EMPRESARIO</th>
                            <th style='color:rgb(255, 255, 255);'>NOMBRE</th>
                            </tr>";
                if ($result) {

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                <td style='color:white;'>" .$row["id_empresa"] . "</td>
                <td style='color:white;'>" .$row["id_empresario"] . "</td>
                <td style='color:rgb(255, 255, 255);'>" .$row["nombre"] . " </td>  
                </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron resultados</td></tr>";
                }
            }
            echo "</table>";
			mysqli_close($conn);
            ?>
      </fieldset>
      <fieldset style="width: 100%;display: grid;justify-content: space-evenly;text-align: center;">
        <h4 style="font-size: 30px;">🏬</h4>
        <form action="Empresa/consultarUp._empresas.php" method="post" style="margin:0;">
        <label style="color: white;">ID
          <input pattern="[0-9]+" title="Solo numeros" type="text" required placeholder="(SOLO PARA CONSULTAR)" name="id_consultar">
        </label>
        <input type="submit" class="btn" required value="CONSULTAR" style="width: 100%;">
        </form>
        <button class="btn" onclick="insertar1_1()">INSERTAR</button>
        <button class="btn" onclick="eliminar1_3()">ELIMINAR</button>
      </fieldset>
      
      <script>
        function insertar1_1() {
          document.querySelector('.p-1').style.display = "grid";
          document.querySelector('.fondo-blur').style.display = "grid";
          setTimeout(() => {
            document.querySelector('.fondo-blur').classList.add('show');
            document.querySelector('.p-1').classList.add('show');
          }, 500);
        }
        function eliminar1_3() {
          document.querySelector('.p-2').style.display = "grid";
          document.querySelector('.fondo-blur').style.display = "grid";
          setTimeout(() => {
            document.querySelector('.fondo-blur').classList.add('show');
            document.querySelector('.p-2').classList.add('show');
          }, 500);
        }
      </script>
      </div>
      </section>
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <section class="container-grand" style="max-width: 900px;">
    <div class="container-father">
      <fieldset class="over-y over-x">
        <legend style="color: white;">Empresarios</legend>
        <?php
		        include 'config.php';
            $sql = "SELECT * FROM empresarios";
            $result = $conn->query($sql);
            if ($result) {
                echo "
                            <table border='1' align='center' class='over-x'>
                            <tr>
                            <th style='color:white;'>ID EMPRESARIO</th>
                            <th style='color:white;'>NOMBRE</th>
                            <th style='color:white;'>APEIDOS</th>
                            <th style='color:white;'>EDAD</th>
                            <th style='color:white;'>NACIONALIDAD</th>
                            <th style='color:white;'>CONTRASEÑA</th>
                            </tr>";
                if ($result) {

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td style='color:white;'>" .$row["id_empresario"] . "</td>
                        <td style='color:white;'>" .$row["nombre"] . "</td>
                        <td style='color:white;'>" .$row["apeidos"] . "</td>
                        <td style='color:white;'>" .$row["edad"] . "</td>
                        <td style='color:white;'>" .$row["nacionalidad"] . "</td>
                        <td style='color:white;'>" .$row["contrasena"] . "</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron resultados</td></tr>";
                }
            }
            echo "</table>";
			mysqli_close($conn);
            ?>
      </fieldset>
      <fieldset style="width: 100%;display: grid;justify-content: space-evenly;text-align: center;">
        <h4 style="font-size: 30px;">🏬</h4>
        <form action="Empresarios/consultar.php" method="post" style="margin:0;">
        <label style="color: white;">ID
          <input pattern="[0-9]+" title="Solo numeros" type="text" required placeholder="(SOLO PARA CONSULTAR)" name="id_consultar">
        </label>
        <input type="submit" class="btn" required value="CONSULTAR" style="width: 100%;">
        </form>
        <button class="btn" onclick="insertar2_1()">INSERTAR</button>
        <button class="btn" onclick="eliminar2_3()">ELIMINAR</button>
      </fieldset>
      
      <script>
        function insertar2_1() {
          document.querySelector('.p-3').style.display = "grid";
          document.querySelector('.fondo-blur').style.display = "grid";
          setTimeout(() => {
            document.querySelector('.fondo-blur').classList.add('show');
            document.querySelector('.p-3').classList.add('show');
          }, 500);
        }
        function eliminar2_3() {
          document.querySelector('.p-4').style.display = "grid";
          document.querySelector('.fondo-blur').style.display = "grid";
          setTimeout(() => {
            document.querySelector('.fondo-blur').classList.add('show');
            document.querySelector('.p-4').classList.add('show');
          }, 500);
        }
      </script>
      </div>
      </section>
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!--TODO ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

</body>

</html>