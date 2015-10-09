<?php
$nr_items_page = 8;
$offset = ($pagenum -1) * $nr_items_page;
$result = "SELECT * FROM newsarticles LIMIT " . $offset. "," . $nr_items_page;
$data = $mysqli->query($result);

$query = "SELECT * FROM newsarticles";
$rs_result = $mysqli->query($query);
$total_records = $rs_result->num_rows;
$total_pages = ceil($total_records / $nr_items_page);
?>
