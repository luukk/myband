<?php
if(isset($_GET['query'])){
  $getquery = $_GET['query'];
  $getquery = $mysqli->real_escape_string($getquery);
  $a = $mysqli->query("SELECT * FROM newsarticles WHERE title LIKE '%".urldecode($getquery)."%'");
  $results = $a->num_rows;
  if($results <=1){
    echo '<h2 class=result_text>'.$results.' resultaat gevonden</h2>';
  }else{
    echo '<h2 class=result_text>'.$results.' resultaaten gevonden</h2>';
  }
}
?>
