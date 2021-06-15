<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_4 Part_4</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 4  Partie 4</h1>
    <h2>
        Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langages de programmation. Ajoutez une clé et assignez lui une valeur. Affichez cette valeur.
    </h2>
    <?php 
        $languages = ['1' => 'HTML/CSS', '2' => 'JS', '3'=> 'PHP', '4'=> 'Python', '5' => 'Java'];
        //array_push ajoute l'élément à la fin du tableau et génère automatiquement des clés assiciées aux valeeur que l'on souhaite ajouter.
        array_push($languages, 'C#'); 
        var_dump($languages);
                ?>
                <p class="mt-4 text-center">
                    <?='Le dernier language ajouté au tableau est : ' .$languages['6']?>
                </p>
                <?php
    ?>
  </div>
</html>