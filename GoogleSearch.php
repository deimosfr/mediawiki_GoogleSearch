<?php
/**
 * MediaWiki extension to add Google Search in a portlet in the sidebar.
 * Installation instructions can be found on
 * http://www.mediawiki.org/wiki/Extension:Google_Search
 *
 * This extension will not add the Google Search portlet to *any* skin
 * that is used with MediaWiki. Because of inconsistencies in the skin
 * implementation, it will not be add to the following skins:
 * cologneblue, standard, nostalgia
 *
 * @addtogroup Extensions
 * @author Pierre Mavro
 * @license GPLv2
 */
 
/**
 * Exit if called outside of MediaWiki
 */
if( !defined( 'MEDIAWIKI' ) ) {
        echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
        die( 1 );
}
 
/**
 * SETTINGS
 * --------
 * The description of the portlet can be changed in [[MediaWiki:GoogleSearch]].
 *
 * The following variables may need to be reset in your LocalSettings.php.
  */
$wgGoogleSearchOriginal  = $wgLanguageCode; // Original languages of the page that needs translation
$wgGoogleSearchLanguages  = 'fr,en';        // Languages included in the translating box
 
$wgExtensionCredits['other'][] = array(
        'name'           => 'Google Search',
        'version'        => '0.1.1',
        'author'         => 'Pierre Mavro',
        'description'    => 'Adds Google Search to the sidebar',
        'descriptionmsg' => 'googleSearch-desc',
        'url'            => 'http://www.mediawiki.org/wiki/Extension:Google_Search',
);
 
// Register class and localisations
$dir = dirname(__FILE__) . '/';
$wgAutoloadClasses['GoogleSearch'] = $dir . 'GoogleSearch.class.php';
$wgExtensionMessagesFiles['GoogleSearch'] = $dir . 'GoogleSearch.i18n.php';
 
// Hook to modify the sidebar
$wgHooks['SkinBuildSidebar'][] = 'GoogleSearch::GoogleSearchInSidebar';
