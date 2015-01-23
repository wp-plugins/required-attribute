=== Plugin Name ===

Contributors: neilgee
Donate link: http://coolestguidesontheplanet.com/
Tags: required, forms, input, validate
Requires at least: 3.8
Tested up to: 4.1.0
Stable tag: 4.3
Plugin Name: Required Attribute
Plugin URI: http://coolestguidesontheplanet.com/
Description: HTML5 polyfill for 'required' attribute in forms
Author: Neil Gee
Version: 1.0.0
Author URI:http://coolestguidesontheplanet.com
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt

This plugin adds support for the required attribute in inputs in forms.


== Description ==

This plugin adds support for the required attribute in browsers that don't support this HTML5 feature including < IE10, iOS, Android.

The plugin just activates the h5validate jQuery script by Eric Elliott https://github.com/ericelliott/h5Validate

There is no further configuration required.

For HTML input elements that use the 'required' attribute, this attribute will trigger a focus on the input element if not filled in by the user.

Pattern matching and error mark up can be found here - http://ericleads.com/h5validate/

For email input pattern validation add a "h5-email" class to the input element.

The script is minified and set to load in the footer.



== Installation ==

This section describes how to install the plugin:

1. Upload the `required` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Usage ==

Just activate the plugin which loads the script, their is no further configuration.

== Changelog ==

= 1.0.0 * Initial release.
