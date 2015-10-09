<?php

setcookie('disclamer',"user", time() +2629743.83,'/');
if(!isset($_COOKIE['disclamer'])){
  include './views/disclamer.tpl';
}
 ?>
