<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></script>

<?php
require 'models/cookie.php';
require 'includes/config.php' ;
require_once 'libs/smarty/Smarty.class.php';
require 'includes/bootstrap.php' ;
require_once 'includes/database.php' ;
$templateParser->assign('title', 'Slash');
$templateParser->display('head.tpl');
$templateParser->assign('get',$_GET);


$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$templateParser->assign('currpage',$action);
switch ($action) {
  case 'tour':
    require 'models/select_tourData.php';
    $templateParser->display('header2.tpl');
    $templateParser->assign('tour',$res);
    $templateParser->display('tour.tpl');
    break;

  case 'home';
  default:
  $templateParser->display('header.tpl');
    $pagenum = isset($_GET['pagenum']) ? $_GET['pagenum'] : 1;
  require 'models/select_newsarticles.php';
  $templateParser->assign('number',$pagenum);
  $templateParser->assign('pagenum',$pagenum);
  $templateParser->assign('data', $data);
  $templateParser->assign('to',$total_pages);
  $templateParser->display('newsarticles.tpl');
    break;
  case 'search':
    $templateParser->display('header.tpl');
  require 'models/searchqueryoutput.php';
  $templateParser->assign('hoi',$a);
  $templateParser->display('search.tpl');
  break;
  case 'bio':
    $templateParser->display('header.tpl');
  require'models/select_contact.php';
  $templateParser->assign('data',$result);
  $templateParser->display('bio.tpl');
  break;
  case 'contact':
    $templateParser->display('header.tpl');
    $templateParser->display('contact.tpl');
    break;
}
$templateParser->display('footer.tpl');
