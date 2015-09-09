<!<!DOCTYPE HTML>
<html>
<head>
<title>New Essay, New Work, New You - PDFLint </title>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<script src="jquery.min.js"></script>
    
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/> 
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css"/>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap.js"></script>
<link href="bootstrap.css" rel="stylesheet">
<link href="bootstrap-tour.min.css" rel="stylesheet">
<link href="bootstrap-tour.min.css" rel="stylesheet">
<script src="bootstrap-tour.min.js"></script>
<script src="bootstrap-tour.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" type="text/css" href="landing-page.css">
    <script src="https://www.dropbox.com/static/api/dropbox-datastores-1.1-latest.js" type="text/javascript"></script>
    <script>
$(function(){
  var tour =  new Tour({
       steps: [
          {
            element: "#intro", 
            title: "Welcome to PDFLint!" ,
            content: "Hi! Welcome to PDFLint By Weldon H  \n and the ACOSF! I'm Weldon H , Himself, \n and I am going to teach you \n how to use this fun tool!",
       },
         {
           element: "#newessay",
           title: " Goto the Essay Creator ",
           content: "Click on The New Essay Button",
            },
          {
           element: "#opengmail",
           title: "Send! ",
           content: "If you have this, click here to send your work.",
            },
         
          ]});
       
           tour.init();
           tour.start();
  
   
             var  options = {

    // Required. Called when a user selects an item in the Chooser.
    success: function(files) {
        var WantsFile = confirm("Are you sure you want to download this? \n " +files[0].link);
      if(WantsFile){
        
  }
                       
    },

    // Optional. Called when the user closes the dialog without selecting a file
    // and does not include any parameters.
    cancel: function() {

    },

    // Optional. "preview" (default) is a preview link to the document for sharing,
    // "direct" is an expiring link to download the contents of the file. For more
    // information about link types, see Link types below.
    linkType: "preview", // or "direct"

    // Optional. A value of false (default) limits selection to a single file, while
    // true enables multiple file selection.
    multiselect: false, // or true

    // Optional. This is a list of file extensions. If specified, the user will
    // only be able to select files with these extensions. You may also specify
    // file types, such as "video" or "images" in the list. For more information,
    // see File types below. By default, all extensions are allowed.
    extensions: ['.pdf', '.doc', '.docx'],
};
          var button = Dropbox.createChooseButton(options);
document.getElementById("container").appendChild(button);
var client = new Dropbox.Client({key: '95ozyt3y86sz08p'}
);

// Try to finish OAuth authorization.
$(".jumbotron a#intro").click(function(){
    

client.authenticate({interactive: true}, function (error) {
    if (error) {
        alert('Authentication error: ' + error);
    }
});


if (client.isAuthenticated()) {
    // Client is authenticated. Display UI.
}
});
      });
 
          </script>
    <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="zu9l1hq2hal0xwb"></script>
</head>
<body>
<div class="container-fluid">
<nav class="nav navbar-default navbar-fixed-top" role="navigation">
<ul class="nav nav-tabs">
<li class="active"><a href="essays/">Essays</a></li>
<li ><a href="essays/index.php">View My Essays</a></li>
<li ><a id="newessay" href="essays/essay.new.php">Create New Essay</a></li>
<li><a id="opengmail" href="https://gmail.com">Gmail</a></li> 
</ul>
</nav>
<div class="jumbotron">
 <div class="container-fluid">
   
      <h1 id="pdfl-tour">PDFLint Word Processing</h1> 
<span class="glyphicon glyphicon-pencil"></span><p>The Frugal MS Word</p>
<p><a class="btn btn-primary btn-lg" href="#" role="button" id="intro">Get Started!</a></p>
   </div>
 </div>
</div>
    <div class="row">
<div class="col-xs-6 col-md-3">
<iframe src="https://public.ducksboard.com/w/KC8UJCz9eWmst24q5qve" width="300" height="704" frameborder="0" scrolling="no" style="border: solid rgba(243, 243, 232, 0.701961) 10px; border-radius: 5px; -moz-box-sizing: content-box; -webkit-box-sizing: content-box; box-sizing: content-box;"></iframe>
</div>
<div class="col-xs-6 col-md-3">
    <iframe src="https://public.ducksboard.com/w/egwcCByKAWv9KbjTroeV" width="300" height="332" frameborder="0" scrolling="no" style="border: solid rgba(243, 243, 232, 0.701961) 10px; border-radius: 5px; -moz-box-sizing: content-box; -webkit-box-sizing: content-box; box-sizing: content-box;"></iframe>
    </div>
</div>
<form class="navbar-form" role="search">
    <div id="container" class="container-fluid">
        </div>
</form>
</body>
</html>