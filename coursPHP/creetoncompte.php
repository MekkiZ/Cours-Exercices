
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crée un compte</title>
</head>
<body>
    
<form action="CodeCréeTonCompte.php" method="POST">

<label for="nom">nom :</label>
<input type="text" id="nom"name="nom">
<br><br>

<label for="prenom">Prenom :</label>
<input type="text" id="prenom" name="prenom">
<br><br>


<label for="mail">Mail :</label>
<input type="mail" id="mail" name="mail">
<br><br>



<label for="password1">Mot de passe:</label>
<input type="text"  name="password1">
<br><br>

<input class='submit' type="submit" value="crée ton compte">

</form>









</body>
</html>