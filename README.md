MediaWiki Google Search extension
=================================

Made by Pierre Mavro <pierre@mavro.fr>
Licenced under GPL v2

Minimum requirements
--------------------

* MediaWiki 1.16+ (not tested <1.16)

Installation instructions
-------------------------

* Download the latest version of DeleteHistory in your extensions directory (ex. /var/www/mediawiki/extensions):
```
git clone https://github.com/deimosfr/mediawiki_GoogleSearch.git /var/www/mediawiki/extensions/DeleteHistory
```

* Edit your LocalSettings.conf and add those lines :
```
# Google Search
require_once( "$IP/extensions/GoogleSearch/GoogleSearch.php" );
$wgGoogleSearchCSECode = "ENTER_YOUR_CSE_CODE_HERE";
```
* Create an account and get the code from Google Co-op (CSE) / Google Adsense to replace the $wgGoogleSearchCSECode value in your LocalSettings

* That's all, now you can refresh your wiki and see the Google Search in your sidebar

* Do not hesitate to contact me if you have some questions

Changelog
---------
* v0.4
 * Compatible with MediaWiki 1.21

* v0.3
 * Adding a var to avoid editing the code

* v0.2
 * Correcting Mediawiki link extension website

* v0.1.1
 * Search bar size fixed to 12px instead of 15px to avoid bad browser interpretation

* v0.1
 * First release

