<?php
include("header.php");
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
?>
<head>
    <title>Home</title>
</head>
<div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="text-center pt-5 pb-5">
                    <div class="crypt-form shadow-lg rounded p-5 mt-3">
                        <div class="crypt-form-top text-center">
                            <div style="line-height: 1.2;  text-align: center; width: 100%;  display: block; margin-top: -50px; padding-bottom: 54px;">
                            <?php
                                if (@$_REQUEST['msg']=="success") 
                                    { echo "<br><span style='color: green;'>"."<B>New Currency added Successfully. </B>"."</span>";}  
                                else if (@$_REQUEST['msg']=="fail") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Something Wrong. </B>"."</span>";}  
                            ?>
                        </div>
                            <div>
                                <h5>ADD CURRENCY</h5>
                            </div>
                        </div>
                        <form action="add_code.php" method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">NAME</label>
                                </div>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">CURRENCY ID</label>
                                </div>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="id">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-green btn-block mt-2">ADD</button>
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
                                if (@$_REQUEST['msg']=="rsuccess") 
                                    { echo "<br><span style='color: green;'>"."<B>Currency Removed Successfully. </B>"."</span>";}  
                                else if (@$_REQUEST['msg']=="rfail") 
                                    { echo "<br><span style='color: red;'>"."<B>Oops! Something Wrong. </B>"."</span>";}
                            ?>
                        </div>
                            <div>
                                <h5>SELL</h5>
                            </div>
                        </div>
                        <form action="remove_code.php" method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Currency</label>
                                </div>
                                <select name="coin" class="form-control">
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
                                <button class="btn btn-lg btn-red btn-block mt-2">REMOVE</button>
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