<?php
if (isset($_GET['key'])) {
	$result = $_GET['key'];
} else {
	$result = '不正なアクセスです。';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>formを使わずにget送信2</title>
</head>
<body>
<?= $result; ?><br>
<a href="foods.php">戻る</a>
</body>
</html>
