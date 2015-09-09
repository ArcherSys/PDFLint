<?php
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\View.php";
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\jQueryManager.php";
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\CloudAdapter.php";

require_once $_SERVER["DOCUMENT_ROOT"]."\includes\TinyMCESupport.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Viewer\jQueryManager;
use ArcherSys\Devices\CloudAdapter;
use ArcherSys\Documents\TinyMCESupport;

$essaycreator = new View("New Essay", function(){
?>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<?php
  jQueryManager::addjQuery();
  CloudAdapter::importDropbox();
?>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<?php
  TinyMCESupport::addContext();
?>
<link rel="stylesheet" type="text/css" href="essay.new.css">
<script src="bootstrap.js"></script>
<link href="bootstrap.css" rel="stylesheet">
<link href="bootstrap-tour.min.css" rel="stylesheet">
<link href="bootstrap-tour.min.css" rel="stylesheet">
<script src="bootstrap-tour.min.js"></script>
<script src="bootstrap-tour.js"></script>
<script src="https://togetherjs.com/togetherjs-min.js"></script>

<script>
TogetherJSConfig_getUserName = function () {

return prompt("Username:");

};
TogetherJSConfig_toolName = "BIRD";
TogetherJSConfig_on_ready = function () {
  sendTogetherJSURLToServer(TogetherJS.shareUrl());
};
function PDFLintSave(element_id, html, body) {
        // Do some custom HTML cleanup
        html = html.replace(/a/g,'b');

        return html;
}
 tinymce.init({
selector:"textarea",
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
gecko_spellcheck: true,
autosave_ask_before_unload: true,
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor autosave importcss"
   ],
toolbar1 : "newdocument bold italic underline strikethrough alignleft aligncenter alignright alignjustify styleselect" ,
toolbar2 : "formatselect fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript save",
toolbar3 : "insertdatetime forecolor backcolor",
paste_auto_cleanup_on_paste : true,
      	paste_postprocess : function(pl, o) {
            // remove extra line breaks
            o.node.innerHTML = o.node.innerHTML.replace(/<p.*>\s*(<br>|&nbsp;)\s*<\/p>/ig, "");
        }
});

var introToPDFLint =  new Tour({
       steps: [
         {
           element: "#title",
           title: "Naming your Document ",
           content: "Click on The Title Box and type in the Title",
            },
               {
           element: "#author",
           title: "Authoring  your Document ",
           content: "Click on The Author Box and type in Your Name",
            },
               {
           element: "#mceu_30",
           title: "Editing your Document ",
           content: "Click on The Document Body Box and type in the Title",
            },
             {
           element: "#togetherjs-dock",
           title: "Collaboration",
           content: "Click on one of the buttons here to start collaboration",
         },
{
     element: "#dropbox-saver",
     title: "Saving your Essays Online",
     content: " Click this button to save your work to Dropbox."
     },
     {
      element: "#dropbox-loader",
      title: "Loading Essays from Dropbox",
      content: "Load your Documents from Dropbox by clicking this button here!"
}]});
       $(function(){
         introToPDFLint.init();
	 introToPDFLint.start();

	 $("#save").click(function(){
		 $("#docform").submit();
	 });
		 $("#dropbox-saver").click(function(){
                      var client = new Dropbox.Client({ key: "brwekpcno93vtpz" });
    client.authenticate(function(error, client) {

        client.writeFile("/Documents/" + $("input[name=title]").val()+".html", tinymce.activeEditor.getContent(), function(error, data) {
        if (error) {
    alert(error);  // Something went wrong.
  }else{
            alert("saved!");
            }
       
    });
       $("#dropbox-loader").click(function(){

                      var client = new Dropbox.Client({ key: "brwekpcno93vtpz" });
    client.authenticate(function(error, client) {
            client.readFile("/Documents/" +  prompt("Filename:"),function(stat, data){
              tinymce.activeEditor.setContent(data);
});
});
   });
	 });
		 });
       });
</script>

<?php
} ,function(){
?>
<div class="container-fluid">
<h1 class="title-header">New Document</h1>
<nav class="nav navbar-default navbar-fixed-top " role="navigation">
<ul class="nav nav-tabs" role="tablist">
<li class="active"><a href="#new">New</a></li>
<li><a href="#edit">Edit</a></li>
</ul>
</nav>

<button id="dropbox-saver">Save To Dropbox</button><button id="dropbox-loader">Load a file</button><button id="tourstart">Start PDFLint 4 Essay Editor Tour</button>
<button id="start-togetherjs" type="button"
 onclick="TogetherJS(this); return false;"
 data-end-togetherjs-html="End TogetherJS">
  Start TogetherJS
</button>


<form method ="POST" action="createproc.php" id="docform">


<input type="text" name="title" id="title" class="form-control" placeholder="Title">

<input type="text" name="author" class="form-control" placeholder="Author">


<textarea name="body"><?php echo file_get_contents($_GET["essay"]); ?></textarea>
<button id="save">Save to ArcherVM</button>
</form>
</div>
<?php

});
?>
