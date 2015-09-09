<?php
$title = $_POST["title"];
$body = $_POST["body"];
$head = "<!DOCTYPE HTML><html><head><title>".$title."</title></head><body>";
$ext = ".html";
$name = $title;
$file = $name.$ext;
echo "<strong>Putting File...</strong>";
file_put_contents($file,$head.$_POST["body"]."</body></html>");
echo "Done Putting File!";
echo "Redirecting you to your work...";


