<?php
if (isset($_GET['key'])) {
	$result = $_GET['key'];
} else {
	$result = '未入力です。';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>サブ課題2-1</title>
</head>
<body>
<?= $result; ?>
</body>
</html>
