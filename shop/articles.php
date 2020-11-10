<html>

<head>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
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