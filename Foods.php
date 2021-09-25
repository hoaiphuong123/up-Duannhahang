<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="CSS/Style.css">
    <title>DuAnNhaHang-Update</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <img src="./image/logo.png" alt="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="categories.php">Categories</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link active" aria-current="page" href="Foods.php">Foods</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="food-seach">
        <div class="container text-center">
            <div class="row bg-seach justify-content-around">
                <form class="d-flex">
                    <input class="form-control md-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="food-menu">
        <div class="container ">
            <h2 class="text-center">Foods Menu</h2>
            <div class="container d-flex justify-content-between flex-wrap">
                <div class="col-6">
                    <div class="food-menu-box d-flex">
                        <div class="food-menu-img">
                            <img src="./image/menu-momo.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <H4>Dumplings Specials</H4>
                            <p class="food-price">$5.00</p>
                            <p class="food-detail">Chicken Dumplings with herbs from Mountains</p>
                            <br>
                            <a href="order.php" class=" btn btn-primary  mycolor">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="food-menu-box d-flex">
                        <div class="food-menu-img">
                            <img src="./image/burger.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <H4>Best Burger</H4>
                            <p class="food-price">$4.00</p>
                            <p class="food-detail">Burger with Ham,Pineapple and lots of Cheese</p>
                            <br>
                            <a href="order.php" class=" btn btn-primary  mycolor">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="food-menu-box d-flex">
                        <div class="food-menu-img">
                            <img src="./image/menu-momo.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <H4>Sadeko Momo</H4>
                            <p class="food-price">$6.00</p>
                            <p class="food-detail">Best Spincy Momo for Winter</p>
                            <br>
                            <a href="order.php" class=" btn btn-primary mycolor">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="food-menu-box d-flex">
                        <div class="food-menu-img">
                            <img src="./image/menu-pizza.jpg" alt="Chicke Hawain Pizza"
                                class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <H4>Mixed Pizza</H4>
                            <p class="food-price">$10.00</p>
                            <p class="food-detail">Pizza with chilen,Ham,Buff,Mudhroom and vaegetables</p>
                            <br>
                            <a href="order.php" class=" btn btn-primary  mycolor">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="food-menu-box d-flex">
                        <div class="food-menu-img">
                            <img src="./image/menu-pizza.jpg" alt="Chicke Hawain Pizza"
                                class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <H4>Mixed Pizza</H4>
                            <p class="food-price">$10.00</p>
                            <p class="food-detail">Pizza with chilen,Ham,Buff,Mudhroom and vaegetables</p>
                            <br>
                            <a href="order.php" class=" btn btn-primary  mycolor">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="text-center ">
                <a class=" text-decoration-none" href="#">See All Foods</a>
            </div>
        </div>

    </div>
    <div class="social">
        <div class="container text-center list-group-numbered ">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer">
        <div class="container text-center">
            <p> All rights reserved. designed by <a href="#" style="color:#ff6b81;">CSE485</a> </p>
        </div>
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