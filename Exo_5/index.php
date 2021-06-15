<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_5 Part_4</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 5  Partie 4</h1>
    <h2>
        Créez un tableau associatif contenant comme clé des numéros de département et comme valeurs les départements correspondants. Affichez les départements et leurs clés respectives.
    </h2>
    <?php 
        $departments = [75 => 'Paris', 971 => 'la Guadeloupe', 972 => 'la Martinique', 973 => 'la Guyane', 974 => 'la Réunion', 976 => 'Mayotte'];
            foreach ($departments as $clé => $value){
            ?>
            <p class="mt-4 text-center">
                <?='Le département ' .$clé . ' est ' . $value . '.'?> 
            </p>
            <?php
            }
    ?>
  </div>
</html>