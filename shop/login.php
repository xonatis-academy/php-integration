<?php
session_start();

include 'controller/connection.php';
include 'model/User.php';

if (isset($_POST['form-submit'])) {

    $objet = User::retrieveByEmail($_POST['form-email'], SimpleOrm::FETCH_ONE);
    if ($objet !== null) {

        if (password_verify($_POST['form-password'], $objet->mot_de_passe)) {
            $_SESSION['prenom'] = $objet->prenom;
        }
    }
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
            <h1>S'indentifier</h1>
        </div>
        <div class="row">
            <div class="col m-2">
                <img src="https://via.placeholder.com/650x100" />
            </div>
            <div class="col m-2">
                <form method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse email</label>
                        <input type="email" name="form-email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mot de passe</label>
                        <input type="password" name="form-password" class="form-control">
                    </div>
                    <input type="submit"  name="form-submit" class="btn btn-success" value="Valider" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>