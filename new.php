



<?php

 


  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/includes/component-functions.php";

 // Connects to your Database
@ini_set("max_execution_time", 300);
 mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or die(mysql_error());

 mysql_select_db("acoserver_acoserver") or die(mysql_error());

 
 //checks cookies to make sure they are logged in



 
if(isset($_COOKIE['ID_my_site']))

 {

 	$username = $_COOKIE['ID_my_site'];

 	$pass = $_COOKIE['Key_my_site'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check ))

 		{

 

 //if the cookie has the wrong password, they are taken to the login page

 		if ($pass != $info['password'])

 			{ 			header("Location: login.php");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{


  
?>

<!DOCTYPE HTML>
<html>
<head>
<title>New Document</title>
<script src="http://localhost/Producktiviti/PDFLint/ckeditor/ckeditor.js"></script>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
<link  rel="stylesheet"  href="archersys-ui.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropbox.js/0.10.2/dropbox.min.js">
</script>
<script>CKEDITOR.dtd.$removeEmpty['span'] = false;</script>
<script src="/settings/components/webcomponentsjs/webcomponents.js"></script>
<link rel="import" href="/settings/components/polymer.polymer.html">
<script>$(function(){
$("#dbsave").click(function(){
    client.authenticate(function(error, client) {

        client.writeFile($(".archersys-pdflint-filename").val(), $(".ckeditor").text(), function() {
            alert("saved!");
        });


    });
});
});
</script>
</head>
<body>
<button id="dbsave">Save To Dropbox</button>

<form action="saveToHTMLFile.php" method="post">
<div class="archersys-pdflint-panel">
 <input type="text" class="archersys-pdflint-filename" placeholder="filename" name="doc-filename"/>
</div>
 <textarea class="ckeditor archersys-pdflint-editor" id="doc"></textarea>
</form>
</body>
</html>

<?php
  
 			}

 		}

 		}

else {
  
header("Location: http://localhost/login.php?redirect_uri=http://localhost".$_SERVER["PHP_SELF"]);

 }

  

		
		?>