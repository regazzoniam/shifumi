<!DOCTYPE html>
<html lang="fr">
<!-- mettre en français -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet"> 

    <title>Document</title>
</head>

<body class="bg-light ">

<?php

    include 'navBar.php';//on inclus le fichier navbar.php qui contient la navbar

?>
<div class="text-center">
<div>
    <div class="my-5">
        <img src="img/illustration.jpg" class="w-25 my-2" alt="shifumi">
        <p class="welcome my-2">Welcome</p>
        <h1 class="text-monospace my-1">Shifumi simulator</h1>
    </div>
    <button class="btn btn-secondary"><a class="text-decoration-none text-light nav-link" href="regles.php">Règles</a></button>
    <button class="btn btn-warning"><a class="text-decoration-none text-dark nav-link" href="simulateur.php">Jouer</a></button>

</div>