<?Php
session_start();
if(!isset($_SESSION['adminid'])){
    header("location:login.php");
}
$connection = mysqli_connect("localhost", "root", "","admin");
$path = "upload/";
if(isset($_POST['submitbutton'])){
    $pname = $_POST['name'];
    $pdetail = $_POST['detail'];
    $pprice = $_POST['price'];
    $file_name = $_FILES['file123']['name'];
    $file_tmp = $_FILES['file123']['tmp_name'];
    $category = $_POST['category'];
  
    $query = mysqli_query($connection, "insert into tbl_product (product_name,product_detail,product_price,product_image,category) values('{$pname}','{$pdetail}','{$pprice}','{$file_name}','{$category}')") or die("error in query" . mysqli_error($connection));
    header("location:producttable.php");
   if($query)
     {
           move_uploaded_file($file_tmp, "upload/" . $file_name);
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
                <h3 class="card-title">Fill Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputname" placeholder="Name" name="name" required>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Product Detail</label>
                    <input type="text" class="form-control" id="exampleInputdetail" placeholder="Detail" name="detail" required>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <input type="text" class="form-control" id="exampleInputprice" placeholder="Price" name="price" required>
                  </div>
                 
           
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="file123">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Category </label>
                    
                    <?php
                    $selectquery = mysqli_query($connection, "select * from tbl_category") or die(mysqli_errno($connection));
                    echo "<select class='form-control' name='category'>";
                    
                    while ($categoryrow= mysqli_fetch_array($selectquery))
                    {
                        echo "<option value={$categoryrow['category_id']}>{$categoryrow['category_name']}</option>";
                    }
                    echo "</select>";
                    ?>
                  </div>
                      <div class="view">
                      
                     <a class="" href="producttable.php">
                         View Your Records
                      </a>
                  </div>
                </div>
               
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"   name="submitbutton"   class="btn btn-primary">Submit</button>
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
