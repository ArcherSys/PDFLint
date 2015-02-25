Ext.data.JsonP.dev_tests({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/dev_tests-section-setting-up-bender.js'>Setting up Bender.js</a><ol>\n<li>\n<a href='#!/guide/dev_tests-section-updating-bender.js'>Updating Bender.js</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_tests-section-setting-up-ckeditor-tests'>Setting up CKEditor Tests</a></li>\n<li>\n<a href='#!/guide/dev_tests-section-running-ckeditor-tests'>Running CKEditor Tests</a></li>\n<li>\n<a href='#!/guide/dev_tests-section-ckeditor-tests-structure'>CKEditor Tests Structure</a></li>\n<li>\n<a href='#!/guide/dev_tests-section-creating-your-own-test'>Creating Your Own Test</a><ol>\n<li>\n<a href='#!/guide/dev_tests-section-test-requirements'>Test Requirements</a></li>\n<li>\n<a href='#!/guide/dev_tests-section-test-tools'>Test Tools</a></li>\n<li>\n<a href='#!/guide/dev_tests-section-sample-test-file'>Sample Test File</a></li></ol></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='dev_tests-section-ckeditor-testing-environment-%28bender.js%29'>CKEditor Testing Environment (Bender.js)</h1>\n\n<p>An advanced project like CKEditor could not exist without a set of automated tests. CKEditor uses <a href=\"https://github.com/benderjs/benderjs\">Bender.js</a>, our in-house JavaScript Test Framework, to cover code with tests. Not every feature can be tested automatically, but for those that can, we always implement tests. We encourage you to do the same when you make a pull request on <a href=\"https://github.com/ckeditor/ckeditor-dev\">GitHub</a> or fork the CKEditor repository in order to customize some editor behavior.</p>\n\n<h2 id='dev_tests-section-setting-up-bender.js'>Setting up Bender.js</h2>\n\n<p>To run CKEditor tests you will need <a href=\"https://github.com/benderjs/benderjs\">Bender.js</a>. Before you start installing Bender.js make sure that:</p>\n\n<ul>\n<li>you installed <a href=\"http://git-scm.com/\">Git</a>,</li>\n<li>you installed the latest version of <a href=\"http://nodejs.org/\">Node.js</a>,</li>\n<li>you have administrative rights &mdash; needed to install Bender.js globally.</li>\n</ul>\n\n\n<p>In order to install Bender.js globally, open the console and use <code>npm install</code>:</p>\n\n<pre><code>&gt; npm install -g git://github.com/benderjs/benderjs.git\n</code></pre>\n\n<p><strong>Note:</strong> You may need administrative rights to do this (e.g. <code>sudo</code>).</p>\n\n<p>Now you can check whether Bender.js has installed properly. If you run Bender.js in the console:</p>\n\n<pre><code>&gt; bender\n</code></pre>\n\n<p>you should see the following message:</p>\n\n<pre><code>command argument is required\n</code></pre>\n\n<h3 id='dev_tests-section-updating-bender.js'>Updating Bender.js</h3>\n\n<p>At the moment, Bender.js is not available as an <code>npm</code> package. If you want to update it, you need to uninstall the existing version and install again:</p>\n\n<pre><code>&gt; npm uninstall -g benderjs\n&gt; npm install -g git://github.com/benderjs/benderjs.git\n</code></pre>\n\n<h2 id='dev_tests-section-setting-up-ckeditor-tests'>Setting up CKEditor Tests</h2>\n\n<p>When Bender.js is installed you need to set up the CKEditor tests project.</p>\n\n<p>First of all, you need to <a href=\"#!/guide/dev_source\">clone the CKEditor development</a> repository hosted at <a href=\"https://github.com/ckeditor/ckeditor-dev\">GitHub</a>:</p>\n\n<pre><code>&gt; git clone https://github.com/ckeditor/ckeditor-dev.git\n</code></pre>\n\n<p>Go to the main CKEditor directory (it should contain the <code>bender.js</code>, <code>package.json</code> files, among others, and the <code>tests/</code> directory):</p>\n\n<pre><code>&gt; cd ckeditor-dev\n</code></pre>\n\n<p>You will now need to install required modules, like the <a href=\"https://github.com/benderjs/benderjs-ckeditor\">CKEditor plugin for Bender.js</a>. To install all required modules use:</p>\n\n<pre><code>&gt; npm install\n</code></pre>\n\n<p>Then you need to initialize the Bender project:</p>\n\n<pre><code>&gt; bender init\n</code></pre>\n\n<p>This command will create the <code>.bender/</code> directory which contains Bender.js's cache, databases, and a local configuration file.</p>\n\n<p>You do not need to perform any additional configuration steps as <code>bender.js</code> is a configuration file. It contains information about which tests should be run and where they are located.</p>\n\n<h2 id='dev_tests-section-running-ckeditor-tests'>Running CKEditor Tests</h2>\n\n<p>In order to run the tests, open the console and type:</p>\n\n<pre><code>&gt; bender server run\n</code></pre>\n\n<p>This will start the server in the verbose mode.</p>\n\n<p>Now open a web browser. Bender.js dashboard is available under:</p>\n\n<pre><code>http://localhost:1030\n</code></pre>\n\n<p><strong>Note:</strong> You can also run the server as a daemon:</p>\n\n<pre><code>&gt; bender server start\n</code></pre>\n\n<p>At the moment, starting a daemon is supported <strong>on Unix systems only</strong>.</p>\n\n<p>If you want, you can specify a port or a hostname where Bender.js runs:</p>\n\n<pre><code>-p, --port      The port on which the server will run (default: 1030).\n-H, --hostname  The hostname used to run the server (default: 0.0.0.0).\n</code></pre>\n\n<p class=\"tip\">\n    Some tests require the browser to be in focus. This means that you can not use other applications when running them.\n</p>\n\n\n<p>Please note that at the moment some random tests may fail in Internet Explorer. This is a known issue; however, if you run them again (when opened directly), they should pass. If a test fails a few times in a row, it is a sign that something went wrong. <a href=\"#!/guide/dev_issues_readme\">Report a CKEditor issue</a> on our <a href=\"http://dev.ckeditor.com\">Development site</a> in such case. Remember to include a link to the failing test and information about the browser in which it fails.</p>\n\n<h2 id='dev_tests-section-ckeditor-tests-structure'>CKEditor Tests Structure</h2>\n\n<p>In the Bender.js dashboard you can run all (or part) of the tests located in the CKEditor <code>tests/</code> directory. These tests are organized into subdirectories based on what they are testing:</p>\n\n<pre><code>tests/\n    adapters/\n        (design tests for editor adapters, located in the adapters/ folder)\n        jquery/\n    core/\n        (design tests for editor core features, located in the core/ folder)\n        dom/\n        htmlparser/\n        ...\n    plugins/\n        (design tests for editor plugins, located in the plugins/ folder)\n        about/\n        button/\n        ...\n    tickets/\n        (functional tests for specific tickets (http://dev.ckeditor.com/report) which are not\n            related to any specific features or are related to multiple features and plugins)\n        10146/\n        10212/\n        ...\n</code></pre>\n\n<p class=\"tip\">\n    As long as a test is related to a particular feature or a plugin, it should be put into the <code>adapters/</code>, <code>core/</code>, or <code>plugins/</code> directory. Ticket tests are most difficult to manage so the <code>tickets/</code> directory should only contain the tests that do not match any of these primary locations.\n</p>\n\n\n<p>Apart from the directories mentioned above, the main <code>tests/</code> directory or any subdirectory may contain three special folders:</p>\n\n<ul>\n<li><code>_assets/</code> &ndash; contains all assets used by the tests and the files that the tests need, like images, external libraries (like MathJax, jQuery.form), dialogs, mocks.</li>\n<li><code>_helpers/</code> &ndash; contains all functions used to test, tools for testing, test generators.</li>\n<li><code>_docs/</code> &ndash; contains notes about how tests work. It is rarely used as more often test documentation is located in the same file and inserted as a code comment.</li>\n</ul>\n\n\n<p>Every file which is not placed in any of these special directories is considered a test file.</p>\n\n<h2 id='dev_tests-section-creating-your-own-test'>Creating Your Own Test</h2>\n\n<p>To create a new CKEditor test, you need to put a JavaScript file into any of the CKEditor <code>tests/</code> subdirectories (<code>adapters/</code>, <code>core/</code>, <code>plugins/</code> or <code>tickets/</code>). Such file will be automatically added to the list of tests.</p>\n\n<p>To improve tests filtering, a test file may start with a list of tags, marked by using the <code>bender-tags</code> meta comment. Additionally, every folder in the test's path is automatically added as a filter, so for example if you created a test for the jQuery adapter and placed it in the <code>tests/adapters/jquery</code> directory, you do not need to add <code>adapters</code> and <code>jquery</code> to the tags list.</p>\n\n<h3 id='dev_tests-section-test-requirements'>Test Requirements</h3>\n\n<p>In every test you can specify the list of plugins which will be loaded in this test by using <code>bender-ckeditor-plugins</code> meta comment. Remember that loading redundant plugins will increase the time consumed by the test.</p>\n\n<p>Please note that some CKEditor plugins are needed for reasons that might not be immediately obvious, for example:</p>\n\n<ul>\n<li><a href=\"http://ckeditor.com/addon/wysiwygarea\">IFrame Editing Area</a> (<code>wysiwygarea</code>) &ndash; skipping this plugin will prevent the editor from firing the <a href=\"#!/api/CKEDITOR.editor-event-instanceReady\">instanceReady</a> event and many others. However, this plugin is loaded automatically when using the Editor Bot.</li>\n<li><a href=\"http://ckeditor.com/addon/toolbar\">Editor Toolbar</a> (<code>toolbar</code>) &ndash; needed for enabling features that rely on the <a href=\"#!/guide/plugin_sdk_integration_with_acf\">Advanced Content Filter</a>.</li>\n<li><a href=\"http://ckeditor.com/addon/undo\">Undo</a> (<code>undo</code>) &ndash; needed to fire the <a href=\"#!/api/CKEDITOR.editor-event-change\">change</a> event.</li>\n<li><a href=\"http://ckeditor.com/addon/basicstyles\">Basic Styles</a> (<code>basicstyles</code>) &ndash; needed to preserve basic text formatting in your test HTML, otherwise <a href=\"#!/guide/dev_advanced_content_filter\">Advanced Content Filter</a> will remove all <code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code>, <code>&lt;u&gt;</code> tags and so on.</li>\n</ul>\n\n\n<p>If the editor behaves differently when testing and during development, try to add all plugins you use during the development (you can find such list in the <a href=\"https://github.com/ckeditor/ckeditor-dev/blob/master/config.js\"><code>config.js</code></a> file) and then remove redundant ones. Please note that adding all existing CKEditor plugins might not be a good solution since, for example, the <a href=\"http://ckeditor.com/addon/bbcode\">BBCode plugin</a> will strip HTML in your output.</p>\n\n<h3 id='dev_tests-section-test-tools'>Test Tools</h3>\n\n<p>CKEditor tests use the <a href=\"http://yuilibrary.com/\">YUI library</a> for assertions provided by the <a href=\"https://github.com/benderjs/benderjs-yui/\">Bender.js YUI plugin</a>.</p>\n\n<p>The testing environment provides a bunch of <a href=\"https://github.com/benderjs/benderjs-ckeditor/blob/master/static/tools.js\">tools</a> useful when creating tests and the <a href=\"https://github.com/benderjs/benderjs-ckeditor/blob/master/static/bot.js\">Editor Bot</a> which helps you create and manage an editor instance.</p>\n\n<h3 id='dev_tests-section-sample-test-file'>Sample Test File</h3>\n\n<p>A sample CKEditor test file might look like this:</p>\n\n<pre><code>/* bender-tags: editor,unit */\n/* bender-ckeditor-plugins: toolbar,basicstyles */\n\n'use strict';\n\nbender.test( {\n    'test initial selection after setData': function() {\n        bender.editorBot.create( {\n            startupData: '&lt;p&gt;Lorem &lt;b&gt;[ipsum]&lt;/b&gt;&lt;/p&gt;'\n        }, function( bot ) {\n            // Many selection-related tests may require focusing the editor.\n            bot.editor.focus();\n\n            assert.areSame( '&lt;p&gt;^Lorem &lt;strong&gt;[ipsum]&lt;/strong&gt;&lt;/p&gt;',\n                bot.htmlWithSelection() );\n        } );\n    },\n\n    'test some other case': function() {\n        // ...\n    },\n\n    // ...\n} );\n</code></pre>\n\n<p>For every test you can create an HTML file with the same name (so for <code>yourtest.js</code> you can create <code>yourtest.html</code>). Such file will be automatically combined with your JavaScript code by <a href=\"https://github.com/benderjs/dom-combiner\">DOM combiner</a> to create an output test file. If the HTML file does not exist, the output test file will have an empty <code>&lt;body&gt;</code> section.</p>\n\n<p>In the HTML file you can put the content of the <code>&lt;body&gt;</code> section, so it could look like this:</p>\n\n<pre><code>&lt;textarea id=\"editor\"&gt;Lorem ipsum&lt;/textarea&gt;\n</code></pre>\n\n<p>If you need, you can add the entire content of the <code>&lt;html&gt;</code> page element, for example to set some attributes or add a <code>&lt;head&gt;</code> section:</p>\n\n<pre><code>&lt;head&gt;\n    &lt;script src=\"_helpers/tools.js\"&gt;&lt;/script&gt;\n&lt;/head&gt;\n&lt;body&gt;\n    &lt;textarea id=\"editor\"&gt;Lorem ipsum&lt;/textarea&gt;\n&lt;/body&gt;\n</code></pre>\n\n<p>To learn more about writing tests, check the <a href=\"https://github.com/ckeditor/ckeditor-dev/tree/master/tests\">exiting tests code</a>.</p>\n","title":"Testing Environment","meta_description":"How to install and configure CKEditor tests environment, how tests are arranged and how to create your own test.","meta_keywords":"ckeditor, editor, testing, test, tests, TDD, bender, benderjs, contributing, contribute, contribution, pull request"});