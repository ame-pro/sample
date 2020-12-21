<?php
$foods = array(
	1 => "肉",
	2 => "野菜",
	3 => "卵",
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>formを使わずにget送信</title>
</head>
<body>
<?php foreach ($foods as $key => $food) : ?>
<a href="./result.php?key=<?= $key; ?>">
<?= $food . '<br>'; ?></a>
<?php endforeach; ?>
</body>
</html>
