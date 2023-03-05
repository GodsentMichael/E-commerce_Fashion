<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once "component/style.php"
    ?>
</head>

<body>
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="./assets/img/logo.png" width="48" height="48" alt="McTaylor"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <?php
    include_once "component/header.php"
    ?>
    <?php
    include_once "component/sidebar.php"
    ?>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Order List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Order List</a></li>
                    <li class="breadcrumb-item active">View Prodouct List Here</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Branch</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>Designer</td>
                                        <td>Designer</td>
                                        <td>Designer</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Out of Stock</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>Designer</td>
                                        <td>Designer</td>
                                        <td>Designer</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Out of Stock</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.umd.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/js/main.js"></script>

</body>

</html>