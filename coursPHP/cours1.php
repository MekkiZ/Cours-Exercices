<?php  
   
    $fichierview = fopen('phpt.txt', 'r+');
    $resultat_1 = fgets($fichierview);
    echo "$resultat_1";
    
?>
