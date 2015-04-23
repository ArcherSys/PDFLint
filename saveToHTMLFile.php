<?php
  
file_put_contents($_POST["filename"] || $_POST["title"].".html",$_POST["document"] || $_POST["content"] );
  ?>