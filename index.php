<!DOCTYPE HTML>
<html>
<head>
<title>New Essay, New Work, New You - PDFLint </title>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<?php
 require_once $_SERVER["DOCUMENT_ROOT"]."/includes/ViewManager.php";
 require_once $_SERVER["DOCUMENT_ROOT"].'/includes/LogicManager.php';
  require_once $_SERVER["DOCUMENT_ROOT"].'/includes/StyleManager.php';

 use ArcherSys\Viewer\LogicManager;
  use ArcherSys\Viewer\StyleManager;
 use ArcherSys\Viewer\BootStrapManager;
 LogicManager::addJQuery("jquery.min.js");
 StyleManager::addBootStrap();
 ?>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap.js"></script>
<link href="bootstrap.css" rel="stylesheet">
<?php
  StyleManager::addBootStrapTour();

  StyleManager::addBootStrap();
?>

<script src="bootstrap-tour.min.js"></script>
<script src="bootstrap-tour.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="landing-page.css">
    <script src="https://www.dropbox.com/static/api/dropbox-datastores-1.1-latest.js" type="text/javascript"></script>
    <script src="PDFLJS.js">

          </script>
    <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="zu9l1hq2hal0xwb"></script>
</head>
<body>


<?php
    BootStrapManager::defineFluidContainer("start");
    ?>
<nav class="nav navbar-default navbar-fixed-top" role="navigation">
<ul class="nav nav-tabs">

  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Create New...
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="essays/essay.new.php">Essay</a></li>
      <li><a href="new.php">Document</a></li>
      <li><a href="#">Submenu 1-3</a></li>
    </ul>
  </li>
<li><a id="opengmail" href="https://gmail.com">Gmail</a></li>
<li><a id="goto-edmodo" href="#edmodo">Edmodo</a></li>
<li class="active"><a href="essays/">Essays</a></li>
<li ><a href="essays/index.php">View My Essays</a></li>
</ul>
</nav>

 <div class="container-fluid">
 
   
      <h1 id="pdfl-tour">PDFLint Word Processing</h1>
<span class="glyphicon glyphicon-pencil"></span><p>The Frugal MS Word</p>
<p>
<a class="btn btn-primary btn-lg" href="#" role="button" id="intro">Get Started!</a></p>
   </div>
 </div>
</div>
    <div class="row">
<div class="col-xs-6 col-md-3">
<iframe src="https://public.ducksboard.com/w/fMBtdI8JAZqDeIYAYrrD" width="300" height="332" frameborder="0"id="Forks" scrolling="no" style="border: solid rgba(243, 243, 232, 0.701961) 10px; border-radius: 5px; -moz-box-sizing: content-box; -webkit-box-sizing: content-box; box-sizing: content-box;"></iframe>
</div>
<div class="col-xs-6 col-md-3">
    <iframe src="https://public.ducksboard.com/w/egwcCByKAWv9KbjTroeV" width="300" height="332" frameborder="0" scrolling="no" id="Issues" style="border: solid rgba(243, 243, 232, 0.701961) 10px; border-radius: 5px; -moz-box-sizing: content-box; -webkit-box-sizing: content-box; box-sizing: content-box;"></iframe>
    </div>
<div class="col-xs-6 col-md-3">
   <iframe src="https://public.ducksboard.com/w/GHi_XGpJevVXQDSRevte" id="Watchers" width="300" height="332" frameborder="0" scrolling="no" style="border: solid rgba(243, 243, 232, 0.701961) 10px; border-radius: 5px; -moz-box-sizing: content-box; -webkit-box-sizing: content-box; box-sizing: content-box;"></iframe>
    </div>
</div>

<form class="navbar-form" role="search">
    <div id="container" class="container">
    
       </div>
</form>

</body>
</html>
</html>