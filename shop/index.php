<?php
session_start();

include 'controller/connection.php';
include 'model/Article.php';

$entries = Article::all();

if (isset($_POST['form-add'])) {
    $object = Article::retrieveByPK($_POST['form-id']);
    
    $text = json_encode($object);
    setcookie('cookie-panier', $text);
}
?>


<html>

<head>
    <?php include('view/stylesheets.php') ?>
    <?php include('view/javascripts.php') ?>
    <title>SHOP-PRJ</title>
</head>

<body>
    <?php include('view/header.php') ?>
    <div class="container">
        <div class="m-5 text-center">
            <h1>Catalogue</h1>
        </div>
        <div class="m-5">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="row row-cols-1 row-cols-md-2">

            <?php

            foreach($entries as $toto) {
                echo '
                
                <div class="card text-white bg-dark m-3" style="max-width: 20rem;">
                    <div class="card-header"><i class="fas fa-archive"></i></div>
                    <div class="card-body">
                        <h4 class="card-title">' . $toto->titre . '</h4>
                        <p class="card-text">' . $toto->prix . ' &euro; HT - TVA : ' . $toto->tva . ' %</p>
                        <form method="post">
                            <input type="hidden" name="form-id" value="' . $toto->id . '" />
                            <button name="form-add" type="submit" class="btn btn-success">
                                Ajouter (' . ($toto->prix + $toto->prix * $toto->tva / 100.0 ) . ' &euro; TTC) <i class="fas fa-cart-plus"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                ';
            }

            ?>


        </div>
    </div>
</body>

</html>