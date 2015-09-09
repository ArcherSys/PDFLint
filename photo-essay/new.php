<!DOCTYPE HTML>
<html>
<head>
<title>New Photo Essay</title>
<script src="ckeditor/ckeditor.js"></script>
<script src="/core/js/jquery.js"></script>
<script src="/core/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/core/bootstrap/css/bootstrap.min.css"></script>
</head>
<body>
  <div class="container">
   <h1 class="title-header">New Photo Essay</h1>   
   <form method="post" action="saveToHTML.php">
    
        <input type="text" name="filename"  class="form-control">
  
              <textarea class="ckeditor" name="contents" id="photo-essay"></textarea>
   </form> 
  </div>
</body>
</html>

