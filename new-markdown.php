<!DOCTYPE HTML>
<html>
<head>
<title> New Markdown Document</title>
<script src="/core/js/jquery.js"></script>
<link rel="stylesheet" type="text/less" href="markdownedit/less/bootstrap-markdown.min.less">
<script src="/core/js/jquery.js"></script>
<link rel="stylesheet" type="text/less" href="markdownedit/css/bootstrap-markdown.min.css">
			
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropbox.js/0.10.2/dropbox.min.js"></script>
<script>
$(function(){
	
      var client = new Dropbox.Client({ key: "brwekpcno93vtpz" });
	$(".btn").click(function(){
 client.authenticate(function(error, client) {

        client.writeFile("/Documents/" + $("input[name=title]").val()+ ".md",CKEDITOR.instances.doc.getData(),function(error, data) {
        if (error) {
     alert(error);  // Something went wrong.
  }else{
            alert("Work Update: saved!");
            }
        
 
    });

    });
	});
});
</script>
<link rel="stylesheet" href="/core/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/core/bootstrap/css/bootstrap.css">
<script src="/core/bootstrap/js/bootstrap.min.js"></script>
<script src="markdownedit/js/bootstrap-markdown.js"></script>
</head>
<body>
<div class="container">
<form method="get">
    <input class="form-control" name="title" type="text" placeholder="Title?" />
    <textarea name="content" data-provide="markdown" rows="10"></textarea>
    <label class="checkbox">
      <input name="publish" type="checkbox"> Publish
    </label>
    <hr/>
    <button  class="btn">Submit</button>
  </form> 
</div>
</body>
</html>
