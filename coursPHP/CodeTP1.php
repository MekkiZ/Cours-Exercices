<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            
            border: 2px solid black;
            width: 500px;
            background-color: tomato;
            color:bisque;
        }
        table:hover{

            border-color:blueviolet;
            border-radius: 10px;

        }
        td{

            border: 3px solid black;
        }
        td:hover{

        border-color:blueviolet;
        border-radius: 10px;
        }


    </style>
</head>
<body>
    <img style="width:100px; height:100px;" src="https://img.static-rmg.be/a/view/q100/w900/h600/3113653/baby-yoda-im-jpg.jpg" alt="YODA" > <br>

<?php


$date_Heurr = date('d-m-Y H:i');
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

    if (strpos($message,'Hacker') !==FALSE) {
        echo 'attention HACKER !!!!<br>';
        $message=sha1($message);
        $contientHacker="oui, la piraterie est là";
} else {
   echo '<br> tout beigne !<br>';
   $contientHacker='non la cavalerie est là';
}


    if (strlen($message)>=100) {
        echo '';
        $message100='oui';
    

    } else {
        echo 'Attention il faut plus de 100 caractères!!!<br>';
        $message100='non';
     }

} else{
    echo 'il faut 100 caractère minimum';
    
}



if (strpos($nom,'toto')!==FALSE) {
    $message = sha1($message);
}else{
    echo '';
}

if (isset($_POST['monfichier'])) {
    $monfichier = htmlentities(urldecode($_POST['monfichier']));

        if (strpos($monfichier,'.pdf')) {
            $monfichier = sha1($monfichier);
        } else {
                
        }
} else {
    echo '';
}




if (!empty($nom) && !empty($prenom) && !empty($ville) && !empty($message) && !empty($monfichier)){
    echo '<b>Mes identifiant sont : </b><br>';
    echo 'nom :' .$nom.'<br>';
    echo 'prenom :' .$prenom.'<br>';
    echo 'ville :'. $ville.'<br>';
    echo 'message :' .$message.'<br>';
    
  
}else{
    echo 'renseignez les champs';
}

    
    
    
    $tableau = array('Nom ' =>$nom, 'Prenom '=>$prenom,'Ville '=>$ville,'Message '=>$message, 'Date et heure '=>$date_Heurr, 'Caractères message>100 '=>$message100,'Contient le mot "hacker" '=> $contientHacker);
    $tableausize = sizeof($tableau);
    
    echo "<table>";
    
    foreach ($tableau as $key => $value) {
        
        echo "<tr><td>".$key. "</td><td>" .$value."</tr></td>";
    }

    echo "</table>";
   
    


?>

</body>
</html>