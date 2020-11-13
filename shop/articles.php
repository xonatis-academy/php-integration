<?php
session_start();

include 'controller/connection.php';
include 'model/Article.php';

if (isset($_POST['form-save'])) {
    $objet = Article::retrieveByPK($_POST['form-id']);
    $objet->titre = $_POST['form-titre'];
    $objet->prix = $_POST['form-prix'];
    $objet->tva = $_POST['form-tva'];
    $objet->save();
} else if(isset($_POST['form-delete'])) {
    $objet = Article::retrieveByPK($_POST['form-id']);
    $objet->delete();
}

$entries = Article::all();

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
            <h1>Articles</h1>
        </div>
        <table class="w-100">
            <tr>
                <th class="text-center">Titre</th>
                <th class="text-center">Prix (&euro;)</th>
                <th class="text-center">TVA</th>
                <th class="text-center">Action</th>
            </tr>
            <?php

            foreach ($entries as $toto) {

            ?>

                <tr>
                    <form method="post">
                        <input type="hidden" name="form-id" value="<?php echo $toto->id ?>" />
                        <td class="p-3 text-center">
                            <input type="text" name="form-titre" class="form-control" value="<?php echo $toto->titre ?>">
                        </td>
                        <td class="p-3 text-center">
                            <input type="text" name="form-prix" class="form-control" value="<?php echo $toto->prix ?>">
                        </td>
                        <td class="p-3 text-center">
                            <input type="text" name="form-tva" class="form-control" value="<?php echo $toto->tva ?>">
                        </td>
                        <td class="p-3 text-center">
                            <div class="btn-group" role="group">
                                <button type="submit" name="form-save" class="btn btn-success">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button type="submit" name="form-delete" class="btn btn-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </form>
                </tr>

            <?php

            }

            ?>
        </table>
    </div>
</body>

</html>