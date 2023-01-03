<?php
include("header.php");
?>
<head>
    <title>Profile</title>
</head>
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center pt-5 pb-5">
                    <div class="crypt-form shadow-lg rounded p-5 mt-3">
                        <div class="crypt-form-top text-center">
                            <div style="line-height: 1.2;  text-align: center; width: 100%;  display: block; margin-top: -50px; padding-bottom: 54px;">
                            <?php
                                if (@$_REQUEST['msg']=="vfailed") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Email and contact no not match. </B>"."</span>";}  
                            ?>
                        </div>
                            <div>
                                <h5>Update Password</h5>
                            </div>
                        </div>
                        <form action="password_code.php"  method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Email</label>
                                </div>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Contact No</label>
                                </div>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" >New Password</label>
                                </div>
                                <input type="text" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-green btn-block mt-2">Update Password</button>
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