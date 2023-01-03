<?php
include("header.php");
session_start();
$id = $_SESSION['id'];
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
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
                                if (@$_REQUEST['msg']=="failedemail") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Email Id is already exist. </B>"."</span>";}  
                                if (@$_REQUEST['msg']=="failedcontact") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Contact No is already exist. </B>"."</span>";}  
                                if (@$_REQUEST['msg']=="success") 
                                    { echo "<br><span style='color: green;'>"."<B>Profile Updated Successfully. </B>"."</span>";}  
                            ?>
                        </div>
                            <div>
                                <h5>Profile</h5>
                            </div>
                        </div>
                        <?php
                        $q="select * from user where id='$id'";
                        $rs=mysqli_query($cn,$q);
                        if($row=mysqli_fetch_array($rs))
                        {?>
                        <form action="profileupdate_code.php"  method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" >Full Name</label>
                                </div>
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']?>">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Contact No</label>
                                </div>
                                <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']?>">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Email</label>
                                </div>
                                <input type="text" class="form-control" name="email" value="<?php echo $row['email']?>">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">UPI ID</label>
                                </div>
                                <input type="text" class="form-control" name="upi" value="<?php echo $row['upi']; }?>">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-green btn-block mt-2">Update Profile</button>
                            </div>
                        </form>
                        <div class="float-right form-itext">
                            <span class="pr-1">Update</span><a href="updatepassword.php">Password</a><span class="pr-1"> ?</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- footer -->
<?php
include("footer.php");
?>