<?php
include '../includes/config.php';
include '../includes/database.php';
if(isset($_GET['q'])){
$q = $_GET['q'];//sql injectie
$q = $mysqli->real_escape_string($q);

$query = "SELECT * FROM newsarticles WHERE title LIKE '".$q ."%'";
$result = $mysqli->query($query);

while($members = $result->fetch_assoc()){
    echo '<a href=?action=search&query='.urlencode($members['title']).'><div class=sbqs>'.strtolower(mb_strimwidth($members['title'], 0,26, "...")).'</div></a>';
}
}


 ?>
