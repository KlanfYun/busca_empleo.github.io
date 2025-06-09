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
	function Perfil() { window.location = "Perfil.html" }
	function Trabajos() { window.location = "Trabajos.php" }
	function Empresas() { window.location = "Empresas.php" }
</script>
<style>
	.borra {
	transition: 2s;
	top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
	position: fixed;
	z-index: 32;
	justify-content: center;
	place-items: center;
	text-align: left;
	display: none;
	padding: 10px;
	backdrop-filter: blur(30px);
	color: rgb(0, 0, 0);
	border: none;
	border: 1px solid rgb(221, 221, 221);
	border-bottom: 7px solid grey;
	border-radius: 20px;
	overflow-y: auto;
	max-height: 700px;
}

.bolar{
	transition: 2s;
	top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
	position: fixed;
	z-index: 15	;
	justify-content: center;
	place-items: center;
	display: none;
	backdrop-filter: blur(30px);
	padding: 10px;
	color: rgb(0, 0, 0);
	border: none;
	border: 1px solid rgb(221, 221, 221);
	border-bottom: 7px solid grey;
	border-radius: 20px;
}

.bolar input{
	color: rgb(255, 255, 255);
	border: 0.5px solid grey;
	border-bottom: 3px solid grey;
	margin: 4px;
	background-color: rgb(192, 192, 192, 0.3);
}

.curri, .actualizar, .consul, .borra, .bolar{
		background-color: rgba(94, 94, 94, 0.2); /* Oscurece el área */
    -webkit-backdrop-filter: blur(15px);
	backdrop-filter: blur(30px);
}

