


<?php  
   
    $fichierview = fopen('phpt.txt', 'r+');
    $resultat_1 = fgets($fichierview);
    echo "$resultat_1";

    


$date_du_jour = date ("d-m-Y");
$heure_courante = date ("H:i");
echo 'Nous sommes le : ';
echo $date_du_jour;
echo ' Et il est : ';
echo $heure_courante;
    
?>
