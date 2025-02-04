<?php include("pageheader.php"); ?>
<?php
$txt=$_POST["txt"];
$email=$_POST["email"];
$Phone=$_POST["Phone"];
$pswd=$_POST["pswd"];
$c=mysqli_connect("localhost","root","","site");
$query=mysqli_query($c,"INSERT INTO `signin`(`txt`, `email`, `phone`, `pswd`) VALUES ('$txt','$email','$Phone','$pswd');");
mysqli_close($c);
if($query==true){
    ?>
    <p>ثبت نام انجام شد</p>
    <?php

}else{  
    ?>
    <p>ثیت نام انجام نشد</p>
    <?php
}


?>
<?php include("pagefooter.html"); ?>