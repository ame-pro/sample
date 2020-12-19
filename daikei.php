<?php
function trapezoid($top, $bottom, $height) {
	$area = ($top + $bottom) * $height / 2;
	return $area;
}
$top = 10;
$bottom = 20;
$height = 30;
if (is_numeric($top) && is_numric($bottom) && is_numeric($height)) {
	$area = trapezoid($top, $bottom, $height);
} else {
	$area = null;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>台形の面積</title>
</head>
<body>
<p>上底<?= $top; ?></p>
<p>下底<?= $bottom; ?></p>
<p>高さ<?= $height; ?></p>
<p>面積<?= $area; ?></p>
</body>
</html>
