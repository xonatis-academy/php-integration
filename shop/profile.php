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
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        CD de collection
                    </td>
                    <td class="p-3 text-center">
                        5.23
                    </td>
                    <td class="p-3 text-center">
                        20 %
                    </td>
                    <td class="p-3 text-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" href="/invoice.html">
                                <i class="fas fa-file-export"></i>
                            </a>
                        </div>
                    </td>
                </form>
            </tr>
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        CD de collection
                    </td>
                    <td class="p-3 text-center">
                        5.23
                    </td>
                    <td class="p-3 text-center">
                        20 %
                    </td>
                    <td class="p-3 text-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" href="/invoice.html">
                                <i class="fas fa-file-export"></i>
                            </a>
                        </div>
                    </td>
                </form>
            </tr>
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        CD de collection
                    </td>
                    <td class="p-3 text-center">
                        5.23
                    </td>
                    <td class="p-3 text-center">
                        20 %
                    </td>
                    <td class="p-3 text-center">
                        <div class="btn-group" role="group">
                            <a class="btn btn-success" href="/invoice.html">
                                <i class="fas fa-file-export"></i>
                            </a>
                        </div>
                    </td>
                </form>
            </tr>
        </table>
    </div>
</body>

</html>