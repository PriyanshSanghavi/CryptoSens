<?php
include("header.php");
session_start();
if(isset($_SESSION['id']))
{
    header("location:home.php");
}
?>
<head>
    <title>Login</title>
</head>
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center pt-5 pb-5">
                    <h3 class="p-5">Welcome to Digital Wallet</h3>
                    <div class="crypt-form shadow-lg rounded p-5 mt-3">
                        <div class="crypt-form-top text-center">
                        <div style="line-height: 1.2;  text-align: center; width: 100%;  display: block; margin-top: -50px; padding-bottom: 54px;">
                            <?php
                                if (@$_REQUEST['msg']=="fail") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Email Id or Password Invalid. </B>"."</span>";}  
                            ?>
                        </div>
                            <div>
                                <h5>Log in</h5>
                            </div>
                        </div>
                        <form action="login_code.php" method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="login1-email">Email</label>
                                </div>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="login1-password">Password</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-green btn-block mt-2">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
<!-- footer -->
<?php
include("footer.php");
?>