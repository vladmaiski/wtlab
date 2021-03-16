<?php

function addComment() {
	if (isset($_POST["submitAction"]) && checkCommnetFields()) {
		$regexp = "/\b([a-z0-9._-]+@(?!bsuir)[a-z0-9.]+)\b/ui";
		$correctmessage = preg_replace($regexp,'#Stop e-mail#',$_POST['message']);\
		saveCommentToFile($_POST['name'], $correctmessage);
		echo '<meta http-equiv="refresh" content="1; URL=comments.php">'; 
	}
}

function checkCommnetFields() : bool {
	if(empty($_POST['name'])) {
		 echo '<h2 class = "error">Empty nickname.</h2>';
		return false;
	}

	if(empty($_POST['message'])) {
		echo '<h2 class = "error">Empty message.</h2>';
		return false;
	}

	return true;
}

function saveCommentToFile($nickname, $comment) {
	$time = new DateTime("now");
	$strTime = $time->format('d M Y');
    $arr = array ('nickname'=>$nickname,'date'=>$strTime,'message'=>$comment);
    $filePath = realpath('res/com.json');
    $comments = file_get_contents($filePath);
	$comments = json_decode($comments, true);
	array_push($comments, $arr);
	//$comments[] = $arr;
	$jsonData = json_encode($comments);
	file_put_contents($filePath, $jsonData);
}

function showComments() {
	$filePath = realpath('res/com.json');
	$comments = file_get_contents($filePath);
	$comments = json_decode($comments, true);
	for($i = sizeof($comments) - 1; $i >= 0 ; $i--) {
		$name = $comments[$i]["nickname"];
		$date = $comments[$i]["date"];
		$message = $comments[$i]["message"];
		$html = '<div class="msg-block">
            		<h3>' . $name . '</h3>
            		<time>' . $date .'</time>
            		<p>' . $message . '</p>
        		</div>';
        echo "$html";
	}
}