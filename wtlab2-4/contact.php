<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery - Contact</title>
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
            <h1>CONTACT</h1>
        </div>
    </div>
    <section>
        <div class="contact-block">
            <h3>Phone Numbers</h3>
            <p><a href="tel:+375441111111">+375(44)111 111 1</a></p>
            <p><a href="tel:+375252222222">+375(25)222 222 2</a></p>
        </div>
        <div class="contact-block">
            <h3>Support Emails</h3>
            <p><a href="mailto:">ome_email1@icloud.com</a></p>
            <p><a href="mailto:">ome_email2@icloud.com</a></p>
            <p><a href="mailto:">ome_email3@icloud.com</a></p>
        </div>
        <div class="contact-block">
            <h3>Restaurant's Addresses</h3>
            <p><a href="https://www.google.ru/maps/place/%D0%A2%D0%A6+Outleto/@53.9010794,27.3858,12z/data=!4m5!3m4!1s0x46dbd011177086dd:0x246ffa3dec74841f!8m2!3d53.8769731!4d27.5172329">Moscow, Gorky, 25, 6a</a></p>
            <p><a href="https://www.google.ru/maps/place/%D0%A2%D0%A6+Outleto/@53.9010794,27.3858,12z/data=!4m5!3m4!1s0x46dbd011177086dd:0x246ffa3dec74841f!8m2!3d53.8769731!4d27.5172329">Minsk, Gikalo, 9</a></p>
        </div>
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