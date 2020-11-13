<?php
session_start();

include 'controller/connection.php';

$text = $_COOKIE['cookie-panier'];
$objet = json_decode($text);

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
            <h1>Panier</h1>
        </div>
        <table class="w-100">
            <tr>
                <th class="text-center">Produit</th>
                <th class="text-center">Prix HT</th>
                <th class="text-center">Quantité</th>
                <th class="text-center">TVA</th>
                <th class="text-center">Prix TTC</th>
            </tr>
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        <?php echo $objet->titre ?>
                    </td>
                    <td class="p-3 text-center">
                        <?php echo $objet->prix ?>
                    </td>
                    <td class="p-3 text-center">
                        1
                    </td>
                    <td class="p-3 text-center">
                        <?php echo $objet->tva ?> %
                    </td>
                    <td class="p-3 text-center">
                        <?php echo $objet->prix + $objet->prix * $objet->tva /100.0 ?>
                    </td>
                    <td class="p-3 text-center">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </td>
                </form>
            </tr>
        </table>
        <div class="text-right mt-4">
            <h3>Total: <?php echo $objet->prix + $objet->prix * $objet->tva /100.0 ?> &euro; TTC</h3>
        </div>
        <div class="text-right mt-4">
            <a type="submit" class="btn btn-success" href="https://www.paypal.com/paypalme/shnsd/<?php echo round($objet->prix + $objet->prix * $objet->tva /100.0, 2) ?>">
                Paiement <i class="fab fa-cc-mastercard"></i>
            </a>
        </div>
    </div>
</body>

</html>