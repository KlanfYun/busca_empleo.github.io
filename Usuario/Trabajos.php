<!DOCTYPE HTML>
<html>

<head>
    <title>Perfil</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
</head>
<style>
    
.solicitarrr {
	transition: 2s;
	top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
	position: fixed;
	z-index: 23;
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
.solicitarrr input{
	color: white;
	border: 0.5px solid grey;
	border-bottom: 3px solid grey;
	margin: 4px;
	background-color: rgb(192, 192, 192, 0.3);
}
</style>
<script>
    function cerrar() {
        window.location = ("../Login.html");
    }
    function inicio() { window.location = "index_.html" }
    function Perfil() { window.location = "Perfil.php" }
    function Trabajos() { window.location = "Trabajos.php" }
    function Empresas() { window.location = "Empresas.php" }
</script>
<!--***************************************************************************  curriiiii-->
<form method="post" action="php/solicitar.php" class="solicitarrr">
    <h1 style="color: white;text-shadow: 0 0 13px black;">Solicitar Trabajos</h1>

    <input type="submit" value="Revisar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
    <h4 onclick="cancelar224()" align="center"
        style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px; margin: 5px;">
        CANCELAR</h4>
    <script>
        function cancelar224() {
            document.querySelector('.solicitarrr').style.display = 'none';
        }
        function soli() {
            document.querySelector('.solicitarrr').style.display = 'grid';
        }
    </script>
</form>
<!--***************************************************************************  asas-->
<!--***************************************************************************  soli-->
<form method="post" action="php/reTrabajos.php" class="curri">
    <h1 style="color: white;text-shadow: 0 0 13px black;">Trabajos</h1>

    <fieldset>
        <legend style="color: rgb(255, 255, 255);">Revisar</legend>
        <div class="dis-flex">
            <label>Nombre<input pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+" title="Solo letras, sin números" type="text" required placeholder="Nombre" name="usuario"></label>
            <label>Contraseña<input pattern="[0-9]+" title="Solo numero, sin letras" type="text" required placeholder="Contraseña" name="contraseña"></label>
        </div>
    </fieldset>

    <input type="submit" value="Revisar" style="background: none;background-color: rgb(114, 114, 114); color: black;">
    <h4 onclick="cancelar22()" align="center"
        style="cursor: pointer;border: solid rgb(87, 87, 87) 1px;border-radius: 10px;background-color: rgb(133, 133, 133);color: rgb(255, 255, 255);padding: 10px;">
        CANCELAR</h4>
    <script>
        function cancelar22() {
            document.querySelector('.curri').style.display = 'none';
        }
        function trabajoss() {
            document.querySelector('.curri').style.display = 'grid';
        }
    </script>
</form>
<!--***************************************************************************soli-->
<!-- ?ssddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd bodyyyyy -->

<body>
    <header class="indice1">
        <button onclick="cerrar()" class="boton-header" style="margin: 5px;">CERRAR SESIÓN </button>
        <img src="../Img/mias/Recurso 1 .png" style="width: 35px;height: 35px;margin: 6px;">
        <input type="text" style="border: solid rgb(0, 0, 0,0.2) 1px;margin: 5px;">
        <button class="btns-indice1" onclick="inicio()">Inicio</button>
        <button class="btns-indice1" onclick="Perfil()">Perfil</button>
        <button class="btns-indice1" onclick="Trabajos()" style="background-color: azure;color: black;">Trabajo</button>
        <button class="btns-indice1" onclick="Empresas()">Empresas</button>
    </header>

    <header id="header">
        <div class="logo" style="display: flex;justify-content: center;">
            <p style="font-size: 60px;padding: 20px; color: white;"> 🗂️ Trabajos</p>
        </div>
    </header>
    <!--!-----------------------------------------  -->
    <section id="main">
        <div class="inner">
            <section id="three" class="wrapper">
                <div class="spotlight alt">
                    <div class="image flush"><img
                            src="../Img/mias/Flux_Dev_Personas_trabajando_en_equipo_en_una_oficina_funciona_0.jpg"
                            alt="" width="700" height="525">
                    </div>
                    <div class="inner">
                        <h3 style="text-align: left;color: white;">Administrar Trabajos</h3>
                        <p class="over-y" style="max-height: 300px;color: white;text-align: left;">
                            🧭 TRABAJOS - Descripción para tus usuarios <br>
                            Explora cientos de oportunidades laborales adaptadas a tu perfil. <br>
                            Aquí encontrarás los empleos más recientes publicados por empresas activas, organizados por
                            <br>
                            área, ubicación, tipo de contrato y más. <br>
                            Postúlate fácilmente, guarda tus favoritos y empieza hoy tu camino hacia un nuevo futuro
                            <br>
                            profesional. <br> <br>

                            ✅ Versión breve (para interfaces más compactas): <br>
                            Descubre ofertas de empleo actualizadas y encuentra el trabajo ideal para ti en pocos clics.
                            <br>
                        </p>
                        <button style="color: black;" onclick="trabajoss()">REVISAR</button>
                    </div>
                </div>
                <div class="spotlight alt">
                    <div class="image flush"><img
                            src="../Img/mias/Flux_Dev_Personas_trabajando_en_equipo_en_una_oficina_funciona_2.jpg"
                            alt="" width="700" height="525">
                    </div>
                    <div class="inner">
                        <h3 style="text-align: left;color: white;">Solicitar un trabajo</h3>
                        <p class="over-y" style="max-height: 300px;color: white;text-align: left;">
                            🧾 Frase: "Solicitar trabajo" - Información para tus usuarios <br>
                            ✨ ¿Qué significa "Solicitar trabajo"?<br>
                            La opción "Solicitar trabajo" permite al usuario enviar su interés formal por una vacante<br>
                            disponible dentro de la empresa, proyecto o plataforma. Es el primer paso para iniciar un<br>
                            proceso de selección, entrevista o contacto con un empleador.<br><br>

                            📌 ¿Qué pasa cuando haces clic en "Solicitar trabajo"?<br>
                            Accedes a un formulario donde puedes cargar tu currículum, portafolio o perfil personal.<br>

                            Tu información se envía directamente al equipo de reclutamiento o responsable del proyecto.<br>

                            Puedes incluir un mensaje de presentación para destacar tus habilidades o motivación.<br><br>

                            ✅ Requisitos comunes que puede pedir el sistema:<br>
                            Nombre completo<br>

                            Correo electrónico<br>

                            Área o puesto de interés<br>

                            Experiencia previa (opcional)<br>

                            Adjuntar CV (PDF, DOC, etc.)<br>
                        </p>
                        <button style="color: black;" onclick="soli()">Solicitar</button>
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