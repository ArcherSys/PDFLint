/**
 
* @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 
* For licensing, see LICENSE.md or http://ckeditor.com/license
 
*/


CKEDITOR.editorConfig = function( config ) {
config.extraPlugins = 'a11yhelp,performx,confighelper,floating-tools,fontawesome,ckeditor-gwf-plugin,docprops,wysiwygarea,devtools,widget,wordcount,autocorrect,mathjax,lineutils,tweetabletext,coops-dmp,coops-connector,change,coops';
config.scayt_autoStartup = true;
config.filebrowserBrowseUrl =  '/browser/browse.php';
config.filebrowserImageBrowseUrl = '/browser/browse.php?type=Images';
config.filebrowserUploadUrl = '/uploader/upload.php';
config.filebrowserImageUploadUrl= '/uploader/upload.php?type=Images';
config.filebrowserWindowWidth= '640';
config.filebrowserWindowHeight= '480';
config.font_names = "Segoe UI;Times;Verdana;Comic Sans MS;Arial;Tahoma;Trebuchet MS;Impact;Helvetica;Segoe Print;GoogleWebFonts;Segoe UI Light;Segoe UI Bold;Cambria;Cambria Math;sans-serif;serif;Papyrus;Antigua";
config.fullPage = true;
config.toolbarCanCollapse = true;

};