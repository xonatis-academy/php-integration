<?php
session_start();
include 'controller/connection.php';
include 'model/History.php';

$entries = History::all();
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
            <h1>Historique des produits commandés</h1>
        </div>
        <table class="w-100">
            <tr>
                <th class="text-center">Titre</th>
                <th class="text-center">Prix (&euro;)</th>
                <th class="text-center">TVA</th>
                <th class="text-center">Action</th>
            </tr>

            <?php

            foreach($entries as $coucou) {
                echo '
                <tr>
                    <form method="post">
                        <td class="p-3 text-center">
                            ' . $coucou->titre . '
                        </td>
                        <td class="p-3 text-center">
                            ' . $coucou->prix . '
                        </td>
                        <td class="p-3 text-center">
                            ' . $coucou->tva . ' %
                        </td>
                        <td class="p-3 text-center">
                            <div class="btn-group" role="group">
                                <a class="btn btn-success" href="/shop/invoice.php">
                                    <i class="fas fa-file-export"></i>
                                </a>
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