<?php

$file = fopen("monfichier.txt","c");

fwrite($file,"mise à jour le 07/04/2020.".PHP_EOL);



fclose($file);