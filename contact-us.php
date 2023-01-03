<?php
include("header.php");
session_start();
if(!isset($_SESSION['id']))
{
    header("location:login.php");
}
?>
<head>
    <title>Contact Us</title>
</head>
    <div class="container">
        <div class="row">
            <div class="col md-12 text-center"><br><br><br><br><br><br><br><br><br><br>
                <h1 class="title-high mt-5 mb-4 text-white position-relative">Contact Us</h1>
                <p class="title-alt mt-3">Email : Priyansh.sce20@sot.pdpu.ac.in </p>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- footer -->
<?php
include("footer.php");
?>