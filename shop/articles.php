<?php
include 'controller/connection.php';
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
            <tr>
                <form method="post">
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="CD de collection">
                    </td>
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="5.23">
                    </td>
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="20">
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
                        <input type="text" class="form-control" value="Armoire de salon">
                    </td>
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="125.24">
                    </td>
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="20">
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
                        <input type="text" class="form-control" value="Prestation de service">
                    </td>
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="115">
                    </td>
                    <td class="p-3 text-center">
                        <input type="text" class="form-control" value="10">
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