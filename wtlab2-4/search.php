<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery - Search</title>
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
            <h1>SEARCH</h1>
        </div>
    </div>
    <section class="section-wrapper">
        <h1>Put positive number here, and it will show sum of its digits</h1>
        <form name="search" action="" method="post">
            <input type="text" maxlength="10" placeholder="Num here!" name="number">
            <button type="submit">Go!</button>
        </form>
        <?php
            displayAnswer();
        ?>
    </section>
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
