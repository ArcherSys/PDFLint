<!DOCTYPE HTML>
<html>
<head>
<title>New Document</title>
<script src="http://localhost/Producktiviti/PDFLint/ckeditor/ckeditor.js"></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
<script src="http://localhost/Producktiviti/PDFLint/ckeditor/config.js" type="text/javascript"></script>
<script src="http://localhost/Producktiviti/PDFLint/ckeditor/styles.js" type="text/javascript"></script>
<link href="http://localhost/Producktiviti/PDFLint/ckeditor/plugins/autosave/css/autosave.min.css?t=EAPE" type="text/css" rel="stylesheet">
<script src="http://localhost/Producktiviti/PDFLint/ckeditor/plugins/autosave/js/extensions.min.js?t=EAPE" type="text/javascript"></script>
<link rel="stylesheet"  href="archersys-ui.css"/>
</head>
<body>
<form action="saveToFile.php" method="post">
<div class="archersys-pdflint-panel">
 <input type="text" class="archersys-pdflint-filename" placeholder="filename" name="doc-filename"/>
</div>
 <textarea class="ckeditor archersys-pdflint-editor" id="doc"></textarea>
</form>
</body>
</html>