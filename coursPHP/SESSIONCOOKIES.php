
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <style>
    
    a{

        width: 20px;
        background-color: black;
        color: white;
        text-decoration: none;
        border-radius: 20px;
        box-shadow: 10px 5px 5px black;

    }
    
    
    </style>
</head>
<body>

<form action="CODEPHPCOOKIESSESSION.php" method="POST">

<label for="login">login :</label>
<input type="text" id="login"name="login">
<br><br>
<label for="password">Password :</label>
<input type="password" id="login" name="password">
<br><br>
<input class='submit' type="submit" > <p> Ou </p> <a type="submit" href="http://localhost:8888/courPHP/creetoncompte.php" >crée ton compte</a>

</form>
 
<script>

document.querySelector(".submit").addEventListener("click", ouvrePage);

function ouvrePage(){

 windows.open('hackermessage.html');

}







</script>


<h2>hello <?php echo $_SESSION['login'];?></h2>

</body>
</html>