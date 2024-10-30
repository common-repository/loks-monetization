=== wix.cx Monetization ===
Contributors: wix_team
Tags: monetization, traffic
Requires at least: 3.5.1
Tested up to: 4.7.2
Stable tag: 1.1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Official wix.cx plugin. Monetize your website easily with short links and pop ads.

== Description ==

Monetize your WordPress site with wix.cx. The official plugin provides several tools to earn you money:

- Links monetization (displays an interstitial ad page when visitors click through links on your website)
- Exit and entry ads (displays an interstitial ad page when visitors exit and/or enter your website)
- Pop under ads (displays a pop under ad in a new window below current window when visitors click anywhere on your website)

== Installation ==

This section describes how to install the plugin and get it working.

In order to use this plugin you will need account on https://wix.cx.

= Using The WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'wix-monetization'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `wix-monetization.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `wix-monetization.zip`
2. Extract the `wix-monetization` directory to your computer
3. Upload the `wix-monetization` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

== Configuration ==

Setting up the plugin is super simple and it takes just a couple of minutes to start serving ads on your website:

1. Sign up for wix.cx https://wix.cx/user/register
2. Install the plugin on your WordPress website
3. Enter the e-mail you used to sign up for wix.cx in plugin configuration
4. Save configuration

...and that's it! The plugin is up and running, earning you money from each ad impression.

Fine-tune your plugin settings (you can turn each monetization module on/off and use advanced settings such as capping).

Track your earnings in real-time by logging into the wix.cx user panel.

== Frequently Asked Questions ==

= Why does the plugin display an information about e-mail address not being correct? =
The e-mail address provided in the plugin has to be the same address you used to sign up for wix.cx, as it connects the plugin with an account. The plugin won't work without a wix.cx account.

= How do I sign up for a wix.cx account? =
Simply create an account at https://wix.cx/user/register  wix.cx is completely free to use.

= Where can I check my statistics and earnings? =
You can track all of your ad stats in wix.cx user panel, straight after you log in.

= How do I check if the plugin works? I can't see ads after installation. =
There might be a case where you won't see ads after plugin installation - this could happen if you have already visited several wix.cx ads today (due to a mechanism called capping). The best way of checking if the plugin works is through visiting the wix.cx user panel. While on statistics page, click on "Website Scripts" tab to display detailed stats for your plugin. It's best to wait for a few hours before checking statistics, as your website needs to get some visitors and clicks.

== Changelog ==

= 1.1.4 =
* Tested against wordpress 4.7.2

= 1.1.3 =
* Tested against wordpress 4.6

= 1.1.2 =
* Tested against wordpress 4.5.2

= 1.1.0 =
* Pop Ads available

= 1.0.8 =
* Fixed issue with WP_ERROR during update of public api token

= 1.0.6 =
* Fixed issue with multiple domains on list

= 1.0.5 =
* Added Exit Page Script (Bounce rate monetization)
* Added Api call to fetch Public API Token by email address

= 1.0 =
* Main Functionality which allows to integrate with wix.cx
