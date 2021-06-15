<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_1 Part_4</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 1  Partie 4</h1>
    <h2>
        Créez un tableau contenant les 12 mois de l'année, affichez "Mars".
    </h2>
    <?php 
        $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        var_dump($months);
        ?>
        <p class="mt-4 text-center"><?= 'J\'affiche le mois de ' . $months[2]?></p>
        <?php

    ?>
  </div>
</html>