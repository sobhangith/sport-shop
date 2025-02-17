<?php
include("pageheader.php");
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$category = $_POST["category"];

$connect = mysqli_connect("localhost", "root", "", "mysite");
$result = mysqli_query($connect, "INSERT INTO `pruduct`(`name`, `price`, `description`, `category`) VALUES ('$name', '$price', '$description', '$category');");
mysqli_close($connect);

if ($result == true) {
    echo("محصول با موفقیت ذخیره شد.");
} else {
    echo("خطا: محصول ذخیره نشد.");
}
?>
<?php
include("pagefooter.html");
?>