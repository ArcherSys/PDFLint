<!DOCTYPE HTML>
<html>
<head>
<title>New Letter</title>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>

<script src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropbox.js/0.10.2/dropbox.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script src="tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<link rel="stylesheet" type="text/css" href="essays/essay.new.css">
<script src="bootstrap/js/bootstrap.js"></script>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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
selector:'textarea', 
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor "
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
     }
            
       ]});
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
 

   
	 });
		 });
       });
</script>


</head>
<body>
<div class="container-fluid">
<h1 class="title-header">New Document</h1>
<nav class="nav navbar-default navbar-fixed-top " role="navigation">
<ul class="nav nav-tabs" role="tablist">
<li class="active"><a href="#new">New</a></li>
<li><a href="#edit">Edit</a></li>
</ul>
</nav>
<div class="jumbotron">
<button id="start-togetherjs" type="button"
 onclick="TogetherJS(this); return false;"
 data-end-togetherjs-html="End TogetherJS">
  Start TogetherJS
</button>
<div class="input-group">
<form method ="POST" action="saveToHTMLFileLetter.php" id="docform">


<input type="text" name="title" id="title" class="form-control" placeholder="Title">

<input type="text" name="author" class="form-control" placeholder="Author">




<textarea name="body"></textarea>
<div class="btn-toolbar" role="toolbar" aria-label="Saver">
<div class="btn-group btn-group-lg" role="group" aria-label="Saver">
<button id="save">Save to ArcherVM</button><button id="dropbox-saver">Save To Dropbox</button></div></div>
</form>
</div>
</div>
</body>
</html>
