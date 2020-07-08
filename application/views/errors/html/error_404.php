<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Página no encontrada</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: black;
	background-color: transparent;
	border-bottom: 2px solid #D0D0D0;
	font-size: 25px;
	font-weight: bold;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
	
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

.header{
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
	display: flex;
	flex-direction: column;
	align-items: center;
}

.section{
	display: flex;
	flex-direction: column;
	align-items: center;
}

p {
	margin: 12px 15px 12px 15px;
}

.nav__link{
	font-size: 16px;
}

.nav__item{
	margin-bottom: 5px;
}

</style>
</head>
<body>
	<header class="header">
		<h1>PÁGINA NO ENCONTRADA</h1>
		<h2>LO SENTIMOS, PERO LA DIRECCIÓN WEB QUE HA INTRODUCIDO NO SE ENCUENTRA DISPONIBLE</h2>
	</header>
	<section class="section">
		<h2>Tienes las siguientes opciones:</h2>
	<nav class="nav">
                <ul class="nav__list">
					<li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/IndexPage">Ingresar a la página de inicio</a></li>
					<li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/Areas">Ingresar a las áreas de trabajo</a></li>
					<li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/About">Ingresar a la sección sobre mi</a></li>
                    <li class="nav__item"><a class="nav__link" href="<?php echo base_url() ?>index.php/User">Ingresar a la sección información de usuario</a></li>
                </ul>
            </nav>
	</section>
</body>
</html>