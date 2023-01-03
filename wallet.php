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
    <title>Wallet</title>
</head>
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center pt-5 pb-5">
                    <div class="crypt-form shadow-lg rounded p-5 mt-3">
                        <div class="crypt-form-top text-center">
                            <div style="line-height: 1.2;  text-align: center; width: 100%;  display: block; margin-top: -50px; padding-bottom: 54px;">
                            <?php  
                                if (@$_REQUEST['msg']=="wsuccess") 
                                    { echo "<br><span style='color: green;'>"."<B>Withdraw Successfully. </B>"."</span>";}    
                                if (@$_REQUEST['msg']=="wfailed") 
                                    { echo "<br><span style='color: red;'>"."<B>Withdraw failed. </B>"."</span>";}
                            ?>
                        </div>
                            <h5>Wallet</h5>
                        </div>
                        <?php
                        $q="select * from wallet where userid='$id'";
                        $rs=mysqli_query($cn,$q);
                        if($row=mysqli_fetch_array($rs))
                        {?>
                        <form action="wb_code.php"  method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Current Balance</label>
                                </div>
                                <input type="text" class="form-control" name="balance" value="<?php echo $row['balance']; }?>" disabled>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-green btn-block mt-2">WITHDRAW BALANCE</button>
                            </div>
                        </form><br>
                        <div class="crypt-form-top text-center">
                        <div style="line-height: 1.2;  text-align: center; width: 100%;  display: block; margin-top: -50px; padding-bottom: 54px;">
                            <?php  
                                if (@$_REQUEST['msg']=="success") 
                                    { echo "<br><br><span style='color: green;'>"."<B>Add Balance Successfully. </B>"."</span>";}    
                                if (@$_REQUEST['msg']=="failed") 
                                    { echo "<br><br><span style='color: red;'>"."<B>Add Balance failed. </B>"."</span>";}
                            ?>
                        </div>
                            <h5>ADD BALANCE</h5>
                        </div>
                        <form action="ab_code.php"  method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Amount</label>
                                </div>
                                <input type="number" class="form-control" name="balance">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-green btn-block mt-2">ADD BALANCE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="text-center pt-5 pb-5">
                    <div class="crypt-form shadow-lg rounded p-5 mt-3">
                        <div class="crypt-form-top text-center">
                            <h5>Coin BALANCE</h5>
                        </div>
                        <form action="#"  method="post">
                            <div class="form-group row">
                        <?php
                        $q="select * from coinwallet where userid='$id'";
                        $rs=mysqli_query($cn,$q);
                        while($row=mysqli_fetch_array($rs))
                        {?>
                                <input type="text" class="form-control col-md-6" name="coinname" value="<?php echo $row['coinname']; ?>" disabled> 
                                <input type="text" class="form-control col-md-6" name="coinbalance" value="<?php echo $row['balance']; ?>" disabled>
                        <?php } ?>
                            </div>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- footer -->
<?php
include("footer.php");
?>