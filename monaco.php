<?php
/**
 * Monaco skin
 *
 * @package MediaWiki
 * @subpackage Skins
 *
 * @author Inez Korczynski <inez@wikia.com>
 * @author Christian Williams
 * @author Daniel Friesen
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array (
	'path' => __FILE__,
	'name' => 'Monaco',
	'author' => array('[http://www.wikia.com/ Wikia]', 'Inez Korczynski', 'Christian Williams', '[http://mediawiki.org/wiki/User:Dantman Daniel Friesen]'),
	'descriptionmsg' => 'monaco-desc',
	'url' => "https://github.com/dantman/monaco-port",
);

$wgValidSkinNames['monaco'] = 'Monaco';
$wgAutoloadClasses['SkinMonaco'] = dirname(__FILE__).'/Monaco.skin.php';
$wgExtensionMessagesFiles['Monaco'] = dirname(__FILE__).'/Monaco.i18n.php';

/* Bad Configs - These are Wikia junk used inside Monaco.skin.php that should be slowly removed */
$wgSupressSiteNotice = false; // bad config
$wgSupressPageTitle = false; // bad config
$wgSearchDefaultFulltext = false; // bad config
$wgEnableRecipesTweaksExt = false; // wikia config var
$wgEnableShareFeatureExt = false; // wikia config var
$wgEnableCommunityMessagesExt = false; // wikia config var
$wgEnableAnswers = false; // no answers here
$wgSpecialPagesRequiredLogin = array(); // bad config, it should be possible to check if the user has special page access without doing something like this
$wgAllInOne = false; // wikia specific junk, 1.17 will have resource loader

$wgMastheadVisible = false; // we may want to integrate masthead into Monaco and make it a optional skin feature

/* Config Settings */
$wgMonacoTheme = "sapphire"; // load a pre-made Monaco theme from the styles folder
$wgMonacoDynamicCreateOverride = false; // Override "Special:CreatePage" urls with something else
