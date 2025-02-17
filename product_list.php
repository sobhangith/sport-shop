<?php
include("pageheader.php");
$connect = mysqli_connect("localhost", "root", "", "mysite");
$result = mysqli_query($connect, "SELECT * FROM `pruduct`");
mysqli_close($connect);
?>

<div class="main-content">
    <h2>لیست محصولات</h2>
    <p style="text-align: right; margin-top: 20px;">
        <a href="product_add.php"><button>افزودن محصول</button></a>
    </p>
    <!-- List of Products -->
    <div class="product-list">
        <?php while ($row = mysqli_fetch_array($result)): ?>
            <div class="product-item">
                <div class="product-actions">
                    <a href="product_delete.php?id=<?php echo $row["id"]; ?>"><button>حذف</button></a>
                    <a href="product_edit.php?id=<?php echo $row["id"]; ?>"><button>ویرایش</button></a>
                </div>
                <div class="product-title"><?php echo htmlspecialchars($row["name"]); ?></div>
                <div class="product-price">قیمت: <?php echo number_format($row["price"]); ?> تومان</div>
                <div class="product-category">دسته‌بندی: <?php echo htmlspecialchars($row["category"]); ?></div>
                <div class="product-description">توضیحات: <?php echo htmlspecialchars($row["description"]); ?></div>
            </div>
        <?php endwhile; ?>
    </div>

    <!-- Add Product Button at the Bottom -->
   
</div>

<?php include("pagefooter.html"); ?>