<?php
include 'config.php';
include 'ad_action_product.php';

error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>STC-Update Products</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <?php include 'ad_header.php'; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include 'ad_sidebar.php'; ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Delete Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="ad_index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="ad_approved.transactions.php">Products<a></li>
                    <li class="breadcrumb-item active">/ Delete Product</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">

            <?php
            // $sql_category = 'SELECT * FROM products';
            // $qry_category = mysqli_query($conn, $sql_category);
                                
            // while ($get_category = mysqli_fetch_array($qry_category)) {
            // $cat_name = $get_category['cat_name'];
            // $selected = ($cat_name == $class) ? 'selected' : '';
            // echo '<option value="' . $cat_name . '" ' . $selected . '>' . $cat_name . '</option>';
            // }
            ?>

            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div>
                        <div class="card-body">
                            <a href="ad_addproducts.php" type="button" class="btn btn-info" style="float: right;">
                                <i class="bx bxs-left-arrow-alt"></i></a>
                            <br><br>
                            <form action="ad_action_product.php" method="post">
                                <p>Are you sure you want to delete product? </p>
                                <input type="hidden" name="id" value="<?= $id ?>">
                        </div>
                    </div>

                    <div class="row mb-3 d-flex justify-center">
                        <div class="col-sm-4">
                            <input type="submit" name="softDelete" class="btn btn-danger" value="Delete Product">
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" name="cancel" class="btn btn-primary" value="       Cancel       ">
                        </div>
                    </div>

                    </form>
                </div>
            </div>
            </div>
            </div>
        </section>



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include 'ad_footer.php'; ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->


    <script type="text/javascript">
        $(document).ready(function() {
            $('#data-table').DataTable({
                paging: true
            });
        });
    </script>

</body>

</html>
