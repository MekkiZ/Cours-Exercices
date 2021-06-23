<?php

    if (isset($_POST['login'])) {
        $login = htmlentities(urldecode($_POST['login']));
        
    }else {
        $login="";
    }

    if (isset($_POST['mdp'])){

        $password = htmlentities(urldecode($_POST['mdp']));
        $password = sha1($password);
    }else {
        $password ="";
    }

    if (isset($_POST['mail'])) {
        $mail = htmlentities(urldecode($_POST['mail']));
    }else {
        $mail ="";
    }


    if (!empty($login) && !empty($password) && !empty($mail)){
        echo '<b>Mes identifiant sont : </b> <br>';
        echo 'login :'.$login .'<br>';
        echo 'mots de passe:'.''.$password.'<br>';
        echo 'mail: '.$mail.'<br>';
        

    }else {
        echo 'renseignez les champs';
    }







    
?>


echo '<b>Mes identifiant sont : </b><br>';
        echo 'nom :'.$nom.'<br>';
        echo 'prenom :'.$prenom.'<br>';
        echo 'ville :'.$ville.'<br>';
        echo 'message :'.$message.'<br>';