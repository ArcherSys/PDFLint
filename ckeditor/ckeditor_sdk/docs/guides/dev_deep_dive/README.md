<!--
Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md.
-->

# CKEditor Deep Dive

This section presents some more advanced CKEditor concepts. It is meant for all developers who have at least some experience working with the editor, want to understand its internal mechanisms, and create their own advanced customizations.

See these topics if you want to bring your CKEditor knowledge to a whole new level:

1. **Advanced Content Filter (ACF)** &ndash; Content filtering system that limits and adapts input data so it matches the editor configuration. It may also deactivate features which generate HTML code that is not allowed by the configuration.

	* [Introduction](#!/guide/dev_advanced_content_filter) &ndash; General information about the content filtering system implemented in CKEditor.
	* [Allowed Content Rules](#!/guide/dev_allowed_content_rules) &ndash; Explanation of syntax that defines which HTML elements, attributes, styles, and classes are allowed in CKEditor.
	* [Disallowed Content](#!/guide/dev_disallowed_content) &ndash; Explanation of how blacklisting works in ACF.
	
2. **[Enabling CKEditor in Unsupported Environments](#!/guide/dev_unsupported_environments)** &ndash; Experimental feature that lets you display CKEditor on devices and setups that are not [officially supported](#!/guide/dev_browsers), like mobile devices.


3. **[Widgets](#!/guide/dev_widgets)** &ndash; Innovative CKEditor feature that lets you create rich content entities grouping multiple HTML elements.