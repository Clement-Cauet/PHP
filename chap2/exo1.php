<?php
    function tableau(){
        echo 
    "<table border=2px>
        <tr>
            <td>NOM</td>
            <td>AGE</td>
            <td>SEXE</td>
        </tr>
        <tr>
            <td>Robert</td>
            <td>65</td>
            <td>Homme</td>
        </tr>
        <tr>
            <td>Jaqueline</td>
            <td>39</td>
            <td>Femme</td>
        </tr>
        <tr>
            <td>Louison</td>
            <td>12</td>
            <td>Indéterminé</td>
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
                </ul>
            </nav>
        </header>
        <div>
            <h1>Exercice 1</h1>
            <p>Ecrire une fonction qui affiche un tableau HTML. 
                Et appeler cette fonction en haut et en bas de votre page HTML.</p>
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