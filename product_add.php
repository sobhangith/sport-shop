<?php include("pageheader.php"); ?>
<form action="product_add_action.php" method="post">
    <label for="name">نام محصول:</label>
    <input type="text" name="name" required><br>

    <label for="price">قیمت:</label>
    <input type="number" name="price" required><br>

    <label for="description">توضیحات:</label>
    <textarea name="description"></textarea><br>

    <label for="category">دسته‌بندی:</label>
    <select name="category" required>
        <option value="پر فروش">پر فروش</option>
        <option value="تخفیف خورده">تخفیف خورده</option>
        <option value="دیگر">دیگر</option>
    </select><br>

    <button type="submit">افزودن محصول</button>
</form>
<?php include("pagefooter.html"); ?>