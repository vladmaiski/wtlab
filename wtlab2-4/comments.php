<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery - Comments</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="res/icon.png" type="image/png">
    <?php
        include 'scripts.php';
        include 'comments_scripts.php';
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
            <h1>COMMENTS</h1>
        </div>
    </div>
    <section>
        <?php showComments();?>
    </section>
    <section class="comment-wrapper">
        <form method="POST">
            <p>Nickname:</p>
            <input type="text" maxlength="15" name="name" value="<?php if (isset($_POST["name"])) echo $_POST["name"] ?>" />
            <p>Your comment:</p>
            <textarea  rows="20" cols="70" style="resize: none" name="message" maxlength="300" value="<?php if (isset($_POST["message"])) echo $_POST["message"] ?>"></textarea>
            <p><input name="submitAction" type="submit"></p>
        </form>
        <?php
            addComment();
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