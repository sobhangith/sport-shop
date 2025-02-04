
<?php include("pageheader.php"); ?>
<div class="main-content">
    <section class="products">
        <div class="product">
            <img src="images/ba.jpg" alt="توپ بسکتبال">
            <h3>توپ بسکتبال</h3>
            <p>قیمت: 300,000 تومان</p>
            <form method="POST">
                <input type="hidden" name="productName" value="توپ بسکتبال">
                <input type="hidden" name="productPrice" value="300000">
                <button type="submit">اضافه به سبد خرید</button>
            </form>
        </div>
        <div class="product">
            <img src="images/football.jpg" alt="توپ فوتبال">
            <h3>توپ فوتبال</h3>
            <p>قیمت: 250,000 تومان</p>
            <form method="POST">
                <input type="hidden" name="productName" value="توپ فوتبال">
                <input type="hidden" name="productPrice" value="250000">
                <button type="submit">اضافه به سبد خرید</button>
            </form>
        </div>
        <div class="product">
            <img src="images/football_shoes.jpg" alt="کفش فوتبال">
            <h3>کفش فوتبال</h3>
            <p>قیمت: 400,000 تومان</p>
            <form method="POST">
                <input type="hidden" name="productName" value="کفش فوتبال">
                <input type="hidden" name="productPrice" value="400000">
                <button type="submit">اضافه به سبد خرید</button>
            </form>
        </div>
    </section>
</div>

<?php include("pagefooter.html"); ?>
