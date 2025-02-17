<?php include("pageheader.php"); ?>

<div class="main-content">
    <section>
        <h2 id="populer">محصولات پر فروش</h2>
        <section class="products">
            <?php
            $connect = mysqli_connect("localhost", "root", "", "mysite");
            $result = mysqli_query($connect, "SELECT * FROM `pruduct` WHERE category='پر فروش'");
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="product">';
                echo '<img src="uploads/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['name']) . '">';
                echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                echo '<p>قیمت: ' . number_format($row['price']) . ' تومان</p>';
                echo '<form method="POST">';
                echo '<input type="hidden" name="productName" value="' . htmlspecialchars($row['name']) . '">';
                echo '<input type="hidden" name="productPrice" value="' . htmlspecialchars($row['price']) . '">';
                echo '<button type="submit">اضافه به سبد خرید</button>';
                echo '</form>';
                echo '</div>';
            }
            mysqli_close($connect);
            ?>
        </section>

        <div><h3 id="takhfif">محصولات تخفیف خورده</h3></div>
        <section class="products">
            <?php
            $connect = mysqli_connect("localhost", "root", "", "mysite");
            $result = mysqli_query($connect, "SELECT * FROM `pruduct` WHERE category='تخفیف خورده'");
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="product">';
                echo '<img src="uploads/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['name']) . '">';
                echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                echo '<p>قیمت: ' . number_format($row['price']) . ' تومان</p>';
                echo '<form method="POST">';
                echo '<input type="hidden" name="productName" value="' . htmlspecialchars($row['name']) . '">';
                echo '<input type="hidden" name="productPrice" value="' . htmlspecialchars($row['price']) . '">';
                echo '<button type="submit">اضافه به سبد خرید</button>';
                echo '</form>';
                echo '</div>';
            }
            mysqli_close($connect);
            ?>
        </section>
    </section>
</div>

<?php include("pagefooter.html"); ?>