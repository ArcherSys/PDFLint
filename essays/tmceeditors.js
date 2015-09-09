function PDFLintSave(element_id, html, body) {
        // Do some custom HTML cleanup
        html = html.replace(/a/g,'b');

        return html;
}
        tinymce.init(
{
selector:'textarea#newtext', 
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
toolbar1 : "newdocument bold italic underline strikethrough alignleft aligncenter alignright alignjustify styleselect" ,
toolbar2 : "formatselect fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript save",
toolbar3 : "insertdatetime forecolor backcolor",
});

 var Edit = new tinyMCE.Editor('textarea#edittext', {
save_callback: "PDFLintSave",
content_css : "essaycontent.css",
plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
toolbar1 : "newdocument bold italic underline strikethrough alignleft aligncenter alignright alignjustify styleselect" ,
toolbar2 : "formatselect fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript save",
toolbar3 : "insertdatetime forecolor backcolor",
},tinymce.EditorManager).init();


content = $("input#body").val();
    Edit.setContent(content);
});