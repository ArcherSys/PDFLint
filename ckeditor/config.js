/**
 
* @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 
* For licensing, see LICENSE.md or http://ckeditor.com/license
 
*/


CKEDITOR.editorConfig = function( config ) {
config.extraPlugins = 'a11yhelp,performx,uploadcare,confighelper,quicktrans,newpage,eqneditor,keyconf,floating-tools,fontawesome,ckeditor-gwf-plugin,docprops,wysiwygarea,devtools,widget,wordcount,autocorrect,mathjax,lineutils,tweetabletext,coops-dmp,coops-connector,change,coops,widgetbootstrap,widgettemplatemenu,widgetcommon,oembed,htmlbuttons';
config.scayt_autoStartup = true;
config.filebrowserBrowseUrl =  '/browser/browse.php';
config.filebrowserImageBrowseUrl = '/browser/browse.php?type=Images';
config.filebrowserUploadUrl = '/uploader/upload.php';
config.filebrowserImageUploadUrl= '/uploader/upload.php?type=Images';
config.filebrowserWindowWidth= '640';
config.filebrowserWindowHeight= '480';
config.font_names = "Segoe UI;Times;Calibri;Meiryo UI;Verdana;Comic Sans MS;Arial;Tahoma;Trebuchet MS;Impact;Helvetica;Segoe Print;GoogleWebFonts;Segoe UI Light;Segoe UI Bold;Cambria;Cambria Math;sans-serif;serif;Papyrus;Antigua";
config.fullPage = true;
config.toolbarCanCollapse = true;
config.allowedContent = true;
config.enterMode = CKEDITOR.ENTER_DIV;
config.shiftEnterMode = CKEDITOR.ENTER_P;
config.pasteFromWordRemoveFontStyles = false;
config.indentOffset = 4;
UPLOADCARE_PUBLIC_KEY = "f777f111dfbd73e7af9d"; // set public key for Uploadcare
UPLOADCARE_LOCALE = 'en';

};