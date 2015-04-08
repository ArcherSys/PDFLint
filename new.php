



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
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropbox.js/0.10.2/dropbox.min.js">
</script>
<script type="text/javascript">CKEDITOR.dtd.$removeEmpty['span'] = false;</script>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>

<script src="/core/js/jquery.js"></script>
<link rel="stylesheet" href="bootstrap-tour.min.css">

<!-- jQuery library -->

<!-- Latest compiled JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

<script src="bootstrap-tour.min.js"></script>
<script src="bootstrap-tour.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="landing-page.css">
<script>

$(function(){
  var TogetherJSConfig_toolName="CafeSync";
  var TogetherJSConfig_findRoom = {prefix: "cafe",max:20};
  var TogetherJSConfig_inviteFromRoom = true;
  if(window.navigator.mozApps){
TogetherJS(this);  }else{
    $("#cfsc").click(TogetherJS);
  }
      var client = new Dropbox.Client({ key: "brwekpcno93vtpz" });

  $("#dbload").click(function(){
        client.authenticate(function(error, client) {

    client.readFile("/Documents/" + prompt("File in Docs Folder:"), function(error, data) {
      if (error) {
alert(error);  } else{
    CKEDITOR.instances.doc.setData(data);
  }
  });
        });
  });
$("#dbsave").click(function(){
    client.authenticate(function(error, client) {

        client.writeFile("/Documents/" + $(".archersys-pdflint-filename").val(), CKEDITOR.instances.doc.getData(), function(error, data) {
        if (error) {
    alert(error);  // Something went wrong.
  }else{
            alert("saved!");
            }
        });
 
 

    });
}); 
});
</script>
</head>
<body>
<div class="container-fluid">
 
<button id="dbsave">Save To Dropbox</a></li>
<button id="dbload"><i class="fa-fa-dropbox"></i>Load From Dropbox</a></li>

<button id="cfsc">CafeSync</a></li>

<form action="saveToHTMLFile.php" method="POST">
<div class="archersys-pdflint-panel ">
 <input type="text" class="archersys-pdflint-filename form-control" placeholder="filename" name="filename"/>
</div>
 <textarea name="document" class="ckeditor archersys-pdflint-editor" id="doc"></textarea>
</form>
</div>
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