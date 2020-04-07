<?php

$file = fopen("monfichier.txt","c");

var_dump(fgets($file));



fclose($file);