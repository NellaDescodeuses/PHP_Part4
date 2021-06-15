<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_3 Part_4</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 3  Partie 4</h1>
    <h2>
        Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langages de programmation. 
        Affichez le troisième langage.
    </h2>
    <?php 
        $languages = ['1' => 'HTML/CSS', '2' => 'JS', '3'=> 'PHP', '4'=> 'Python', '5' => 'Java'];
        //le var_dump affiche le contenu du tableau, ses clés, le type de ses valeur et la length des valeurs.
        var_dump($languages);
                ?>
                <p class="mt-4 text-center">
                    <?='Le troisième language du tableau est : ' .$languages['3']?>
                </p>
                <?php
    ?>
  </div>
</html>