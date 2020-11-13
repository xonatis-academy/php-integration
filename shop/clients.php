<?php
include 'controller/connection.php';
include 'model/User.php';

$entries = User::all();
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
            <h1>Clients</h1>
        </div>
        <table class="w-100">
            <tr>
                <th class="text-center">Prénom</th>
                <th class="text-center">Email</th>
                <th class="text-center">Actions</th>
            </tr>

        <?php

        foreach($entries as $coucou) {
            echo '
                <tr>
                    <form method="post">
                        <td class="p-3 text-center">
                            <input type="text" class="form-control" value="' . $coucou->prenom .  '">
                        </td>
                        <td class="p-3 text-center">
                            ' . $coucou->email . '
                        </td>
                        <td class="p-3 text-center">
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </form>
                </tr>
            ';
        }

        ?>
        </table>
    </div>
</body>

</html>