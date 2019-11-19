=== Event Maker fixes for PHP7.1+ ===
Contributors: joostdekeijzer
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=j@dkzr.nl&item_name=dkzr-event-maker-fixes+WordPress+plugin&item_number=Joost+de+Keijzer&currency_code=EUR
Tags: events-maker, events, bugfix, bug, fix, php, compatibility
Requires at least: 5.0
Tested up to: 5.3
Stable tag: 1.0
Requires PHP: 7.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The plugin Events Maker ( https://wordpress.org/plugins/events-maker/ ) has PHP7.1+ compatibility issues. This plugin fixes those (that I found).

== Description ==

From PHP7.1 onward transforming an empty string to an array is not allowed any more. Events Maker uses this and that generates a fatal error.

This plugin fixes this.

== Installation ==

* Download the plugin
* Uncompress it with your preferred unzip program
* Copy the entire directory in your plugin directory of your WordPress blog (/wp-content/plugins)
* Activate the plugin

== Frequently Asked Questions ==

== Changelog ==

= 1.0 =

* When an meta_query is empty (empty string by default), return an empty array for Events Maker to work with.
