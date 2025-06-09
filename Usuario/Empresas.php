<!DOCTYPE HTML>
<html>

<head>
	<title>Perfil</title>
	<meta charset="utf-8">
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/main.css">
</head>
<script>
	function cerrar() {
		window.location = ("../Login.html");
	}
	function inicio() { window.location = "index_.html" }
	function Perfil() { window.location = "Perfil.php" }
	function Trabajos() { window.location = "Trabajos.php" }
	function Empresas() { window.location = "Empresas.php" }
</script>
<style>
	.curri, .actualizar, .consul, .borra, .bolar{
		background-color: rgba(94, 94, 94, 0.2); /* Oscurece el área */
    -webkit-backdrop-filter: blur(15px);
	backdrop-filter: blur(30px);
}
</style>
<!--***************************************************************************  curriiiii-->
<form method="post" action="../php/Perfil.php" class="curri">
	<h1 style="color: white;text-shadow: 0 0 13px black;">Empresas</h1>

	<fieldset class="over-y" style="max-height: 700px;color: white;text-align: left;">
		<legend style="color:white;">EMPRESAS</legend>
		<?php
		include 'php/config.php';
            $sql = "SELECT * FROM empresa";
            $result = $conn->query($sql);
            if ($result) {
                echo "
                            <table border='1' align='center'>
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

	<h4 onclick="cancelar2()" align="center"
		style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px;">
		CANCELAR</h4>
	<script>
		function cancelar2() {
			document.querySelector('.curri').style.display = 'none';
		}
		function CURRICULUM() {
			document.querySelector('.curri').style.display = 'grid';
		}
	</script>
</form>
<!--***************************************************************************  asas-->

<body>
	<header class="indice1">
		<button onclick="cerrar()" class="boton-header" style="margin: 5px;">CERRAR SESIÓN </button>
		<img src="../Img/mias/Recurso 1 .png" style="width: 35px;height: 35px;margin: 6px;">
		<input type="text" style="border: solid rgb(0, 0, 0,0.2) 1px;margin: 5px;">
		<button class="btns-indice1" onclick="inicio()">Inicio</button>
		<button class="btns-indice1" onclick="Perfil()">Perfil</button>
		<button class="btns-indice1" onclick="Trabajos() ">Trabajo</button>
		<button class="btns-indice1" onclick="Empresas()"
			style="background-color: azure;color: black;">Empresas</button>
	</header>

	<header id="header">
		<div class="logo" style="display: flex;justify-content: center;">
			<p style="font-size: 60px;padding: 20px; color: white;"> 🏬 Emrpesas </p>
		</div>
	</header>
	<!--!-----------------------------------------  -->
	<section id="main">
		<div class="inner">
			<section id="three" class="wrapper">
				<div class="spotlight alt">
					<div class="image flush"><img src="../Img/mias/Flux_Dev_Personas_trabajando_en_equipo_en_una_oficina_funciona_3.jpg" alt="" width="700" height="525">
					</div>
					<div class="inner">
						<h3 style="text-align: left;color: white;">Empresas</h3>
						<p style="text-align: left;color: white;">
							🔍 Componentes clave de una empresa <br>
							Objetivo<br>
							Su propósito principal es generar valor, ya sea económico, social o ambas cosas.<br><br>

							Puede tener fines de lucro (como las empresas privadas) o no lucrativos (como fundaciones o<br>
							cooperativas).<br><br>

							Organización<br>
							Tiene una estructura jerárquica o funcional definida (dirección, gerencia, departamentos).<br><br>
							<br>
						</p>
						<button style="color: black;" onclick="CURRICULUM()">REVISAR</button>
						<script>
							function revisar() {

							}
						</script>
					</div>
				</div>
			</section><!---Las empresas-->
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


	<div class="copyright">
		Site made with <a href="https://templated.co/">TEMPLATED.CO</a>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>