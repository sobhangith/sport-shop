<?php
include("pageheader.php");
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$category = $_POST["category"];

$connect = mysqli_connect("localhost", "root", "", "mysite");
$result = mysqli_query($connect, "UPDATE `pruduct` SET `name`='$name', `price`='$price', `description`='$description', `category`='$category' WHERE `id`=$id;");
mysqli_close($connect);

if ($result == true) {
    ?>
    <script>
        location.replace("product.php");
    </script>
    <?php
} else {
    echo("خطا: تغییرات ذخیره نشد.");
}
?>
<?php
include("pagefooter.html");
?>