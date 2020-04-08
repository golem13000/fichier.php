<?php

var_dump($_POST);

?>



<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>formulaire d'ajout</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="fichier.php" method="post">
           
            <p>
               <label for="titre">Mon titre</label>
               <input type="text" id="titre" name="titre">
            </p>
            <p>
               <label for="description">description</label>
               <input type="text" id="description" name="description">
            </p>

            <div>
             <label> Nom du Perso </label>
             <input type='text' id='nom' name='nom'>
             </div>
             <div>
             <label> Santé </label>
             <input type='number' id='sante' name='sante'>
             </div>
             <div>
             <label> Force </label>
             <input type='number' id='force' name='force'>
             </div>
             <div>
             <label> Niveau </label>
             <input type='number' id='niveau' name='niveau'>
             </div>

            <input type="submit" value="Ajouter">

        
        
        
        </form>

    
    
    </body>
    </html>






