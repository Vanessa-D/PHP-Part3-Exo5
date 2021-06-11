<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 5</title>
</head>
<body>
    <p>
        Créer une fonction qui retourne une chaîne de caractères et un nombre aléatoire :
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php

            function returnAStringAndARandomNumber($string){
                $randomNumber = mt_rand(1,100);
                echo 'Ta chaîne de caractères : ' .$string. '<br> et ton nombre aléatoire : ' .$randomNumber;
                return $string;
                return $randomNumber;
            }
            
            returnAStringAndARandomNumber('Tient tient');

        ?>
    </div>
</body>
</html>