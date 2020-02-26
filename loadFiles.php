<?php
	header('Content-Type: application/json');
	$files = glob($_GET["folder"] . $_GET["filter"]);
	foreach ($files as &$str) {
		$str = str_replace($_GET["folder"], '', $str);
	}
	echo json_encode($files);
?>