input{
	color:white;
}
</style>
<!--***************************************************************************  ///ACTUALIZAR datos-->
<form method="post" action="php/datos.php" class="actualizar">
	<h1 style="color:white;text-shadow:0 0 13px black;">Actualizar Datos</h1>

	<div class="inputbox">
		<label>Nombre<input style="color:black;" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Nombre" name="nombre"></label>
	</div>

	<div class="inputbox">
		<label>Apeidos<input style="color:rgb(0, 0, 0);" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Apeidos" name="apeidos"></label>
	</div>

	<div class="inputbox">
		<label>Edad<input style="color:rgb(0, 0, 0);" pattern="[0-9]+" title="Solo numero, sin letras" type="text" required placeholder="Edad" name="edad"></label>
	</div>

	<div class="inputbox">
		<label>Nacionalidad<input style="color:rgb(0, 0, 0);" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Nacionalidad" name="nacionalidad"></label>
	</div>

	<fieldset>
		<legend style="color:white;">CONFIRMAR CAMBIOS</legend>
		<div class="inputbox">
		<label>Usuario<input style="color:white;" pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="password" required placeholder="Usuario de registro"
				name="usuario"></label>
	</div>
	<div class="inputbox">
		<label>Contraseña<input style="color:white;" pattern="[0-9]+" title="Solo numero, sin letras" type="password" required placeholder="Contraseña Actual"
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
<!--***************************************************************************  curriiiii-->
<form method="post" action="php/curri.php" class="curri">
	<h1 style="color: white;text-shadow: 0 0 13px black;">CURRICULUM</h1>

	<fieldset>
		<legend style="color: rgb(255, 255, 255);">Datos personales </legend>
		<div class="dis-flex">
			<label>Nombre Completo<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Nombre" name="nombre"></label>
			<label>Telefono<input pattern="[0-9]+" title="Solo numero, sin letras" type="text" required placeholder="Telefono" name="telefono"></label>
			<label>Correo Electronico<input type="text" required placeholder="Correo" name="correo"></label>
			<label>CURP<input type="text" required placeholder="CURP" name="curp"></label>
		</div>
		<div class="dis-flex">
			<label for="">Sexo
				<select name="sexo" id="">
					<option style="color:black;" value="Femenino">Femenino</option>
					<option style="color:black;" value="Masculino">Masculino</option>
					<option style="color:black;" value="Otro">Otro</option>
				</select>
			</label>
			<label>RFC<input type="text" required placeholder="RFC" name="rfc"></label>
			<label>Ciudad<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+"t type="text" required placeholder="Ciudad" name="ciudad"></label>
			<label>Nacionalidad<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Nacionalidad" name="nacionalidad"></label>
		</div>

		<div class="dis-flex">
			<label for="">Licencia de Manejo
				<select name="licencia" id="">
					<option style="color:black;" value="No">No</option>
					<option style="color:black;" value="Si">Si</option>
				</select>
			</label>
			<label>Seguro Social<input pattern="[0-9]+" title="Solo numero, sin letras" type="text" required placeholder="IMSS" name="imss"></label>
			<label>Tu meta en la Vida<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Meta de la vida" name="meta"></label>
		</div>
	</fieldset>

	<fieldset>
		<legend style="color: rgb(255, 255, 255);">Perfil Profesional / Resumen </legend>

		<div class="dis-flex over-y" style="max-height:300px;">
			<label>Resumen de su Experiencia<textarea type="text" required
					placeholder="Resumen de tu experiencia laboral, No mayor a 250 palabras por que se perdera texto"
					name="resumen-xp"
					style="width: 400px;max-width: 400px;max-height: 100px; height: 100px;"></textarea></label>
		</div>

		<div class="dis-flex over-y" style="max-height:300px;">
			<label>Experiencia Laboral<input type="text" required placeholder="Cantidad de tiempo"
					name="experiencia_laboral"></label>
			<label>Nombre del puesto<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Puesto" name="puesto"></label>
			<label>Empresa<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Empresa" name="empresa"></label>
		</div>
		<div class="dis-flex over-y" style="max-height:300px;">
			<label>Ubicación<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Ubicaion" name="ubicacion"></label>
			<label>Fecha de inicio<input type="text" required placeholder="Fecha de inicio" name="inicio"></label>
			<label>Fecha de fin<input type="text" required placeholder="Fecha de fin" name="fin"></label>
		</div>

		<div class="dis-flex over-y" style="max-height:300px;">
			<label>Breve descripción del trabajo<textarea type="text" required
					placeholder="Tareas que realizaba en su espacio laboral ultimo" name="des-trabajo"
					style="width: 400px;max-width: 400px;max-height: 100px; height: 100px;"></textarea></label>
		</div>

		<div class="dis-flex over-y" style="max-height:300px;">
			<label for="">Formació Academica
				<select name="formacion" id="">
					<option value="Primaria">Primaria</option>
					<option value="Secundaria">Secundaria</option>
					<option value="Preparatoria">Preparatoria</option>
					<option value="Universidad">Universidad</option>
				</select>
			</label>
			<label>Titulos<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Titulos" name="titulos"></label>
		</div>

		<div class="dis-flex over-y" style="max-height:300px;">
			<label>Institución Educativa<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Institucion"
					name="institucion"></label>
			<label>Tecnicas Optenidas<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Word,Photoshop,Exel,Power Point ect etc"
					name="tecnicas"></label>
			<label>Idiomas<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="No se acepta tu lengua originaria ovio"
					name="idioma"></label>
		</div>

		<div class="dis-flex over-y" style="max-height:300px;">
			<label>Certificados<input type="text" required placeholder="Certificados" name="certificados"></label>
			<label>Proyectos<input type="text" required placeholder="Proyectos" name="proyectos"></label>
		</div>
	</fieldset>

	<fieldset>
		<legend style="color:white;">Confirmar</legend>
		<label>Usuario<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Usuario" name="usu"></label>
		<label>Contraseña<input pattern="[0-9]+" title="Solo numero, sin letras" type="password" required placeholder="Contraseña" name="contra"></label>
	</fieldset>

	<input type="submit" value="Actualizar Curriculum"
		style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<h4 onclick="cancelar23()" align="center"
		style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px;">
		CANCELAR</h4>

	<script>
		function cancelar23() {
			document.querySelector('.curri').style.display = 'none';
		}
		function CURRICULUM() {
			document.querySelector('.curri').style.display = 'grid';
		}
		</script>
</form>
<!-- borra ------------------------------------------------------------------------------------------------------------->
 <form method="post" action="php/borra_curri.php" class="bolar">
	<h1 style="color: white;text-shadow: 0 0 13px rgb(255, 255, 255);">BORRAR CURRICULUM</h1>

	<fieldset>
		<legend style="color:white;">Confirmar</legend>
		<label style="color: white;">Usuario<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" type="text" required placeholder="Usuario" name="usu"></label>
		<label style="color: white;">Contraseña<input pattern="[0-9]+" title="Solo numero, sin letras" type="password" required placeholder="Contraseña" name="contra"></label>
	</fieldset>

	<input type="submit" value="BORRAR"
		style="background: none;background-color: rgb(114, 114, 114); color: black;">
	<h4 onclick="cancelar2w3()" align="center"
		style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px;">
		CANCELAR</h4>

	<script>
		function cancelar2w3() {
			document.querySelector('.bolar').style.display = 'none';
		}
		function bolar() {
			document.querySelector('.bolar').style.display = 'grid';
		}
		</script>
