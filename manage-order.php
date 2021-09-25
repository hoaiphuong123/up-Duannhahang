<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Style.css">
    <title>DuAnNhaHang-Update</title>
</head>

<body>
    <header class=" border-bottom border-2 border-dark">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="Dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Manage-Users.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-category.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-food.php">Foods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manage-order.php">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </header>
    <div class="bg-light">
        <div class="container bg-light">
            <div class="row">
                <div class="col">
                    <h1 class="mt-5 ">Manage Order</h1>
                </div>
            </div>

            <div class="row justify-center center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.N.</th>
                            <td scope="col-1">Food</td>
                            <td scope="col">Price </td>
                            <td spope="col">Qty.</td>
                            <td scope="col">Total</td>
                            <td scope="col-1">Order Date</td>
                            <td scope="col">Status</td>
                            <td scope="col-1">Customer Name</td>
                            <td scope="col-1">Contact</td>
                            <td scope="col-2">Email</td>
                            <td scope="col-1">Address</td>
                            <td scope="col">Actions</td>



                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="mt">Mixed Pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td class="mt">2020-11-30 04:07:17</td>
                            <td style="color:#198754;">Delivered</td>
                            <td>Jana Bush</td>
                            <td class="mt">+1 (562) 101-2028</td>
                            <td>tydujy@mailinator.com</td>
                            <td class="mt">Minima iure ducimus</td>
                            <td>
                                <button type="button" class="btn btn-success " style="color:black;">Update
                                    order</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="mt">Best Burger</td>
                            <td>4.00 </td>
                            <td>4</td>
                            <td>16.00</td>
                            <td class="mt">2020-11-30 03:52:43</td>
                            <td style="color:#198754;">Delivered</td>
                            <td>Keylly Dillard</td>
                            <td class="mt">+1 (908) 914-3106</td>
                            <td>fexekihor@mailinator.com</td>
                            <td class="mt">Incidint ipsum ad d</td>
                            <td>
                                <button type="button" class="btn btn-success " style="color:black;">Update
                                    order</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="mt">Sadeko MOmo</td>
                            <td>6.00 </td>
                            <td>3</td>
                            <td>18.00</td>
                            <td class="mt">2020-11-30 03:49:48</td>
                            <td style="color:#e35d6a;">Cancelled</td>
                            <td class="mt">Bradley Farrell</td>
                            <td class="mt">+1 (576) 504-4687</td>
                            <td>zahafiq@mailinator.com</td>
                            <td class="mt">Duis aliqua Qui lor</td>
                            <td>
                                <button type="button" class="btn btn-success " style="color:black;">Update
                                    order</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class=" next container text-center pt-2 ">
        <p>2020 All rights reserved,Food House.Developed By<a href="#">CSE485</a> </p>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>