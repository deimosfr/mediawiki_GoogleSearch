<?php
if (!defined('MEDIAWIKI')) die();
/**
 * Class file for the GoogleSearch extension
 *
 * @addtogroup Extensions
 * @author Pierre Mavro
 * @license GPLv2
 */
class GoogleSearch {
        static function GoogleSearchInSidebar( $skin, &$bar ) {
                global $wgGoogleSearchOriginal,$wgGoogleSearchLanguages;
 
                wfLoadExtensionMessages( 'Google Search' );

                $bar['googleSearch'] = "<form action=\"http://www.google.fr/cse\" id=\"cse-search-box\">
  <div>
    <input type=\"hidden\" name=\"cx\" value=\"partner-pub-8001790276473966:7664586454\" />
    <input type=\"hidden\" name=\"ie\" value=\"UTF-8\" />
    <input type=\"text\" name=\"q\" size=\"15\" />
    <input type=\"submit\" name=\"sa\" value=\"" .wfMsg('Search'). "\" />
  </div>
</form>";
                return $bar;
 
                return true;
        }
}
