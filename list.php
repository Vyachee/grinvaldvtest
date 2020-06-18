<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		include 'media/php/db.php';

		$list = R::findAll('guests');

		foreach($list as $item) {
			$email = $item['email'];
			$author = $item['author'];
			$text = $item['text'];

			echo $email . "<br>" . $author . "<br>" . $text . "<hr>";
		}

	?>
</body>
</html>