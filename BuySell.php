<?php
include("header.php");
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
?>
<head>
    <title>Buy Sell</title>
</head>
<div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center pt-5 pb-5">
                    <div class="crypt-form shadow-lg rounded p-5 mt-3">
                        <div class="crypt-form-top text-center">
                            <div style="line-height: 1.2;  text-align: center; width: 100%;  display: block; margin-top: -50px; padding-bottom: 54px;">
                            <?php
                                if (@$_REQUEST['msg']=="bsuccess") 
                                    { echo "<br><span style='color: green;'>"."<B>Coin Buy Successfully. </B>"."</span>";}  
                                else if (@$_REQUEST['msg']=="bfail") 
                                    { echo "<br><span style='color: red;'>"."<B>Coin Buying process failed. </B>"."</span>";}  
                            ?>
                            </div>
                            <div>
                                <h5>BUY</h5></div></div>
                        <form action="buy_code.php" method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Currency</label>
                                </div>
                                <select name="coinname" class="form-control">
                                    <?php
                                        $q="select * from coin";
                                        $rs=mysqli_query($cn,$q);
                                        while($row=mysqli_fetch_array($rs))
                                        { ?>
                                            <option value="<?php echo $row['coinname']; ?>"><?php echo $row['coinname']; ?></option>
                                        <?php } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Coin</label>
                                </div>
                                <input type="number" class="form-control" name="balance" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-green btn-block mt-2">BUY</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="text-center pt-5 pb-5">
                    <div class="crypt-form shadow-lg rounded p-5 mt-3">
                        <div class="crypt-form-top text-center">
                            <div style="line-height: 1.2;  text-align: center; width: 100%;  display: block; margin-top: -50px; padding-bottom: 54px;">
                            <?php
                                if (@$_REQUEST['msg']=="ssuccess") 
                                    { echo "<br><span style='color: green;'>"."<B>Coin Sell Successfully. </B>"."</span>";}  
                                else if (@$_REQUEST['msg']=="sfail") 
                                    { echo "<br><span style='color: red;'>"."<B>Coin Selling process failed. </B>"."</span>";}  
                            ?>
                        </div>
                            <div>
                                <h5>SELL</h5></div></div>
                        <form action="sell_code.php" method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Currency</label>
                                </div>
                                <select name="coinname" class="form-control">
                                    <?php
                                        $q="select * from coin";
                                        $rs=mysqli_query($cn,$q);
                                        while($row=mysqli_fetch_array($rs))
                                        { ?>
                                            <option value="<?php echo $row['coinname']; ?>"><?php echo $row['coinname']; ?></option>
                                        <?php } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-red btn-block mt-2">SELL</button>
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