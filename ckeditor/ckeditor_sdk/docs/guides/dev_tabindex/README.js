Ext.data.JsonP.dev_tabindex({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/dev_tabindex-section-influencing-tab-index'>Influencing Tab Index</a></li>\n<li>\n<a href='#!/guide/dev_tabindex-section-%22tab%22-key-based-navigation-demo'>\"Tab\" Key Based Navigation Demo</a></li>\n<li>\n<a href='#!/guide/dev_tabindex-section-related-features'>Related Features</a></li></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='dev_tabindex-section-page-navigation-using-the-%22tab%22-key'>Page Navigation Using the \"Tab\" Key</h1>\n\n<p>To ease page navigation by using keyboard and further boost accessibility, CKEditor can be reached by using the <kbd>Tab</kbd> and <kbd>Shift+Tab</kbd> shortcuts that are commonly used for navigating between page elements.</p>\n\n<p>This is a default behavior that works for both classic and inline editors. For <a href=\"#!/guide/dev_framed\">classic</a>, <code>iframe</code>-based editors, you will simply enter the editing area. For <a href=\"#!/guide/dev_inline\">inline</a> editors, the toolbar will appear for each editable element that you navigate to and editing it will become enabled.</p>\n\n<h2 id='dev_tabindex-section-influencing-tab-index'>Influencing Tab Index</h2>\n\n<p>You can customize the place that CKEditor will take in the <kbd>Tab</kbd> order of a web page that it is embedded in. Use the CKEDITOR.config.tabIndex option to assign a custom <code>tabindex</code> value to a CKEditor instance. For example:</p>\n\n<pre><code>config.tabIndex = 3;\n</code></pre>\n\n<p>This will cause CKEditor to become the third page element that you will enter when using the <kbd>Tab</kbd> key, no matter what its position could be in the page source.</p>\n\n<p class=\"tip\">\n    Please note that this configuration setting is an equivalent of adding the standard <code>tabindex</code> attribute to the element that is being replaced with CKEditor.\n</p>\n\n\n<h2 id='dev_tabindex-section-%22tab%22-key-based-navigation-demo'>\"Tab\" Key Based Navigation Demo</h2>\n\n<p>See the <a href=\"../samples/tabindex.html\">working \"Page Navigation Using the \"Tab\" Key\" sample</a> where you can try this page navigation method in practice.</p>\n\n<h2 id='dev_tabindex-section-related-features'>Related Features</h2>\n\n<p>Refer to the following resources for more information about accessibility in CKEditor:</p>\n\n<ul>\n<li>The <a href=\"#!/guide/dev_a11y\">Accessibility Support in CKEditor</a> article explains CKEditor compliance with some well-known accessibility standards and gives an overview of available accessibility-related features.</li>\n<li>The <a href=\"#!/guide/dev_shortcuts\">Keyboard Shortcuts</a> article lists all keyboard shortcuts supported in CKEditor.</li>\n</ul>\n\n","title":"Tab Key Navigation","meta_description":"Page navigation using the Tab key.","meta_keywords":"ckeditor, editor, wysiwyg, tab, key, keyboard, accessibility, shortcut, keystroke, tabindex, order, focus, accessibility, a11y"});