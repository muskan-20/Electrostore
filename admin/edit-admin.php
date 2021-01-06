<?php
session_start();
if (!isset($_SESSION['adminid'])) {
    header("location:login.php");
}
$connection = mysqli_connect("localhost", "root", "", "admin");

$editid = $_GET['editid'];
$selectquery = mysqli_query($connection, "select * from tbl_admin where admin_id='{$editid}'") or die("error in query" . mysqli_error($connection));
$rowfromdb = mysqli_fetch_array($selectquery);


if (($_POST)) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name1 = $_POST['name'];
    $email1 = $_POST['email'];
    $pwd = $_POST['password'];
    $updatequery = mysqli_query($connection, "update tbl_admin set admin_name='{$name1}',admin_email='{$email1}', admin_password='{$pwd}' where admin_id='{$id}'") or die("error in update query" . mysqli_error($connection));
    if($updatequery){
    header("location:admintable.php");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | General Form Elements</title>
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
                                <h1>Admin Form</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active">Admin Form</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Update Details</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form role="form" method="post" >
                                        <div class="card-body">
                                            <div class="form-group">
                                                
                                                <input type="hidden" value="<?php echo $rowfromdb['admin_id'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="id" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" value="<?php echo $rowfromdb['admin_name'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" value="<?php echo $rowfromdb['admin_email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" value="<?php echo $rowfromdb['admin_password'] ?>" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                                            </div>
                                            <div class="view">

                                                <a class="" href="admintable.php">
                                                    View Your Records
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" value="update" name="submitbtn" class="btn btn-primary">Update</button>
                                            <button type="button" value="cancel" class="btn btn-primary" onclick="window.location = 'admintable.php';">Cancel</button>
                                        </div>
                                    </form>
                                </div>

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
                        <!-- bs-custom-file-input -->
                        <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
                        <!-- AdminLTE App -->
                        <script src="dist/js/adminlte.min.js"></script>
                        <!-- AdminLTE for demo purposes -->
                        <script src="dist/js/demo.js"></script>
                        <script type="text/javascript">
                                                $(document).ready(function () {
                                                    bsCustomFileInput.init();
                                                });
                        </script>
                        </body>
                        </html>
