<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>

<?php

$date_Heurr= date('d-m-Y H:i');
    echo $date_Heurr;
    


    if (isset($_POST['nom'])) {
        $nom = htmlentities(urldecode($_POST['nom']));
    } else {
        $nom="aucun renseignement";
    }  
    if (isset($_POST['prenom'])) {
        $prenom = htmlentities(urldecode($_POST['prenom']));
    } else {
        $prenom="aucun renseignement";
    }
    



    if (isset($_POST['ville'])){
        $ville = htmlentities(urldecode($_POST['ville']));
    } else {
        $ville ="aucun renseignement";
    }


    
    if (isset($_POST['message'])){
        $message = htmlentities(urldecode($_POST['message']));
    
        if (strlen($message)>=100) {
            echo '';
            $message100='oui';
        

       if (strpos($message,'Hacker') !==FALSE) {
            echo 'attention HACKER !!!!<br>';
            $message=sha1($message);
            $contientHacker="oui, la piraterie est là";
       } else {
           echo 'tout beigne !';
           $contientHacker='non la cavalerie est là';
        }

        } else {
            echo 'Attention il faut plus de 100 caractères!!!<br>';
         }

    } else{
        echo 'il faut 100 caractère minimum';
        $message100='oui';
    }

    

    if (strpos($nom,'toto')!==FALSE) {
        $message = sha1($message);
    }else{
        echo '';
    }
    

    if (!empty($nom) && !empty($prenom) && !empty($ville) && !empty($message)){
        echo '<b>Mes identifiant sont : </b><br>';
        echo 'nom :' .$nom.'<br>';
        echo 'prenom :' .$prenom.'<br>';
        echo 'ville :'. $ville.'<br>';
        echo 'message :' .$message.'<br>';
      
    }else{
        echo 'renseignez les champs';
    }


?>





    <form action="CodeTP1.php" method="POST">
    <label for="nom">Ton nom :</label>
    <br>
    <input type="text" id="nom" name="nom">
    <br><br>
    <label for="prenom">Ton prénoms :</label>   
    <br>
    <input type="text" id="prenom" name="prenom">
    <br><br>
    <label for="ville">Ta ville de naissance :</label>
    <br>
    <select name="ville">
                
                <option value="Paris">Paris</option>
                <option value="Bagnolet">Bagnolet</option>
                <option value="Chez moi">Chez moi</option>
   
    </select>
    <br><br>
    <label for="Message">Ton message :</label>
    <br>
    <input type="text" id="message" name="message">
    <br><br>
    <label for="file">Ton Fichier :</label>
    <br>
    <input type="file" id="file" name="monfichier" />
    <br><br>
    <input type="submit" value="Envoyer">
    </form>



    
</body>
</html>