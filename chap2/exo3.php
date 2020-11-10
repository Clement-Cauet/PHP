<?php
    
    function tableau($note1, $note2, $note3){
             
        ?><table border=2px>
            <tr>
                <td><?php echo $note1; ?></td>
            </tr>
            <tr>
                <td><?php echo $note2;?></td>
            </tr>
            <tr>
                <td><?php echo $note3;?></td>
            </tr>
        </table>
    
    <?php
    
    }

    function moyenne($note1, $note2, $note3){
        $moy=($note1+$note2+$note3)/3;
        echo "La moyenne est de ".$moy;
        return $moy;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../src/css/index.css">
        <title>exo3</title>
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
            <h1>Exercice 3</h1>
            <p>Ecrire une fonction qui calcul la moyenne d’un tableau qu’on passe en paramètre et qui retourne 
                ce résultat dans une variable. Afficher le contenue de cette variable en bas de page.</p>
            <?php
                tableau(14, 15, 16);
            ?>
            <?php
                moyenne(14, 15, 16);
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