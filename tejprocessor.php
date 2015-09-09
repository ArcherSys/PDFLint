<?php
   switch($_POST["template"]){
       case "summer":
   $code = "<!DOCTYPE HTML>\n<html>\n<head>\n<title>".$_POST["title"]."</title>\n<style>\nthead  th{font-family: Segoe UI;background-color: teal;color: white;height: 4%;width: 33.3%;margin-left: 10px;-webkit-user-select: none;}::selection {background-color: black; color: white;}</style></head><body><table id='tej'><thead><tr><th>Quotation from the text</th><th>Analysis and Opinion of the text</th><th>Level 3 Question for the Future</th></tr></thead><tbody><tr><td>".$_POST["quotation"]."</td><td>".$_POST["analysis"]."</td><td>".$_POST["question"]."</td></tr></tbody></table></body></html>";
   file_put_contents($_POST["filename"],$code);
   break;
   case "annotative":
       
   $code = "<!DOCTYPE HTML>\n<html>\n<head>\n<title>".$_POST["title"]."</title>\n<style>\nthead  th{font-family: Segoe UI;background-color: teal;color: white;height: 4%;width: 33.3%;margin-left: 10px;-webkit-user-select: none;}::selection {background-color: black; color: white;}</style></head><body><table id='tej'><thead><tr><th>Quotation from the text</th><th>Literary Technique</th><th>Analysis</th></tr></thead><tbody><tr><td>".$_POST["quotation"]."</td><td>".$_POST["analysis"]."</td><td>".$_POST["question"]."</td></tr></tbody></table></body></html>";
file_put_contents($_POST["filename"],$code);   
break;
   }
?>