</form>
<!-- borra **************************************************************************************************************-->
<!--***************************************************************************  asas-->
<!--***************************************************************************  ///CONSULTAR-->
<form class="consul over-y" style="max-height: 700px;color: white;text-align: left;">
<?php
			include 'php/config.php';

            $sql = "SELECT * FROM usuarios";
            $result = $conn->query($sql);
            if ($result) {
                echo "
				<h1 style='color:white;font-size: 27px;text-shadow: 0 0 13px black;'>USUARIOS EN LA PLATAFORMA</h1>
                            <table border='1' align='center'>
                            <tr>
                            <th style='color:white;font-size: medium;'>ID</th>
                            <th style='color:white;font-size: medium;'>Nombre</th>
                            <th style='color:white;font-size: medium;'>Apeidos</th>
                            <th style='color:white;font-size: medium;'>Edad</th>
                            <th style='color:white;font-size: medium;'>Nacionalidad</th>
                            <th style='color:white;font-size: medium;'>Contraseña</th>
                            </tr>";
                if ($result) {

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                <td style='text-shadow:0 0 13px black;'>" .$row["id_usuario"] . "</td>
                <td style='text-shadow:0 0 13px black;'>" .$row["nombre"] . " </td>  
                <td style='text-shadow:0 0 13px black;'>" .$row["apeidos"] . " </td>    
                <td style='text-shadow:0 0 13px black;'>" .$row["edad"] . " </td>  
                <td style='text-shadow:0 0 13px black;'>" .$row["nacionalidad"] . " </td>  
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
	</script>
</form>


<!--***************************************************************************  ///CONSULTAR datos-->
<!--***************************************************************************  curriiiii-->
<form method="post" action="php/borrar_perfil.php" class="borra">
    <h1 style="color: white;text-shadow: 0 0 13px black;">Borrar Datos</h1>

	<fieldset>
		<legend>CONFIRMAR</legend>
		
	<div class="inputbox">
		<label style="color: white;">Nombre<input  pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Nombre" name="usuario"></label>
	</div>

	<div class="inputbox">
		<label>Contraseña<input pattern="[0-9]+" title="Solo numero, sin letras" type="text" required placeholder="Contraseña" name="contraseña"></label>
	</div>

	</fieldset>
    <input type="submit" value="Confirmar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
    <h4 onclick="cancelar22s4()" align="center"
        style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px; margin: 5px;">
        CANCELAR</h4>
    <script>
        function cancelar22s4() {
            document.querySelector('.borra').style.display = 'none';
        }
        function borra() {
            document.querySelector('.borra').style.display = 'grid';
        }
    </script>
</form>
<!--***************************************************************************  asas-->
<!-- ?ssddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd bodyyyyy -->

<body>
	<header class="indice1">
		<button onclick="cerrar()" class="boton-header" style="margin: 5px;">CERRAR SESIÓN </button>
		<img src="../Img/mias/Recurso 1 .png" style="width: 35px;height: 35px;margin: 6px;">
		<input type="text" style="border: solid rgb(0, 0, 0,0.2) 1px;margin: 5px;">
		<button class="btns-indice1" onclick="inicio()">Inicio</button>
		<button class="btns-indice1" onclick="Perfil()" style="background-color: azure;color: black;">Perfil</button>
		<button class="btns-indice1" onclick="Trabajos()">Trabajo</button>
		<button class="btns-indice1" onclick="Empresas()">Empresas</button>
	</header>

	<header id="header">
		<div class="logo" style="display: flex;justify-content: center;">
			<p style="font-size: 60px;padding: 20px; color: white;"> 👤 PERFIL </p>
		</div>
	</header>
	<!--!-----------------------------------------  -->
	<section id="main">
		<div class="inner">
			<section id="three" class="wrapper">
				<div class="spotlight alt">
					<div class="image flush"><img src="../Img/mias/Aptitudes-1.jpg" alt="" width="700" height="525">
					</div>
					<div class="inner">
						<h3 style="text-align: left;color: white;">Tú Curriculum</h3>
						<p style="text-align: left;color: white;">
							En esta sección encontrarás un resumen detallado de mi trayectoria profesional y académica.
							Cada etapa refleja no solo el conocimiento
							adquirido, sino también el compromiso, la responsabilidad y la pasión que pongo en cada
							proyecto en el que participo. 🎓💼 <br>
							✅ Contratar a alguien con experiencia y habilidades demostrables. <br>
							✅ Encontrar un perfil adaptable y comprometido con el trabajo en equipo. <br>
							✅ Identificar a un profesional con capacidad para resolver problemas de forma eficiente.
							<br>
							<i style="color: red;">¡ Acción Nesesaria !</i>
						</p>
						<button style="color: black;" onclick="CURRICULUM()">Llenar Curriculum</button>
						<button style="color: black;" onclick="bolar()">Borrar Curriculum</button>
					</div>
				</div>
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
						<button style="color: black;" onclick="actualizar()">ACTUALIZAR DATOS</button>
						<button style="color: black;" onclick="consultar()" name="conss">CONSULTAR DATOS</button>
						<button style="color: black;" onclick="borra()" name="conss">BORRAR PERFIL</button>
							<script>
							function consultar() {
								document.querySelector('.consul').style.display = 'grid';
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

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>


