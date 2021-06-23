<?php

        if(isset($_GET['prenom'])){
            $prenom= $_GET['prenom'];
            
        }
        
        if(isset($_GET['nom'])){
            $nom = $_GET['nom'];

        }
          
        if(isset($_GET['mail'])){
            $mail = $_GET['mail'];

        }

        if (isset($prenom) AND isset($nom) AND isset($mail)){
            
            echo "Via GET, mes valeurs sont";
            echo "Prénom : ".$prenom."<br>";
            echo "nom : " .$nom."<br>";
            echo "mail : ".$mail."<br>";
        }

?>