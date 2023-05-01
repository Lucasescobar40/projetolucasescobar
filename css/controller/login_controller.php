<?php
	$name  = $_POST['name'];
	$value = $_POST['value'];
?>
<html>
    <head>
        <title>Games Digitais Escobar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=100.0">
        <link rel="stylesheet" href="../css/style.css"/>
        <link rel="icon" href="../img/logotipo.png"/>
        <link rel="stylesheet" href="../style.css" type="text/css">        
    </head>
    <body style="background: #ff000;">
        <?php if($name === "GTA 5"){ ?>
            <img src="../img/logotipo.png" alt="Logotipo do site" width="200"/><br>
        <?php } else if($name === "Resident Evil 4"){ ?>
            <img src="../img/re4.png" alt="Logotipo do site" width="200"/><br>
        <?php } else if($name === "Game Play") { ?>
            <img src="../img/logo.png" alt="Logotipo do site" width="200"/><br>
        <?php } else if($name === "God OF War"){ ?>
            <img src="../img/god.webp" width="200"/>
        <?php } ?>
    	<p><?php echo $name;?></p><br>
    	<p><?php echo $value;?></p>
    	<button onclick="history.go(-1);">Voltar</button>
    </body>
</html>
