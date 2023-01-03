<?php
include("header.php");
?>
<head>
    <title>Register</title>
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
                                if (@$_REQUEST['msg']=="failedemail") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Email Id is already exist. </B>"."</span>";}  
                                if (@$_REQUEST['msg']=="failedcontact") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Contact No is already exist. </B>"."</span>";}  
                                if (@$_REQUEST['msg']=="failedcpassword") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Password and Confirm Password not match. </B>"."</span>";}  
                            ?>
                        </div>
                            <div>
                                <h5>Register</h5>
                            </div>
                        </div>
                        <form action="register_code.php"  method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" >Full Name</label>
                                </div>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Contact No</label>
                                </div>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Email</label>
                                </div>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">UPI ID</label>
                                </div>
                                <input type="text" class="form-control" name="upi">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Password</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label"> Confirm Password</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input type="password" name="cpassword" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-green btn-block mt-2">Register</button>
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