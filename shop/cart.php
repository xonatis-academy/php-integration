<html>

<head>
    <?php include('stylesheets.php') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <title>SHOP-PRJ</title>
</head>

<body>
    <?php include('header.php') ?>
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
                        CD de collection
                    </td>
                    <td class="p-3 text-center">
                        2.23
                    </td>
                    <td class="p-3 text-center">
                        2
                    </td>
                    <td class="p-3 text-center">
                        20 %
                    </td>
                    <td class="p-3 text-center">
                        2.67
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
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        Armoire de salon
                    </td>
                    <td class="p-3 text-center">
                        125.23
                    </td>
                    <td class="p-3 text-center">
                        1
                    </td>
                    <td class="p-3 text-center">
                        20 %
                    </td>
                    <td class="p-3 text-center">
                        150.27
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
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        Prestation de service
                    </td>
                    <td class="p-3 text-center">
                        115
                    </td>
                    <td class="p-3 text-center">
                        1
                    </td>
                    <td class="p-3 text-center">
                        10 %
                    </td>
                    <td class="p-3 text-center">
                        138
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
            <h3>Total: 267 &euro; TTC</h3>
        </div>
        <div class="text-right mt-4">
            <a type="submit" class="btn btn-success" href="https://www.paypal.com/paypalme/shnsd/10">
                Paiement <i class="fab fa-cc-mastercard"></i>
            </a>
        </div>
    </div>
</body>

</html>