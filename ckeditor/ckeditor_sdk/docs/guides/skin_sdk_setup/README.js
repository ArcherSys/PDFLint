Ext.data.JsonP.skin_sdk_setup({"guide":"<!--\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='skin_sdk_setup-section-setting-it-up-to-start-a-custom-skin'>Setting It Up to Start a Custom Skin</h1>\n\n<p>The starting point of developing a skin is choosing an existing skin to base\nyour work on. Starting a skin from scratch is possible, but it is a lot of work.\nActually, it is up to the skin developer to decide the road to take, but\ngenerally existing skins are good enough. We recommend the default\n<a href=\"#!/guide/skin_sdk_intro-section-2\">Moono skin</a> as the basis, because it is\nactively maintained and includes all possible features a skin can have.</p>\n\n<p>You must have access to the \"source files\" of the selected skin. Distribution\nfiles are usually optimized for final use and are unreadable. Copy the source\nfiles in a folder inside the <code>skins</code> folder of a CKEditor\ninstallation. Give the folder name the name of your new skin (lower-cased, no\nspaces).</p>\n\n<p>Now set the skin name in the CKEditor configuration file\n(<code>config.js</code>). For example:</p>\n\n<pre><code>config.skin=’myskin’;\n</code></pre>\n\n<p>You're done, CKEditor will now start using your new skin files.</p>\n","title":"Setup","meta_description":"The workflow of creating a custom skin.","meta_keywords":"ckeditor, editor, wysiwyg, skin, skins, tutorial, sample, sdk, example, development, process, workflow, steps"});