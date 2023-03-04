<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once "component/style.php"
    ?>
</head>

<body>
    <?php
    include_once "component/header.php"
    ?>
    <?php
    include_once "component/sidebar.php"
    ?>


    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add Items</h1>
            <nav>
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li> -->
                    <li class="breadcrumb-item active">Here you can add items to your store.</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
               

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Item Info</h5>

                
                        
                            
                            <label for="inputText" class="col-sm-2 col-form-label">Item Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                            
                            <br>
                            <!-- <div class="row mb-3"> -->
                            <label for="inputEmail" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="#" class="form-control">
                            </div>
                            <!-- </div> -->
                            <br>
                            
                            
                            <!-- <div class="row mb-3"> -->
                            <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control">
                            </div>
                            <!-- </div> -->
                            <br>
                            <!-- <div class="row mb-3"> -->
                            <label for="inputNumber" class="col-sm-2 col-form-label">Item Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <!-- </div> -->
                            <br>
                            <!-- <div class="row mb-3"> -->
                            <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control">
                            </div>
                            <!-- </div> -->
                            <br>
                            <!-- <div class="row mb-3"> -->
                            <label for="inputTime" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <input type="#" class="form-control">
                            </div>
                            <!-- </div> -->
                            <br>
                            
                            
                           
                            <label for="inputPassword" class="col-sm-2 col-form-label">Item Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" style="height: 100px"></textarea>
                            </div>

                            <br>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Add Item</button>
                            </div>
                            
                            <!-- End General Form Elements -->

                    </div>
                </div>

            </div>


        </section>



    </main>

    <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>