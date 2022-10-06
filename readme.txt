=== Details: Show and Hide ===
Contributors:      lastsplash
Author:            Bob Matyas
Author URI:		   https://www.bobmatyas.com
Tags:              block
Requires at Least: 5.9
Tested up to:      6.0.2
Stable tag:        1.0
Requires PHP:      5.6
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Details block for showing and hiding content.

== Description ==

The block allows you to easily show and hide content using built-in browser functionality. It doesn't load any external JavaScript and relies on native HTML functionality. You can configure the appearance using built-in editor controls.

It uses the HTML `details` element to show and hide content.



== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wp-details-block` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Start adding content.

== Frequently Asked Questions ==

= How do I customize the styling? =

The wrapper `<details>` element has the class `.wp-block-bm-wp-details-container` that you can use to target it and adjust styling as needed.

The `<summary>` element has the class `.wp-block-bm-wp-details-block`. 

= Where can I learn more about browser support? =

Details is supported in most major browsers (Chrome, Firefox, and Safari). Caniuse.com has a breakdown of browser support for [the details element](https://caniuse.com/details). 


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png`
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* Initial release
