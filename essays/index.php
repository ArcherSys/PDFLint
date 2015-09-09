/<html>
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
    </head>
    </body>
    <div class="container">
    <ul class="list-group">
<?php
$dir = __DIR__.'/essay-products';
$files = scandir($dir);
while (list(, $docpath) = each($files)) {
    echo "<li class=\"list-group-item\"><a href=\"http://localhost/Producktiviti/PDFLint/essays/essay-products/".$docpath."\">".$docpath."</a></li>\n";
}
?>
</ul>
</div>
</body>
</html>