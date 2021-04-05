<?php
    function displayNav() {
        $pName = getPageName();
        echo '<li class="' . ($pName === 'index' ? 'active' : '') . '"><a href="index.php">HOME</a></li>';
        echo '<li class="' . ($pName === 'menu' ? 'active' : '') . '"><a href="menu.php">MENU</a></li>';
        echo '<li class="' . ($pName === 'comments' ? 'active' : '') . '"><a href="comments.php">REVIEWS</a></li>';
        echo '<li class="' . ($pName === 'contact' ? 'active' : '') . '"><a href="contact.php">CONTACT</a></li>';
        echo '<li class="' . ($pName === 'search' ? 'active' : '') . '"><a href="search.php">SEARCH</a></li>';
        echo '<li class="' . ($pName === 'order' ? 'active' : '') . '"><a href="order.php">ORDER</a></li>';
    }

    function displayAnswer() {
        $num = isset($_POST['number']) ? $_POST['number'] : '';
        if(!empty($num)) {
        	$sum = 0;
        	$isCorrect = true;
        	$isReal = false;
        	$start = 0;
        	
        	if($num[0] === '0')
        		$isCorrect = false;
        		
        	if($num[0] === '-') {
        		$start = 1;
        		$isCorrrect = true;
        	}

        	while($start < strlen($num)) {
			if(is_numeric($num[$start])) {
				$sum += $num[$start];
			} else if ($num[$start] === ',') {
				if($isReal) {
					$isCorrect = false;
					break;
				}
				$isReal = true;
			} else {
				$isCorrect = false;
				break;
			}
			$start++;
		}
		if($isCorrect) {
			echo '<h1>Your number is: ' . $num . '</h1>';
			echo '<h1>Sum of digits: ' . $sum . ' </h1>';
		} else
			echo '<h2 class = "error">Incorrect value</h2>';
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

define("DTC", "12:00:00"); // Delivery Time Change

function getDeliveryDate() {
    if (isset($_POST["submitAction"])) {
        if (checkFields()) {
            $deliveryDate = $_POST["date"];
            $deliveryDate = str_replace('.', '-', $deliveryDate);
            $minDelivDate = new DateTime("today");
            $deliveryDate = new DateTime($deliveryDate);
            if (new DateTime("now") > new DateTime(DTC)) {
                $minDelivDate->modify("+ 2 days");
            } else {
                $minDelivDate->modify("+ 1 day");
            }
            if ($deliveryDate < $minDelivDate) {
                $strMinDelivTime = $minDelivDate->format('d.m.Y');
                $output = '<h2 class = "info">Delivery is available no earlier than ' . $strMinDelivTime . '</h2>';
                echo $output;
                return;
            }
            $deliveryDate = getNotHoliday(DateTime::createFromFormat("d-m-Y", $deliveryDate->format("d-m-Y")));
            $strDelivTime = $deliveryDate->format('d M Y');
            $output = '<h2 class = "reg">Delivery available at ' . $strDelivTime . '</h2>';
            echo $output;
            regOrder($deliveryDate, $_POST["e-mail"]);
        }
    } else
        echo "<h1>Input value</h1>";
}

function regOrder($date, $email) {
    $fd = fopen(realpath("res/orders.txt"), 'a');
    $orderInfo = $date->format("d-m-Y") . " : " . $email . "\n";
    fputs($fd, $orderInfo);
    fclose($fd);
}

function getNotHoliday(DateTime $deliveryDate): DateTime
{
    $data = file_get_contents(realpath("res/holidays.txt"));
    $holidays = explode("\n", $data);
    for($i = 0; $i < count($holidays); $i++) {
        $currentHoliday = $holidays[$i];
        if (validateDate($currentHoliday, "d-m-Y")) {
            $holiday = DateTime::createFromFormat("d-m-Y", $currentHoliday);
            $diff = $holiday->diff($deliveryDate);
            if ($diff->d == 0 && $diff->m == 0) {
                $deliveryDate->modify("+ 1 day");
                $holidayStr = $holiday -> format("d.m.Y");
                $delivStr = $deliveryDate -> format("d.m.Y");
                echo '<h2 class = "info">' . $holidayStr . ' is holiday, delivery moved to ' . $delivStr . '</p>';
            }
        }
    }
    return $deliveryDate;
}

function checkFields(): bool
{
    $email = $_POST["e-mail"];
    if (empty($email)) {
        echo '<h2 class = "error">Enter your e-mail</h2>';
        return false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<h2 class = "error">Enter correct e-mail</h2>';
        return false;
    }

    $date = $_POST["date"];
    if (empty($date)) {
        echo '<h2 class = "error">Enter date</h2>';
        return false;
    }

    $date = str_replace('.', '-', $date);
    if (!validateDate($date)) {
        echo '<h2 class = "error">Date should be in the next format dd.mm.yy</h2>';
        return false;
    }

    return true;
}

function validateDate($date, $format = 'd-m-Y'): bool {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}
