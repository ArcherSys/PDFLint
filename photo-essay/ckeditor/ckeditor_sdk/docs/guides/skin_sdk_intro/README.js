Ext.data.JsonP.skin_sdk_intro({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/skin_sdk_intro-section-what-is-a-skin%3F'>What is a Skin?</a></li>\n<li>\n<a href='#!/guide/skin_sdk_intro-section-the-%22moono%22-skin'>The \"Moono\" Skin</a></li>\n<li>\n<a href='#!/guide/skin_sdk_intro-section-the-anatomy-of-a-skin'>The Anatomy of a Skin</a></li></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='skin_sdk_intro-section-introduction'>Introduction</h1>\n\n<h2 id='skin_sdk_intro-section-what-is-a-skin%3F'>What is a Skin?</h2>\n\n<p>A skin is an add-on for CKEditor that makes it possible to change the look and\nfeel of its user interface (UI). Several aspects of the UI can be customized by\na skin, including colors, fonts, sizes, styles and icons.</p>\n\n<h2 id='skin_sdk_intro-section-the-%22moono%22-skin'>The \"Moono\" Skin</h2>\n\n<p><a href=\"http://ckeditor.com/addon/moono\">Moono</a> is the default skin of CKEditor. It is\nthe one included in the standard CKEditor distributions. It is actively\nmaintained by the CKEditor core developers and should be used as the starting\npoint for the creation and maintenance of custom skins.</p>\n\n<h2 id='skin_sdk_intro-section-the-anatomy-of-a-skin'>The Anatomy of a Skin</h2>\n\n<p>A skin is, technically speaking, represented by a set of files, grouped inside a\ndirectory.</p>\n\n<p>When CKEditor is used into a website, the following skin files are loaded in the\npage:</p>\n\n<ul>\n<li><strong>skin.js</strong>: registers the skin and makes it possible to optionally use some\nspecial skin features.</li>\n<li><strong>editor.css</strong>: contains the CSS styles used by the main editor interface.</li>\n<li><strong>dialog.css</strong>: loaded on demand, when a dialog is opened. Contains dialog\nspecific CSS styles.</li>\n</ul>\n\n\n<p>Actually, the above are the minimum set of files to be downloaded, but generally\nseveral other files are used, to make the skin easier to maintain and more\nlogically organized.</p>\n\n<p>In this document, we'll not go on depth details about the files contents. For\nthat, you should check the files available on the “Moono” skin. All files are\nwell documented and are very self-descriptive.</p>\n","title":"Introduction","meta_description":"Creating custom CKEditor skins.","meta_keywords":"ckeditor, editor, wysiwyg, skin, skins, tutorial, sample, sdk, example, development"});