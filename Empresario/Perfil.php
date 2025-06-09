<!DOCTYPE HTML>
<html>

<head>
	<title>Perfil</title>
	<meta charset="utf-8">
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/main2.css">
</head>
<script>
	function cerrar() {
		window.location = ("../Login.html");
	}
	function inicio() { window.location = "index_.html" }
	function Perfil() { window.location = "Perfil.php" }
	function Trabajos() { window.location = "Trabajos.html" }

</script>
<!--***************************************************************************  ///ACTUALIZAR datos-->
<form method="post" action="php/datos.php" class="actualizar">
	<h1 style="color: white;">Actualizar Datos</h1>

	<div class="inputbox">
		<label>Nombre<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Nombre" name="nombre"></label>
	</div>

	<div class="inputbox">
		<label>Apeidos<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Apeidos" name="apeidos"></label>
	</div>

	<div class="inputbox">
		<label>Edad<input pattern="[0-9]+" title="Solo numero, sin letras" type="text" required placeholder="Edad" name="edad"></label>
	</div>

	<div class="inputbox">
		<label>Nacionalidad<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Nacionalidad" name="nacionalidad"></label>
	</div>

	<fieldset>
		<legend>CONFIRMAR CAMBIOS</legend>
		<div class="inputbox">
		<label>Empresario<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Usuario de registro"
				name="usuario"></label>
	</div>
	<div class="inputbox">
		<label>Contraseña<input pattern="[0-9]+" title="Solo numero, sin letras"  type="password" required placeholder="Contraseña Actual"
				name="contraseña"></label>
	</div>
	</fieldset>

	<input type="submit" value="Actualizar datos"
		style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<h4 onclick="cancelar()" align="center"
		style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px;">
		CANCELAR</h4>
	<script>
		function cancelar() {
			document.querySelector('.actualizar').style.display = 'none';
		}
		function actualizar() {
			document.querySelector('.actualizar').style.display = 'grid';
		}
	</script>
</form>
<!--***************************************************************************  ///ACTUALIZAR datos-->
<!--***************************************************************************  admini-->
<form method="post" action="../php/Perfil.php" class="admini">
	<h1 style="color: white;text-shadow: 0 0 13px black;">Administrar Trabajos</h1>

	<fieldset>
		<legend style="color: rgb(255, 255, 255);">Trabajos</legend>
		<div class="dis-flex">

		</div>
	</fieldset>

	<input type="submit" value="Eliminar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<input type="submit" value="Modificar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<input type="submit" value="Ingresar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<h4 onclick="cancelar2()" align="center"
		style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px;">
		CANCELAR</h4>
	<script>
		function cancelar2() {
			document.querySelector('.admini').style.display = 'none';
		}
		function CURRICULUM() {
			document.querySelector('.admini').style.display = 'grid';
		}
	</script>
</form>
<!--***************************************************************************  asas-->
<!--***************************************************************************  admini-->
<form method="post" action="../php/Perfil.php" class="vaca">
	<h1 style="color: white;text-shadow: 0 0 13px black;">Administrar Vacantes</h1>

	<fieldset>
		<legend style="color: rgb(255, 255, 255);">Vacantes</legend>
		<div class="dis-flex">

		</div>
	</fieldset>

	<input type="submit" value="Eliminar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<input type="submit" value="Modificar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<input type="submit" value="Ingresar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<h4 onclick="cancelar3()" align="center"
		style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px;">
		CANCELAR</h4>
	<script>
		function cancelar3() {
			document.querySelector('.vaca').style.display = 'none';
		}
		function vacante() {
			document.querySelector('.vaca').style.display = 'grid';
		}
	</script>
</form>
<!--***************************************************************************  asas-->
<!--***************************************************************************  ///CONSULTAR-->
<form class="consul">
<?php
	    include 'php/config.php';
            $sql = "SELECT * FROM empresarios";
            $result = $conn->query($sql);
            if ($result) {
                echo "
                            <table border='1' align='center'>
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apeidos</th>
                            <th>Edad</th>
                            <th>Nacionalidad</th>
                            <th>Contraseña</th>
                            </tr>";
                if ($result) {

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                <td>" .$row["id_empresario"] . "</td>
                <td>" .$row["nombre"] . " </td>  
                <td>" .$row["apeidos"] . " </td>    
                <td>" .$row["edad"] . " </td>  
                <td>" .$row["nacionalidad"] . " </td>  
                <td> ******** </td>  
                </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron resultados</td></tr>";
                }
            }
            echo "</table>";
			mysqli_close($conn);
            ?>
	<button onclick="cancelar2()">CERRAR</button>
	<script>
		function cancelar2() {
			document.querySelector('.consul').style.display = 'none';
		}
		function consultar() {
			document.querySelector('.consul').style.display = 'grid';
		}
	</script>
</form>


<!--***************************************************************************  ///CONSULTAR datos-->
<!-- ?ssddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd bodyyyyy -->

<body>
	<header class="indice1">
		<button onclick="cerrar()" class="boton-header" style="margin: 5px;">CERRAR SESIÓN </button>
		<img src="../Img/mias/Recurso 1 .png" style="width: 35px;height: 35px;margin: 6px;">
		<input type="text" style="border: solid rgb(0, 0, 0,0.2) 1px;margin: 5px;">
		<button class="btns-indice1" onclick="inicio()">Inicio</button>
		<button class="btns-indice1" onclick="Perfil()" style="background-color: azure;color: black;">Perfil</button>
		<button class="btns-indice1" onclick="Trabajos()">Trabajo</button>
	</header>

	<header id="header">
		<div class="logo" style="display: flex;justify-content: center;">
			<p style="font-size: 60px;padding: 20px; color: white;">👤 PERFIL </p>
		</div>
	</header>
	<!--!-----------------------------------------  -->
	<section id="main">
		<div class="inner">
			<section id="three" class="wrapper">
				<div class="spotlight">
					<div class="image flush"><img
							src="../Img/mias/Premium Vector _ Badge with personal data 3d icon.jpg" alt="" width="700"
							height="525"></div>
					<div class="inner dis-jus">
						<h3>DATOS PERSONALES</h3>
						<b>ID</b><label for=""></label><br>
						<b>NOMBRE</b><label for=""></label><br>
						<b>APEIDOS</b><label for=""></label><br>
						<b>EDAD</b><label for=""></label><br>
						<b>NACIONALIDAD</b><label for=""></label><br>
						<b>CONTRASEÑA</b>******</label><br>
						<button style="color: black;" onclick="actualizar()">ACTUACLIZAR DATOS</button>
						<button style="color: black;" onclick="consultar()" name="conss">CONSULTAR DATOS</button>
					</div>
				</div>
			</section><!--*---------------------------------------------------------------------------------  -->
		</div>
	</section>


	<footer id="footer">
		<div class="container">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
		</div>
	</footer>


	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>