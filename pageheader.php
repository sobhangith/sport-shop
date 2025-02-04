<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه لوازم ورزشی</title>
    <link rel="stylesheet" href="for.css"> 
</head>
<body>
    <header>
        <h1>Sport Shop</h1> 
        <nav>
            <ul>
                <li><a href="index.php">خانه</a></li>
                <li><a href="product.php">محصولات</a></li>
                <li><a href="#">تماس با ما</a></li>
                <li><a href="about.php">درباره ما</a></li>
                <?php if (isset($_SESSION["login"])){ ?>
                    <li><a href="logout.php">خروج</a></li> 
                <?php }else{ ?>

                <li><a href="SlideNavbar.html">ثبت نام/ورود</a></li> 
               <?php }  ?>
                
                


            </ul>
        </nav>
    </header>
