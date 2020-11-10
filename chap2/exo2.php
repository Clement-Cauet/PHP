<?php
    function tableau($nom="Philippe", $age="152", $sexe="Inconnu"){
        echo 
    "<table border=2px>
        <tr>
            <td>NOM</td>
            <td>AGE</td>
            <td>SEXE</td>
        </tr>
        <tr>
            <td>$nom</td>
            <td>$age</td>
            <td>$sexe</td>
        </tr>
    </table>";
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../src/css/index.css">
        <title>exo2</title>
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
                </ul>
            </nav>
        </header>
        <div>
            <h1>Exercice 2</h1>
            <p>Ecrire une fonction qui prend en paramètre le nom de 3 colonnes. 
                Cette fonction doit afficher un tableau avec en entête de colonnes les noms de colonne passés en paramètre.</p>
            <?php
                tableau();
            ?>
            <?php
                tableau();
            ?>
            <div>
                <?php    
                    //code source//
                    highlight_file((__FILE__));
                ?>
            </div>
        </div>
    </body>
</html>