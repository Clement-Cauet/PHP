<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/index.css">
    <title>exo4</title>
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
        <h1>Exercice 4</h1>
        <p>Créer un petit programme php qui résout une équation du second degré de type
            Ax2 + Bx + C = 0. Comme on ne maitrise pas pour le moment les entrées utilisateur les variables A, B et C
            seront rentré manuellement dans le programme.</p>
        <?php
            
            $a=3;
            $b=-6;
            $c=-8;
            $x1=0;
            $x2=0;

            $D=$b*$b-(4*$a*$c);
            echo 'Delta est egale a : '.$D. '<br>';

            if ($D>0){
                $x1=-($b-sqrt($D))/2*$a;
                echo 'Solution 1 : '.$x1. '<br>';
                $x1=-($b+sqrt($D))/2*$a;
                echo 'Solution 2 : '.$x2. '<br>';
            }

            if ($D=0){
                $x1=-$b/2*$a;
                echo 'Solution : '.$x1. '<br>';
            }

            if ($D<0){
                echo "Il n'y a pas de solution dans R.";
            }



            //code source//
            highlight_file((__FILE__));
        ?>
    </div>
</body>
</html>