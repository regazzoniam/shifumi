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

    function afficherLesRegles(){
        echo '<div><img src="img/regles.jpg" alt="regles du jeu" class="w-25 my-5"></div>';
        echo '<button class="btn btn-warning"><a class="text-decoration-none text-dark" href="simulateur.php">Je veux jouer</a></button>';
    }

    afficherLesRegles();

?>

</body>
</html>