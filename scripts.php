<?php
    function displayNav() {
        $pName = getPageName();
        echo '<li class="' . ($pName === 'index' ? 'active' : '') . '"><a href="index.php">HOME</a></li>';
        echo '<li class="' . ($pName === 'menu' ? 'active' : '') . '"><a href="menu.php">MENU</a></li>';
        echo '<li class="' . ($pName === 'news' ? 'active' : '') . '"><a href="news.php">NEWS</a></li>';
        echo '<li class="' . ($pName === 'contact' ? 'active' : '') . '"><a href="contact.php">CONTACT</a></li>';
        echo '<li class="' . ($pName === 'search' ? 'active' : '') . '"><a href="search.php">SEARCH</a></li>';
    }

    function displayAnswer() {
        $num = isset($_POST['number']) ? $_POST['number'] : '';
        if(!empty($num)) {
            if(is_numeric($num) && $num > 0) {
                echo '<h1>Your number is: ' . $num . '</h1>';
                $sum = 0;
                do {
                    $sum += $num % 10;
                } while ($num = (int) $num / 10);
                echo '<h1>Sum of digits: ' . $sum . ' </h1>';
            } else {
                echo '<h2 class = "error">Incorrect value</h2>';
            }
        } else {
            echo '<h1>Input value</h1>';
        }
    }

    function getPageName() {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        $url = $url[count($url) - 1];
        $url = explode('.', $url);
        $url = $url[0];
        return $url;
    }

?>