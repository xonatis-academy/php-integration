<html>

<head>
    <?php include('stylesheets.php') ?>
    <?php include('javascripts.php') ?>
    <title>SHOP-PRJ</title>
</head>

<body>
    <?php include('header.php') ?>
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
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="Jean">
                    </td>
                    <td class="p-3 text-center">
                        test@test.com
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
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="Fabien">
                    </td>
                    <td class="p-3 text-center">
                        crop@test.com
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
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="Nathalie">
                    </td>
                    <td class="p-3 text-center">
                        couik@test.com
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
        </table>
    </div>
</body>

</html>