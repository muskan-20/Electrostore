<?Php
session_start();
if (!isset($_SESSION['adminid'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Simple Tables</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <?php
            include './themepart/navbar.php';
            ?>
            <!-- /.navbar -->


            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <!-- Main Sidebar Container -->
            <?php
            include './themepart/mainslidebar.php';
            ?>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Order Tables</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">

                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Your Details</h3>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <?php
                                        $connection = mysqli_connect("localhost", "root", "", "admin");
                                        if (isset($_GET['id'])) {
                                            $id = $_GET['id'];
                                            
                                        }
                                        $q = "SELECT
    `tbl_order`.`order_date`
    , `tbl_order`.`order_status`
    , `tbl_order`.`shipping_name`
    , `tbl_order`.`shipping_address`
    , `tbl_order`.`shipping_mobile`
    , `tbl_order_detail`.`product_price`
    , `tbl_order_detail`.`product_qty`
    , `tbl_product`.`product_name`
FROM
    `admin`.`tbl_order_detail`
    INNER JOIN `admin`.`tbl_order` 
        ON (`tbl_order_detail`.`order_id` = `tbl_order`.`order_id`)
    INNER JOIN `admin`.`tbl_product` 
        ON (`tbl_product`.`product_id` = `tbl_order_detail`.`product_id`);";
                                        $query = mysqli_query($connection, $q)or die(mysqli_error($connection));
                                        ?>
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Address</th>
                                                    <th>Product Name</th>
                                                    <th>Product Qty</th>
                                                    <th>Product Price</th>
                                                    

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($query)) {
                                                    $i++;
                                                    echo "<tr>";
                                                    echo "<td>$i</td>";
                                                    echo "<td>{$row['order_date']}</td>";
                                                    echo "<td>{$row['order_status']}</td>";
                                                    echo "<td>{$row['shipping_name']}</td>";
                                                    echo "<td>{$row['shipping_mobile']}</td>";
                                                    echo "<td>{$row['shipping_address']}</td>";
                                                    echo "<td>{$row['product_name']}</td>";
                                                    echo "<td>{$row['product_qty']}</td>";
                                                    echo "<td>{$row['product_price']}</td>";
                                                    echo "</tr>";
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.row -->

                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php
            include './themepart/footer.php';
            ?>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>
