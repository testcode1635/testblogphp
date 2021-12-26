<?php 
session_start();
if (isset($_SESSION['auth'])) 
{
    $_SESSION['message'] ="You are already Logged In";
    header('location:index.php');
    exit(0);
}
include('includes/header.php');
include('includes/navber.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="registercode.php" method="post">
                            <div class="form-group mb-3">
                                <label for=""> First Name</label>
                                <input type="text" required name="fname" placeholder="Enter your First Name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> Last Name</label>
                                <input type="text" required name="lname" placeholder="Enter your Last Name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""> Email</label>
                                <input type="email"  required name="email" placeholder="Enter your Email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" required name="password" placeholder="Enter your password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" required name="cpassword" placeholder="Enter your Confirm password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>


<?php 
include ('includes/footer.php');
?>