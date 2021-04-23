=== Fraktjakt WooCommerce Shipping ===
Plugin URI: https://www.fraktjakt.se
Author: Fraktjakt
Tested up to: 5.5.1
Stable tag: 2.2.8
Requires at least: 3.0.1
WC requires at least: 3.2
WC tested up to: 4.0.1
Donate link: https://www.fraktjakt.se
Tags: fraktkoppling,WooCommerce,shipping,Posten,DHL,Schenker,PostNord,FedEx,UPS,DSV,Bring,Paket,Frakt,Fraktintegrering
Contributors: Fraktjakt
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Fraktjakt shipping method plugin for WooCommerce. Integrates DHL, DSV, FedEx, PostNord, Schenker, Bussgods, UPS, Fraktkompaniet and more through Fraktjakt.

== Description ==

Complete shipping integration for WooCommerce with online purchase, printing of shipping labels, booking of pickup and shipment tracking for all major shipping companies in Sweden free of charge!

Posten/PostNord, Bussgods, Schenker, DHL, DSV, UPS, FedEx Express, Fraktkompaniet and more!


= MERCHANT BENEFITS =

[Fraktjakt](https://fraktjakt.se "https://fraktjakt.se") gives your customers access to the best parcel shipping services provided in Sweden in one complete and easy to manage solution!

Whether the customer simply wants low shipping rates, speedy delivery, convenient home delivery or to find the closest drop-off location, Fraktjakt quickly presents all the information and lets the customer decide.

Quick and easy with cheaper shipments for everyone, through Fraktjakt's discounted shipments as well as personal shipping contracts. No wonder it increases your sales! 


= CUSTOMER BENEFITS =

Let your customers decide and pick their preferred shipping service and shipper.

Whether the customer simply wants low shipping rates, speedy delivery, convenient home delivery or to find the closest drop-off location, Fraktjakt quickly presents all the information and lets the customer decide. 


= FEATURES = 

* Integrates multiple shipping services
* PostNord (Posten), Bussgods, DHL Freight, UPS, FedEx Express, DSV, Schenker, Fraktkompaniet
* Two modes of operation: (1) Customer controlled shipping or (2) Merchant controlled shipping
* Pick which shipping services to present for your customers (only for Customer controlled shipping)
* Use Fraktjakts discounted shipping rates, or use your own shipping contracts
* Consolidate all your shipment purchases from different shipping companies on a single invoice
* Purchase shipments online
* Pickup bookings
* EDI sent electronically to shippers
* Printing of shipping labels
* Printing of Commercial/Proforma invoices (exports/imports)
* Fully customizable package tracking
* Fully customizable shipping notifications
* Automating packing algoritms
* This integration is completely free of charge!


= REQUIRES =

Fraktjakt for WooCommerce requires the WooCommerce plugin as well as an account on Fraktjakt. You will need to enter your Fraktjakt consignor ID and key in this shipping module to activate it. The account is free of charge and is used to administrate your shipments.

Register your [free account on Fraktjakt](https://fraktjakt.se/shipper/register_company "https://fraktjakt.se/shipper/register_company").

Requires at least PHP v4.0.6 for proper UTF8 encoding. If you're running earlier PHP versions and not using ISO 8859-1, then you might have to install the 'mbstring' extension on your server. 

PLEASE NOTE that Fraktjakt currently only supports Swedish webshops!



= USER MANUAL =

[Download our User Manual for this WooCommerce plugin](https://www.fraktjakt.se/downloads/Fraktjakt_WooCommerce_Manual.pdf "Download the plugin manual in PDF") in PDF 

[Download our User Manual for integrations](https://www.fraktjakt.se/downloads/fraktjakt_manual_integrering.pdf "Download the integrations manual in PDF") in PDF 


== Installation ==

1. Select 'Add new' in the 'Plugins' menu to find and install the current Fraktjakt plugin for WooCommerce.
2. Activate the plugin.
3. Setup the module under 'WooCommerce' / 'Setting' / 'Shipping' / 'Fraktjakt'


= Manual Installation =

1. Upload the folder `fraktjakt-shipping-for-woocommerce` manually to the `/wp-content/plugins/` directory through FTP.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Setup the module under 'WooCommerce' / 'Setting' / 'Shipping' / 'Fraktjakt'


== Screenshots ==

1. Example of customer interface to select shipping alternatives.
2. WooCommerce admin interface for the Fraktjakt module settings
3. Fraktjakt shipping method in WooCommerce
4. Find closest agent
5. Fixed price or free shipping settings in Fraktjakt.
6. Posten national waybill.
7. Order list.
8. Customization and layout settings in Fraktjakt.
9. Custom layout on shipping notifications.


== Changelog ==

= 2.2.8 - Added support for order notes and a new debug mode (2020-09-03) =
* Select which reference to use in Fraktjakt. Either order number or the customer order comments.
* Created a new setting for "Debug mode" and lifted out the admin error notice about products missing weight, to avoid unecessary overhead when not actively searching for products causing problems.
* Added search for products missing length, width and height in the new debug mode, to help find products causing problems while calculating shipping.

= 2.2.7 - Supports customized order ID and improvements for customs declarations (2020-08-18) =
* Redesign of settings page. Adding new headlines, titles, descriptions, sorting and group settings.
* Added support for customized order ID. Will now submit custom order ID if the webshop aren't using the default order ID.
* Fallback to the basic UTF8 method for servers that hasn't loaded the mb_string extensions.
* Changed the registered price to use the actual sales price instead of the regular price.
* Optimized customs declaration to use the different terms like categories, tags and custom taxonomies instead of the product's webshop description.
* Bugfix to not create shipments for an order with only virtual products when using Merchant controlled shipping.
* Better exception handling.

= 2.2.6 - Better character encoding (2020-06-15) =
* Enhanced support for foreign characters and complete UTF8 encoding according to Fraktjakt API requirements.

= 2.2.5 - Minor bugfix (2020-06-04) =
* Removed the fallback option from activating when there was only one shipping service option in Customer controlled shipping.

= 2.2.4 - Enhanced email error reports (2020-05-26) =
* Corrected and major improvements to the error reports by email to help find and correct problems with your integration.
* Bugfix to lost queries

= 2.2.3 - New settings for auto processing and currency conversion (2020-05-13) =
* New setting for what order statuses to auto process or to completely manually select orders to process.
* New setting to use Fraktjakt's built-in currency conversion or always return prices in SEK.
* Corrected conflicting shipment_id variables.
* Added support for Fraktjakt API 3.8.0

= 2.2.2 - Access link fix and truncate of long descriptions (2020-04-30) =
* Bugfix to the access links for managing shipments in Fraktjakt (thanks to Urban).
* Now truncates long item descriptions to max 128 characters, to avoid the XML call being cut off and to conform to Fraktjakt API maximum characters for that tag.
* Tweaked logged in user meta to only apply if form data were missing

= 2.2.1 - Language and login condition fix (2020-04-29) =
* Fix for language support in preparation of an update in Fraktjakt's API.
* Smashed an old bug from 2015 that had inverted login condition (thanks Urban) that will now grab the correct user data.
* Minor text and translation tweaks.

= 2.2.0 - Added currency and language support (2020-04-20) =
* Added support for language settings. Customer controlled shipping options will now be displayed in either swedish or english depending on language chosen.
* Added support for currency settings. The shipping costs will now be displayed in and automatically converted to the chosen currency.
* Fixed old bug that stopped shipping service titles to show when prices where displayed without tax/vat.
* Layout fix for displaying prices.
* Fixed keycodes in URL:s to auto login user
* Minor bug smashing

= 2.1.2 - New API access links (2019-12-03) =
* Added better support for VAT and displaying shipping costs.

= 2.1.1 - New API access links (2019-10-11) =
* Added support for the new API access links, to always get the correct format for the URL to handle the shipments in Fraktjakt.
* Corrected a missing translation
* Added a missing tag for target to the shipment handling

= 2.1.0 - Improved testing mode, layout and bugfixes (2019-10-09) =
* New improved testing mode, that shows errors and warnings below the fallback alternative.
* Admin error emails will now also include the full status, warnings and error messages from Fraktjakt, so that you can easier find the cause of your problems.
* Fixed array to string conversions that were causing warnings
* Added error handling when strings and arrays were missing
* Fixed support for queued jQuery loader
* Corrected AJAX Javascripts for external button links
* Added translation support for emails, error messages, 'Manage shipment' buttons and hover titles
* New icon for Custom Controlled Shipping
* New info text in the order view when order connection is missing

= 2.0.0 - Major update (2019-10-02) =
* Added support for the "support" setting
* Fixed faulty string conversion that caused a warning message
* Fixed variables causing warning messages from direct access
* Layout of shipping calculation even with WooCommerce new more strict labels that strips HTML
* Corrected CSS styles.

= 1.9.1 - Usability update (2019-06-26) =
* Shortened the default reference prefix to just 'Order', to prevent reference text from being cut off for being too long.
* Minor bugfix
* Fixed a warning for an undefined constant, that shouldn't cause any problems right now but will be in future releases of PHP.

= 1.9.0 - Bugfix (2019-06-18) =
* Converted <parcels> into <commodities> to adhere to the new functions of Fraktjakt API. Users should no longer need to activate 'compatibility mode' in their Fraktjakt packing settings.
* Fixed readme and Wordpress tags

= 1.8.0 - Bugfix (2019-06-13) =
* Changed cart_total to a new method with requirement of WooCommerce version >= 3.4 that solves problems with incorrect shipment value from cart total.
* Updated API1 and API2 URLs to the new API and TESTAPI server addresses.
* Updated several info texts to better represent current Fraktjakt information.
* Updated screenshots.

= 1.7.1 - Buggfix (2018-07-25) =
* Added separation between the shipping method label, estimated deliverytime and closest delivery info.
* Short product description will be used if the regular description is empty.

= 1.7.0 - Bugfix (2018-07-23) =
* Fixed compatability issues with woocommerce version >= 3.4, fixed customer controlled and failsafe shipping.
* Solved variable product weight issue.
* Solved unit_price bugg in customer controlled shipping.
* Custom CSS buttons are working again. (May require deleting your web browser cache in order to take effect).

= 1.6.91 - Bugfix (2018-06-07) =
* Removes unwanted code in description-field "[]".

= 1.6.9 - Bugfix (2018-04-12) =
* Fixed link to batch_orders page (truck icon).

= 1.6.8 - New funcionality (2017-10-16) =
* Now any units can be used for the products in woocommerce.

= 1.6.7 - Bugfix (2017-09-06) =
* Now the administrator is directed to Experten in fraktjakt properly when using a custom shipping method set in woocommerce shipping settings.

= 1.6.6 - Bugfix (2017-06-12) =
* Fixed bug where the wordpress-admin got sent to the 'all orders' page when clicking on a order-connection while under the filter 'processing'.

= 1.6.5 - Compatibility issues (2017-05-08) =
* Product properties are now accessed correctly.

= 1.6.4 - Bugfix (2017-04-21) =
* Now products marked as virtual in woocommerce in butikstyrd/merchant controlled shipping mode are ignored.
* Compatibility issues (2017-04-21)
* Now it should work with the testserver after we changed to ssl in fraktjakt.

= 1.6.3 - Compatibility issues (2017-03-07) =
* For Woocommerce versions above 2.6 the module now uses the correct Woocommerce html formatting class name "woocommerce-Price-amount amount". Now the shipping alternatives for customer controlled shipping should be displayed in checkout and cart.

= 1.6.2 - Unicode fix (2017-01-27) =
* The Merchant Controlled action buttons should now display more correctly formatted symbols with unicode.

= 1.6.1 - Compatibility issues (2017-01-25) =
* The module now has better overall compatibility. Fixes issues that some users has experienced in their installations.

= 1.6.0 - Compatibility (2016-07-21) =
* The module now supports the new shipping method in WooCommerce 2.6.
* Buggfixes (2016-07-21)
* Fix for the unicode of handle shipment 

= 1.5.3 - Bugfixes (2016-06-10) =
* Set correct commodity unit_price when creating a shipment using the Fraktjakt Shipment API.

= 1.5.2 - Bugfixes (2016-04-19) =
* Trim() for input value in Estimated shipping costs, to avoid bugs in some themes.
* Lazyfix to avoid calculating shipping costs multiple times in some rare occasions.

= 1.5.1 - Bugfixes (2016-01-12) =
* Fix to CSS classes to display the correct icon in the order list.

= 1.5.0 - New functionality (2016-01-11) =
* Specify the Order Reference text used to prefix the woocommerce order id.
* Integrator code (only for approved integrators).
* Buggfixes (2015-11-30)
* Added strip_tags to all commodities description fields to avoid sending html tags within an xml tag.

= 1.4.1 - Bugfixes (2015-11-19) =
* Failsafe button "Create order connection to Fraktjakt" for orders without a saved connection works properly now.
* admin_notices edit_post_link $product_errors bug is fixed.
* Check that the shipment array is there before trying to use it, when nothing is returned from the Fraktjakt Query API.

= 1.4.0 New functionality, bugfixes, design and usability (2015-11-11)  =
* Better hooks to order connection for paid orders even for third party payment plugins, using hooks to both the action "Processing" and "Completed".
* New automatic order connection for paid orders even using "Merchant controlled shipping".
* New failsafe button "Create order connection to Fraktjakt" for orders without a saved connection.
* Added JS file for scripting buttons with external URL calls
* Removed product warning messages for "Merchant controlled shipping", since those warnings don't apply.
* Clarified control settings with a new "Control Mode" to "Customer controlled shipping" and "Merchant controlled shipping"
* New helptext for "Control Mode" and "Shipping alternatives".
* Deactivating the method through the top checkbox setting will now disable the plugin properly

= 1.3.4 - Bugfixes (2015-10-29) =
* Added CSS file for styling of the Manage shipping button in Order List

= 1.3.3 - New functionality (2015-10-26) =
* New Fraktjakt shipping button on Order List page
* New Fraktjakt shipping button on Order Details page

= 1.3.2 - New functionality (2015-10-15) =
* Send order data to Fraktjakt Shipment API. Used for Merchant controlled shipping feature.
* Switch between Customer controlled shipping and Merchant controlled shipping in plug-in settings.

= 1.3.1 - New functionality (2015-09-17) =
* Determine which Fraktjakt Order API method to call (type 1 or type 2). 
* This allows the plugin to work for webshops configured with the standard WooCommerce checkout as well as other checkouts, like Klarna checkout.

= 1.3.0 - Bugfixes (2015-09-15) =
* removed utf8_encode() from the xml sent to Fraktjakt API (it was causing disfiguration of the Swedish characters)

= 1.2.9 - New functionality (2015-09-14) =
* Support added for Fraktjakt Order API type 2

= 1.2.8 - Bugfixes (2015-09-10) =
* Module no longer creates an order in Fraktjakt when a non-Fraktjakt method has been selected.

= 1.2.7 - Bugfixes (2015-09-09) =
* Fallback functions correctly when Fraktjakt is unreachable or if the response contains no shipping alternatives. 
* Shipping alternatives display correctly, whether there is only one or if there are several to display.
* Use shipping_first_name and shipping_last_name, instead of billing_first_name and billing_last_name.
* Round off shipment value to two decimal places in the xml sent to query_xml in the calculate_shipping function.
* Send country_subdivision_code in the calculate_shipping function (needed by FedEx and UPS).
* Significantly shortened time of authentication when validating consignor id and key on admin settings page.

= 1.2.6 =
* Minor language update and text format bugfix.

= 1.2.5 =
* Added link to Fraktjakt configuration in the settings form.

= 1.2.4 =
* Cosmetic bugfixes. Removes redundant colon before prices and white spaces before comma. Also corrects some text and titles in settings. 

= 1.2.3 =
* Changes in the presention of shipping prices
* Fixed Swedish translation

= 1.2.2 =
* Refactoring

= 1.2.1 =
* Important bugfix

= 1.2.0 =
* Bugfixes
* Better error notifications

= 1.1.0 =
* Several debugs, features and the addition of a debug notification

= 1.0.0 =
* Reworked installation to comply with Wordpress official plugin library

= 0.9 =
* First public version.


== Upgrade Notice ==
= 2.2.1 =
This module now supports your currency and language settings. You can now use other currencies than swedish krona with this plugin. Fraktjakt converts prices to the correct currency and translates shipping options in either swedish or english.

= 1.9.0 =
This module now supports Fraktjakt's new commodities and therefore it is no longer necessary to activate the 'compatibility mode' in the Packing settings in Fraktjakt.

= 1.6 =
This WooCommerce module is upgraded to support the new shipping_method of WooCommerce 2.6. It does however not support the new WooCommerce Shipping Zones yet, and instead prefers to handle that part itself in its current state.

= 1.2.1 =
This version will notify you about products that are missing vital attributes necessary for the service to work properly.
It also resolves some bugs that occurred when caching previous queries.

= 1.0.0 =
This version is more compliant to Wordpress standards.


== Frequently Asked Questions ==

= Why should I use Fraktjakt? =

* Save money with Fraktjakt
* Save time with Fraktjakt
* Manage all your shipments and different shipping companies with an easy to use overview
* Create and print shipping documents
* Reliable price quote for all your shipping products
* Consolidated Invoice for all shipping companies and services
* With or without your individual shipping contracts
* Compare your different contract prices
* Custom notifications
* Custom track and trace
* Automatic packing calculations
* Order import for webshops and business systems
* All the best shipping companies in the same system!
* No fixation!

= Is shipping less expensive on Fraktjakt? =

We offer affordable shipping, domestic and foreign, where you can utilize our prenegotiated shipping contracts with major bulk discounts already from start.

If you already have favorable shipping contracts, it is also possible to use your own [Individual shipping](https://www.fraktjakt.se/services/individual_contracts?locale=en) contracts with Fraktjakt's transportation management system. 

= Does it cost anything to use this integration? =

Nope, it is completely free of charge!

You are able to integrate your webshop with all major shipping companies, calculate combined package size, search shipping options, calculate shipping cost, purchase shipments, print shipping labels, send shipping notifications and track & trace shipments all free of charge with a free account on Fraktjakt.

The only thing you will ever have to pay for is the actual shipping cost. You are even getting discount on the shipping itself thanks to our prenegotiated shipping contracts with major bulk discounts. If you already have favorable shipping contracts, it is also possible to use your own Individual shipping contracts with Fraktjakt's transportation management system. 

[Start your Fraktjakt today!](https://fraktjakt.se/shipper/register_company "https://fraktjakt.se/shipper/register_company")

= Does it cost anything to use Fraktjakt? =

No!

You can search, compare shipping services and register a free user account at no cost. There is no mandatory fee for shipping other than the actual shipping cost itself. Thankfully at a great discount! (see above).

You can level up your free basic account to our premium membership Fraktjakt+ at any time, when you become acquainted with our system.

See a more detailed rundown of our [Prices](https://www.fraktjakt.se/om_fraktjakt/pricing?locale=en). 

= How can I contact Fraktjakt? =

For the fastest support, please address your questions to [Fraktjakt Support](https://www.fraktjakt.se/om_fraktjakt/kontakt "http://www.fraktjakt.se/om_fraktjakt/kontakt") either by email, telephone or livechat.
