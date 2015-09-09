<!DOCTYPE HTML>
<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/ViewManager.php";
use ArcherSys\Viewer\BootstrapViewManager;

?>
<html>
<head>
<title>XWord</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
<?php
  BootstrapViewManager::addXwordSearch();
?>
</div>
</body>
</html>
