<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <title>exo3</title>
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
        <h1>Exercice 3</h1>
        <p>A) Créer un tableau php qui contient en indice les colonnes ‘nom’ , ‘prenom’ et
            ‘motDePasse’. Remplir ce tableau avec 3 personnes. Afficher se tableau avec une boucle
            for. </p>
        <p>B) Essayer d’agrandir votre variable $tableau avec plusieurs nom prénom et MDP ,
            afficher ce tableau en HTML généré par le PHP.</p>
        <?php
        $tab0 = array ('NOM ', 'PRENOM ', 'MDP');
        $tab1 = array ('Caudron ', 'Clement ', '123');
        $tab2 = array ('Cauet ', 'Clement ', '456');
        $tab3 = array ('De Almeda ', 'Nicolas ', '789');

        echo '<table><tr>'; //Creation d'un tableau
        
        for ($numero = 0; $numero < 3; $numero++){
            echo '<td>'.$tab0[$numero].'</td>';
        }

        echo '</tr>';
        echo '<tr>';

        for ($numero = 0; $numero < 3; $numero++){
            echo '<td>'.$tab1[$numero].'</td>';
        }

        echo '</tr>';
        echo '<tr>';

        for ($numero = 0; $numero < 3; $numero++){
            echo '<td>'.$tab2[$numero].'</td>';
        }

        echo '</tr>';
        echo '<tr>';

        for ($numero = 0; $numero < 3; $numero++){
            echo '<td>'.$tab3[$numero].'</td>';
        }

        echo '</tr>';
        echo '</table>';
        
        //code source//
        highlight_file((__FILE__));

        ?>
    </div>
</body>
</html>