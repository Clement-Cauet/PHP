<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="src/css/index.css">
        <title>test</title>
    </head>
    <body>
        <header class="header"> <!-- Entête du site -->
            <h1 class="titre">Exercice PHP</h1>
            <hr>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="test.php">test</a></li>
                    <li><a href="chap1.php">Chapitre 1</a>
                        <ul class="chap">
                            <li><a href="chap1/exo1.php">exo1</a></li>
                            <li><a href="chap1/exo2.php">exo2</a></li>
                            <li><a href="chap1/exo3.php">exo3</a></li>
                            <li><a href="chap1/exo4.php">exo4</a></li>
                            <li><a href="chap1/exo5.php">exo5</a></li>
                            <li><a href="chap1/exo6.php">exo6</a></li>
                            <li><a href="chap1/exo7.php">exo7</a></li>
                            <li><a href="chap1/exo8.php">exo8</a></li>
                            <li><a href="chap1/exo9.php">exo9</a></li>
                        </ul>
                    </li>
                    <li><a href="chap2.php">Chapitre 2</a>
                        <ul class="chap">
                            <li><a href="chap2/exo1.php">exo1</a></li>
                            <li><a href="chap2/exo2.php">exo2</a></li>
                            <li><a href="chap2/exo3.php">exo3</a></li>
                            <li><a href="chap2/exo4.php">exo4</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <?php
            $age=19;
            echo "<div>Vous avez $age ans.</div>";
            if ($age>=0 && $age<18) {
                echo "<div>Vous êtes mineur.</div>";
            }
            else {
                echo "<div>Vous êtes majeur.</div>";
            }
            for ($verre=0; $verre<3; $verre++) {
                echo "<div>Vous êtes à votre verre n°$verre</div>";
            }
            if ($verre>=4) {
                echo "<div>Vous êtes complétement torché maintenant. Vous venez de vomir votre 4h.</div>";
            }
            else {
                echo "<div>Vous êtes encore sobre.</div>";
            }
            $lunette=0;
            while ($lunette<6) {
                $lunette++;
            }
            echo "<div>Vos lunettes ont maintenant $lunette fisure</div>";
            $piche=8;
            echo "<div>Il y a $piche piche dans la salle.</div>";
            if ($piche>=5) {
                echo "<div>Les pompiers arrivent pour ramaser les piches.</div>";
            }
            else {
                echo "<div>Les pompiers viennent pas.</div>";
            }
        ?>
    </body>
</html>