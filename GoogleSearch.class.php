<?php
/**
 * Class file for the GoogleSearch extension
 *
 * @addtogroup Extensions
 * @author Pierre Mavro
 * @license GPLv2
 */
if (!defined('MEDIAWIKI')) die();

# Define default value
$wgGoogleSearchCSECode ="";

class GoogleSearch {
        static function GoogleSearchInSidebar( $skin, &$bar ) {
                global $wgGoogleSearchOriginal,$wgGoogleSearchLanguages,$wgGoogleSearchCSECode, $wgVersion;

                if ($wgVersion <= 1.16) { 
                    wfLoadExtensionMessages( 'Google Search' );
                }
                $bar['googleSearch'] = "<form action=\"http://www.google.fr/cse\" id=\"cse-search-box\">
  <div>
    <input type=\"hidden\" name=\"cx\" value=\"" . $wgGoogleSearchCSECode . "\" />
    <input type=\"hidden\" name=\"ie\" value=\"UTF-8\" />
    <input type=\"text\" name=\"q\" size=\"12\" />
    <input type=\"submit\" name=\"sa\" value=\"" .wfMsg('Search'). "\" />
  </div>
</form>";
                return $bar;
 
                return true;
        }
}
