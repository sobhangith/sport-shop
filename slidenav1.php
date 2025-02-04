<?php include("pageheader.php"); ?>
<?php
$email=$_POST["email"];
$pswd=$_POST["pswd"];
$c=mysqli_connect("localhost" , "root" , "" ,"site");
$result=mysqli_query($c,"SELECT * FROM `signin` WHERE `email`='$email' and pswd='$pswd'");
mysqli_close($c);
$row=mysqli_fetch_array($result);
if($row){
    $_SESSION["login"]=true;
    ?>
    <script>
        location.replace("index.php")
    </script>
    <?php
}else{
    ?>
    <p> نام کاربری یا رمز عبور صحیح نیست</p>
    <?php
}
    ?>
<?php include("pagefooter.html"); ?>