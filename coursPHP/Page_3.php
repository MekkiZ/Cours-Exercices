<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'acceuil</title>
</head>
<body>
    

<h1>Voici votre page d'acceuil</h1>


<a href="deconectionDESTROY.php" style="width: 20px;
        background-color: black;
        color: white;
        text-decoration: none;
        border-radius: 20px;
        box-shadow: 10px 5px 5px black;"> déconnection 
</a>


    <?php
    

    if (isser($_SESSION['login'])) {
        echo "<h2>Bienvue Vous êtes : ".$_SESSION['login']."</h2>";
        echo "<a href='deconectionDESTROY.php'>Se decoonnecter</a>";
        header('location: http://localhost:8888/courPHP/Page_3.php');
    } else {
        echo "<a href='SESSIONCOOKIES.php'>Se connecter</a>";
    }
    

    ?>





</body>
</html>