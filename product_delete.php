<?php
include("pageheader.php");

$id = $_GET["id"];
$connect = mysqli_connect("localhost", "root", "", "mysite");
$result = mysqli_query($connect, "DELETE FROM `pruduct` WHERE `id`=$id");
mysqli_close($connect);

if ($result == true) {
    ?>
    <script>
        location.replace("product.php");
    </script>
    <?php
} else {
    echo("خطا: محصول حذف نشد.");
}
?>
<?php
include("pagefooter.html");
?>