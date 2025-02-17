<?php
include("pageheader.php");
$id = $_GET["id"];
$connect = mysqli_connect("localhost", "root", "", "mysite");
$result = mysqli_query($connect, "SELECT * FROM `pruduct` WHERE `id`=$id");
$row = mysqli_fetch_array($result);
mysqli_close($connect);
?>

<form action="product_edit_action.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <label for="name">نام محصول:</label>
    <input type="text" name="name" value="<?php echo $row["name"]; ?>" required><br>

    <label for="price">قیمت:</label>
    <input type="number" name="price" value="<?php echo $row["price"]; ?>" required><br>

    <label for="description">توضیحات:</label>
    <textarea name="description"><?php echo $row["description"]; ?></textarea><br>

    <label for="category">دسته‌بندی:</label>
    <select name="category" required>
        <option value="پر فروش" <?php if ($row['category'] == 'پر فروش') echo 'selected'; ?>>پر فروش</option>
        <option value="تخفیف خورده" <?php if ($row['category'] == 'تخفیف خورده') echo 'selected'; ?>>تخفیف خورده</option>
        <option value="دیگر" <?php if ($row['category'] == 'دیگر') echo 'selected'; ?>>دیگر</option>
    </select><br>

    <button type="submit">ویرایش محصول</button>
</form>

<?php include("pagefooter.html"); ?>