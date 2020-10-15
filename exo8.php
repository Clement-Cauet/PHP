<!DOCTYPE html>
<html lang="fr">
<?php
    session_start ();
    if(isset($_POST['submit2'])) {
        session_unset();
        session_destroy();
    }   
    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <title>exo8</title>
</head>
<body>
    <header class="header"> <!-- Entête du site -->
        <h1 class="titre">Exercice PHP</h1>
        <hr>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
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
        <h1>Exercice 8</h1>
        <p>Reprenez l’exercice 7 et rajouter un bouton qui permet lorsque l’on clique dessus de vider la session.</p>
        <form action="" method="post">
            <label for="name">Entrez votre nom :</label>
            <input type="text" name="name" id="name" required>
            <input type="submit" name="submit" value="Envoyer">
        </form>

        <form  action="" method="post">
            <input type="submit" name="submit2" value="Deconnexion">
        </form>
        <?php

        if(isset($_POST['name'])){
            $_SESSION['name']=$_POST['name'];
        }

            
            
        if(isset($_SESSION['name'])){
            echo "Mon nom est : ".$_SESSION['name'];
        }
        else{
            echo "La session n'existe pas";
        }

        highlight_file((__FILE__));

        ?>
    </div>
</body>
</html>