<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery - Menu</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="res/icon.png" type="image/png">
    <?php
        include 'scripts.php';
    ?>
</head>
<body>
<div class="wrapper">
    <div class = "site-header">
        <header class = "logo">
            <h1>Delivery</h1>
        </header>
        <nav>
            <ul class = "menu">
                <?php
                    displayNav();
                ?>
            </ul>
        </nav>
        <div class = "tab-name">
            <h1>MENU</h1>
        </div>
    </div>
    <div id = "menu-list">
        <div class = "line">
            <figure class="menu-item">
                <a href="#"><img class = "menu-icon breakfast"></a>
                <figcaption>Breakfast <span><br>from 8.99</span></figcaption>
            </figure>
            <figure class="menu-item">
                <a href="#"><img class = "menu-icon fastfood"></a>
                <figcaption>Fast Food <span><br>from 6.99</span></figcaption>
            </figure>
            <figure class="menu-item">
                <a href="#"><img class = "menu-icon american"></a>
                <figcaption>American <span><br>from 2.99</span></figcaption>
            </figure>
        </div>
        <div class = "line">
            <figure class="menu-item">
                <a href="#"><img class = "menu-icon mexican"></a>
                <figcaption>Mexican <span><br>from 11.99</span></figcaption>
            </figure>
            <figure class="menu-item">
                <a href="#"><img class = "menu-icon chinese"></a>
                <figcaption>Chinese <span><br>from 5.99</span></figcaption>
            </figure>
            <figure class="menu-item">
                <a href="#"><img class = "menu-icon japanese"></a>
                <figcaption>Japanese <span><br>from 7.99</span></figcaption>
            </figure>
        </div>
    </div>
</div>
<footer class = "footer">
    <div>
        <div class = "socials">
            <h3>Our socials:</h3>
            <a href="#" class = "social-icon inst"></a>
            <a href="#" class = "social-icon vk"></a>
            <a href="#" class = "social-icon facebook"></a>
            <a href="#" class = "social-icon twitter"></a>
        </div>
        <div class = "copyright">
            <p>Copyright © 2021 Maiski Vladislav, group 951007</p>
        </div>
    </div>
</footer>
</body>
</html>