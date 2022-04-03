<!DOCTYPE html>
<html lang="fr">
<!-- mettre en français -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Document</title>
</head>

<body class="bg-light ">
    <div class="text-center mx-5 my-5">

<?php

    include 'navBar.php';//on inclus le fichier navbar.php qui contient la navbar
    include 'formulaire.php';//on inclus le fichier formulaire.php qui contient la fonction formulaire()

    if (!empty($_POST['shifumi'])){//on vérifie que l'utilisateur ait bien séléctionné un choix entre papier caillou et ciseaux

        $choixUtilisateur = $_POST['shifumi'];//choix de l'utilisateur
        echo '<div>Vous aviez choisi "'.$choixUtilisateur.'"<br>';

        //Choix de l'ordinateur : Papier, caillou ou ciseaux ?
        $shifumis = array(//on définit un tableau avec les 3 choix possibles
            'Papier',
            'Caillou',
            'Ciseaux'
        );
        $nombreChoixPossible = count($shifumis);//compter le nombre d'éléments dans le tableau $shifumis[]
        $nombreEntre1Et3 = mt_rand(0,($nombreChoixPossible -1));//on génère un nombre aléatoire entre 0 et 2 (index du tableau $shifumis[])
        $choixOrdinateur = $shifumis[$nombreEntre1Et3];//choix de l'ordinateur
        echo 'Et l\'ordinateur avait choisi "'.$choixOrdinateur.'"</div>';
        
        //On compare le choix de l'utilisateur avec le choix de l'ordinateur

        //Cas ou l'ordinateur remporte la manche :
        if($choixOrdinateur == 'Papier' && $choixUtilisateur == 'Caillou' || 
        $choixOrdinateur == 'Ciseaux' && $choixUtilisateur == 'Papier' || 
        $choixOrdinateur == 'Caillou' && $choixUtilisateur == 'Ciseaux'){
            echo '<div class="text-danger">L\'ordinateur a gagné !</div>
            <button class="btn btn-danger"><a class="text-decoration-none text-dark" href="regles.php">Consulter les règles</a></button>
            <div class="text-danger">On rejoue ?</div><br>';
            formulaire();

        //Cas ou l'utilisateur remporte la manche :
        }elseif($choixUtilisateur == 'Papier' && $choixOrdinateur == 'Caillou' || 
        $choixUtilisateur == 'Ciseaux' && $choixOrdinateur == 'Papier' || 
        $choixUtilisateur == 'Caillou' && $choixOrdinateur == 'Ciseaux'){
            echo '<div class="text-success">Tu as gagné <i class="fa-solid fa-trophy"></i></div>
            <button class="btn btn-success"><a class="text-decoration-none text-dark" href="regles.php">Consulter les règles</a></button>
            <div class="text-success">On rejoue ?</div><br>';
            formulaire();

        //Cas d'égalité
        }else{
            echo '<div>Egalité ! On rejoue ?</div><br>';
            formulaire();
        }


    }else{
        formulaire();
    }
    ?>

    </div>

</body>

</html>