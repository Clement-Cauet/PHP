<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/exo1.css">
    <link rel="stylesheet" type="text/css" href="../src/css/index.css">
    <title>exo1</title>
</head>
<body>
    <header class="header"> <!-- Entête du site -->
        <h1 class="titre">Exercice PHP</h1>
        <hr>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="exo1.php">exo1</a></li>
                <li><a href="exo2.php">exo2</a></li>
                <li><a href="exo3.php">exo3</a></li>
                <li><a href="exo4.php">exo4</a></li>
                <li><a href="exo5.php">exo5</a></li>
                <li><a href="exo6.php">exo6</a></li>
                <li><a href="exo7.php">exo7</a></li>
                <li><a href="exo8.php">exo8</a></li>
                <li><a href="exo9.php">exo9</a></li>
            </ul>
        </nav>
    </header>
    <div>
        <h1>Exercice 1</h1>
        <p>Réaliser une page php qui affiche un cadre bleu si un nombre est impair et en rouge si il
            est paire : vous aurait besoin de la fonction </p>
        <?php
            $NombreAleatoire=rand(0,100); //Le programme choisi une valeur aléatoire allant de 0 à 99

            if($NombreAleatoire%2==1){ //Si le nombre aléatoire est impair 
                echo'<div class="impair">'.$NombreAleatoire.' est impair </div>';
            }
            else{ //Sinon il est pair
                echo'<div class="pair">'.$NombreAleatoire.' est pair</div>';
            }
        
            //code source//
            highlight_file((__FILE__));
        ?>
    </div>
</body>
</html>