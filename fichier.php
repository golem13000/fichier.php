<?php

//$file = fopen("monfichier.txt","r");

//var_dump(fgets($file));

//fclose($file);

//$file=fopen("compteur.txt", "c+");

//$pages = fgets($file);
//$pages++;
//fseek($file,0);
//fwrite($file, $pages);
//fclose($file);

//echo '<p> Cette page a été vue ' . $pages . ' fois !</p>';

$liste = array(array("Rose", "12","2","100"),
array("Golum","15","1","100"),
array("ROCKY","6","1","100","Guerrier","0"));


$file = fopen("index.csv", "c+");

foreach($liste as $tab) {
fputcsv($file, $tab);
};

fclose($file);

?>





