<?php 
session_start();
if (isset($_SESSION['auth'])) 
{
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] ="You are already Logged In";
    }
    
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
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="POST">
                            <div class="form-group mb-3">
                                <label for=""> Email Id</label>
                                <input type="email" name="email"  placeholder="Enter your Email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password"  placeholder="Enter your password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit"  name="login_btn" class="btn btn-primary">Login Now</button>
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