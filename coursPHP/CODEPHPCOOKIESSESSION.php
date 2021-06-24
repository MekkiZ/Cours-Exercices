
<?php


if (isset($_POST['login'])) {
    $login=$_POST['login'];
} else {
    $login='';

}


if (isset($_POST['password'])) {
    $password=$_POST['password'];
    $password=sha1($password);
} else{
    $password='';

}


if (!empty($login) AND !empty($password) ){
    //BDD test - pour apres

    $resquest ="    SELECT * 
                    FROM `utilisateurs` 
                    WHERE `pseudo`='".$login."'
                    AND `mot_de_passe`='".$password."' ";



    
include(bdd_connexion.php);


$resultat= mysqli_query($connexion, $resquest) ;


$resultat_nb = mysqli_num_rows($resultat);


// verifie si le nombres de ligne est superieur a 0 (cad s'il y as au moin un utilisateur )  
if ($resultat_nb > 0) {
    
    //initialiser lasession uniquement pour l'utilisateur OK
    // initialiser la session uniquement pour un utilisateur ok
    echo $resultat;
    session_start();
    $_SESSION['login']=$login;
    header('location: http://localhost:8888/courPHP/Page_3.php');
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