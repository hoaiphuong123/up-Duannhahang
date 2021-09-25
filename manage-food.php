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
                    <h1 class="mt-5 ">Manage Food</h1>
                </div>
            </div>
            <button type="button" class="btn btn-primary mt-5 mb-5 seach1">Add Food</button>
            <div class="row justify-center center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-1">S.N</th>
                            <th scope="col-2">Title</th>
                            <th scope="col-2">Price</th>
                            <th scope="col-2">Image</th>
                            <th scope="col-2">Featured</th>
                            <th scope="col-1">Active</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Dumplings Specials</td>
                            <td>$5.00</td>
                            <td class="col-2">
                                <img src="./image/menu-momo.jpg" alt="" style="width: 50%;">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success ">Update Food</button>
                                <button type="button" class="btn btn-danger ">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Best Burger</td>
                            <td>$4.00</td>
                            <td class="col-2">
                                <img src="./image/menu-burger.jpg" alt="" style="width: 50%;">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success ">Update Food</button>
                                <button type="button" class="btn btn-danger ">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Smoky BBQ Pizza</td>
                            <td>$6.00</td>
                            <td class="col-2">
                                <img src="./image/menu-pizza.jpg" alt="" style="width: 50%;">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success ">Update Food</button>
                                <button type="button" class="btn btn-danger ">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Sadeko Momo</td>
                            <td>$6.00</td>
                            <td class="col-2">
                                <img src="./image/menu-momo.jpg" alt="" style="width: 50%;">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success ">Update Food</button>
                                <button type="button" class="btn btn-danger ">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Mixed Pizza</td>
                            <td>$10.00</td>
                            <td class="col-2">
                                <img src="./image/menu-pizza.jpg" alt="" style="width: 50%;">
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success ">Update Food</button>
                                <button type="button" class="btn btn-danger ">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Sed ipsum cillum in </td>
                            <td>$52.00</td>
                            <td class="col-2 ">
                                <p style="color:  #ff6b81;">Image not Added</p>
                            </td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success ">Update Food</button>
                                <button type="button" class="btn btn-danger ">Delete Food</button>
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