<?php


if (isset($_POST['nom'])) {
    $nom=$_POST['nom'];
} else {
    $nom='';

}


if (isset($_POST['prenom'])) {
    $prenom=$_POST['prenom'];
   
} else{
    $prenom='';

}

if (isset($_POST['mail'])) {
    $mail=$_POST['mail'];
    
} else{
    $mail='';

}



if (isset($_POST['password1'])) {
    $password1=$_POST['password1'];
    $password1=sha1($password1);
    
} else{
    $password1='';

}

 

if (!empty($nom) AND !empty($prenom) AND !empty($mail) AND !empty($password1)){
    //BDD test - pour apres

    include('bdd_connexion.php');

    $request = "INSERT INTO `utilisateurs`(`Nom`, `Prenom`, `mot_de_passe`, `email`) 
                VALUES ('".$nom."','".$prenom."','".$password1."','".$mail."')";




    $resultat= mysqli_query($connexion, $request) or die(mysqli_error($connexion));

   
    
    session_start();
    $_SESSION['Nom']=$nom;
    echo 'Bravo, ton compte à bien été crée !';
    header('location: http://localhost:8888/courPHP/Page_3.php');
   

}else {
    
    header('location: http://localhost:8888/courPHP/creetoncompte.php');
    echo "<script> alert(\"mauvaise inscription\") </script>";
}








// verifie si le nombres de ligne est superieur a 0 (cad s'il y as au moin un utilisateur )  
/*if ($resultat_nb > 0) {
    
    //initialiser lasession uniquement pour l'utilisateur OK
    // initialiser la session uniquement pour un utilisateur ok
    echo $resultat;
    session_start();
    $_SESSION['login']=$login;
    header('location: http://localhost:8888/courPHP/Page_3.php');
    echo 'Ton compte est crée!!!!';

}else {
    echo 'wrong password';
    header('location: http://localhost:8888/courPHP/SESSIONCOOKIES.php');
}
    
    //echo $_SESSION['login'];


}





















/*session_start(); 

if (isset($_POST['login'])) {
    $login = htmlentities(urldecode($_POST['login']));
    $_SESSION['login']=$login;
} else {
    $login="aucun renseignement";
}  


if (isset($_POST['password'])){
    $password = htmlentities(urldecode($_POST['password']));

    if (strpos($password,'Hacker') !==FALSE) {
        echo 'attention HACKER !!!!<br>';
        $password=sha1($message);
        $contientHacker="oui, la piraterie est là";
       
} else {
   echo 'tout beigne !';
   $contientHacker='non la cavalerie est là';
}
    
}else{
    echo 'attention';

}



if (strpos($nom,'mekkiR')!==FALSE) {
    $message = sha1($message);
}else{
    echo '';
}


if (!empty($login) && !empty($password)){
    echo '<b>Mes identifiant sont : </b><br>';
    echo 'nom :' .$login.'<br>';
    echo 'prenom :' .$password.'<br>';
    
}else{
    echo 'renseignez les champs';
}
 
    $tableau = array('login ' =>$login, 'Password '=>$password);
    $tableausize = sizeof($tableau);
    
    echo "<table>";
    
    foreach ($tableau as $key => $value) {
        
        echo "<tr><td>".$key. "</td><td>" .$value."</tr></td>";
    }

    echo "</table>";*/



    ?>