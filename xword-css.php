<?php
header("Content-Type: text/css");
echo ".xword-jumbotron{\n";
  echo (isset($_GET["xword-jumbotron-background-image"])) ? "background-image: url(\"".$_GET["xword-jumbotron-background-image"]."\");\n" : " \n" ;
  echo (isset($_GET["xword-jumbotron-background-repeat"])) ? "background-repeat: ".$_GET["xword-jumbotron-background-repeat"].";\n" : "background-repeat: no-repeat;\n";



  echo(isset($_GET["xword-jumbotron-background-size"])) ? "background-size: ".$_GET["xword-jumbotron-background-size"].";\n" : "background-size: cover;\n";



  echo (isset($_GET["xword-jumbotron-height"])) ?  "height: ".$_GET["xword-jumbotron-height"].";\n" : "200px;";

echo (isset($_GET["xword-jumbotron-font-family"])) ? "font-family: ".$_GET["xword-jumbotron-font-family"].";\n" : "font-family: Segoe UI;";
echo(isset($_GET["xword-jumbotron-font-family-color"])) ?  "color: ".$_GET["xword-jumbotron-font-color"].";\n" : "color: #000000;\n";
echo"}";
?>
