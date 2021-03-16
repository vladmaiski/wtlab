<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery - Order</title>
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
                <h1>ORDER</h1>
            </div>
        </div>
        <section class="section-wrapper">
            <form name="search" method="POST">
                <h1>Your e-mail: </h1>
                <input type="text" name="e-mail" value="<?php if (isset($_POST["e-mail"])) echo $_POST["e-mail"] ?>" maxlength="20"/>
                <h1>Preferred delivery date: </h1>
                <input type="text" name="date" value="<?php if (isset($_POST["date"])) echo $_POST["date"] ?>" maxlength="11"/>
                <button name="submitAction" type="submit">Go!</button>
            </form>
            <?php
                getDeliveryDate();
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