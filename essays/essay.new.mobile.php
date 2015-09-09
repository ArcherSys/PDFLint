<!DOCTYPE HTML>
<html>
<head>
<title>New Essay</title>

<meta name="viewport" content="width=device-width initial-scale=1">
    
  <link rel="stylesheet" href="/core/mobile-theme/themes/ArcherSys_OS.css" />
  <link rel="stylesheet" href="/core/mobile-theme/themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="/core/mobile-theme/themes/jquery.mobile.structure-1.4.5.min.css" />

    <script src="/core/js/jquery.js"></script>
<script src="tinymce/js/tinymce/jquery.tinymce.min.js"></script>

  <script src="/Producktiviti/PDFLint/tinymce/js/tinymce.min.js"></script>
  
  <script src="/core/mobile-theme/jquery.mobile-1.4.5.min.js"></script>
  <script>
      
function PDFLintSave(element_id, html, body) {
        // Do some custom HTML cleanup
        html = html.replace(/a/g,'b');

        return html;
}
 tinymce.init({
selector:"textarea",
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor autosave"
   ],
toolbar1 : "newdocument bold italic underline strikethrough alignleft",
toolbar2:   "aligncenter alignright alignjustify styleselect" ,
toolbar3 : "formatselect fontselect",
toolbar4: "fontsizeselect cut copy paste",
toolbar5: "bullist numlist outdent indent blockquote",
toolbar6: "undo redo removeformat subscript superscript save",
toolbar7 : "insertdatetime forecolor backcolor",
paste_auto_cleanup_on_paste : true,
      	paste_postprocess : function(pl, o) {
            // remove extra line breaks
            o.node.innerHTML = o.node.innerHTML.replace(/<p.*>\s*(<br>|&nbsp;)\s*<\/p>/ig, "");
        }
});
  </script>
</head>
<body>
    <div data-role="page" id="home">
        <div data-role="header">
            <h1>New Essay </h1>
            
        </div>
        <div data-role="main" class="ui-content">
            <form>
                <textarea ></textarea>
            </form>
            
        </div>
    </div>
    <div data-role="page" id="newdoc">
        <div data-role="header">
            <h1>New Document</h1>
        </div>
    </div>
</body>
</html>