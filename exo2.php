<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/index.css">
    <title>exo2</title>
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
        <h1>Exercice 2</h1>
        <p>A) Créer un tableau php qui contient 5 chiffres.
            Afficher les 5 chiffres à la suite grace au parcours du tableau dans une boucle for.</p>
        <p>B) Essayer d’afficher ses 5 chiffres dans un tableau HTML que génère PHP</p>
        <p>C) Créer un tableau php qui contient un nom un prenom et un mot de passe et qui a pour
            indice de colonne: Nom, Prenom, MDP.</p>
        <p>Afficher ce tableau avec la commande echo Tableau[‘Nom’] ect.</p>
        <?php
            //Partie 1//
            echo'<table><tr>'; //Creation d'un tableau
            
            $tab[4]=0;
            
            for($i=0; $i<=4; $i++){ //Tant que i est inferieur à 5 il va creer une valeur aleatoire et l'inserer dans le tableau
                $NombreAleatoire=rand(0,100);
                echo '<td>'.$NombreAleatoire.'</td>';
            }

            echo'</tr></table>';

            //Partie 2//
            echo '<table><tr>'; //Creation d'un tableau

            $tab[2]=0;
            $Nom[0]='Cauet';
            $Prenom[0]='Clement';
            $MDP[0]='MDP';
            
            echo '<td>'.$Nom[0].'</td>';
            echo '<td>'.$Prenom[0].'</td>';
            echo '<td>'.$MDP[0].'</td>';

            echo '</tr></table>';

            echo $Nom[0];


            //code source//
            highlight_file((__FILE__));
        ?>
    </div>
</body>
</html>