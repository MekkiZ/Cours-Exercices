<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau MySQL</title>
</head>
<body>
    
<form action="indexCours.php" method='POST'>

    <p>le titre</p>
    <input type="text" name='titre'>

    <p>Le musicien</p>
    <input type="text" name='musicien'>


    <p>la durée</p>
    <input type="text" name='Duree'>

<br><br>

<input type="submit">
</form>





<?php  
include('bdd_connexion.php');


$request="SELECT * FROM titres";

$resultat = mysqli_query($connexion, $request) or die(mysqli_error($connexion));

$nb_resultat = mysqli_num_rows($resultat);
   
   if ($nb_resultat > 0) {
       echo "<h3> on affiche tout </3>";
   
       while ($row = mysqli_fetch_array($resultat)) {
   
           echo "ID n°".$row['IDTitre']."-";
           echo "la musique'".$row['Nom']."' a été composée par".$row['Nom_musicien'];
           echo "et elle dure".str_replace(".",":",$row['Duree'])."minutes. <br>";
           
       }
   }


    
if (isset($_POST['titre'])) {
    $titre = $_POST['titre'];
} else {
    $titre="" ; 
}

if (isset($_POST['musicien'])) {
    $musicien = $_POST['musicien'];
} else {
    $musicien="" ; 
}

if (isset($_POST['Duree'])) {
    $duree = $_POST['Duree'];
    
    
    
} else {
    $duree="" ; 
}

if (!empty($titre) AND !empty($musicien) AND !empty($duree)) {

    $request_UPT= "INSERT INTO titres(Nom, Nom_musicien, Duree) VALUES ('".$titre."','".$musicien."',".$duree.")";
    $resultat_UPT= mysqli_query($connexion, $request_UPT) or die(mysqli_error($connexion));
    echo $remplace;
    echo "la nouvelle musique a été roujoutée";
}






?>
</body>
</html>
