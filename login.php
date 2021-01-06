<?php
session_start();
require './class/connection.php';
if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $selectq = mysqli_query($connection, "select * from tbl_register where register_email ='{$email}' AND register_pwd = '{$password}' ") or die(mysqli_error($connection));
    $count = mysqli_num_rows($selectq);
    $row = mysqli_fetch_array($selectq);
    
    if($count>0){
        $_SESSION['registerid']="{$row['register_id']}";
        $_SESSION['registername']="{$row['register_name']}";
        $_SESSION['registeremail']="{$row['register_email']}";
        $_SESSION['registerpassword']="{$row['register_pwd']}";
        $_SESSION['registercpassword']="{$row['register_cpwd']}";
        header("location:index.php");
    }
 else {
         echo '<script language="javascript">';  
        echo 'alert(" Email and Password Not Match")';
        echo '</script>';
    }
    
}
?>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Log In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="col-form-label">User Email</label>
                                <input type="email" class="form-control" placeholder=" " name="email" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <input type="password" class="form-control" placeholder=" " name="password" required="">
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Log in">
                            </div>
                            <div class="sub-w3l">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
                                </div>
                            </div>
                            <p class="text-center dont-do mt-3">Don't have an account?
                                <a href="register.php" data-toggle="modal" data-target="#exampleModal2">
                                    Register Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        