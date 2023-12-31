<?php
# This file was automatically generated by the MediaWiki 1.38.6
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See docs/Configuration.md for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Roar wiki";
$wgMetaNamespace = "Roar_wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgArticlePath = "/$1";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://roarstory.com";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/resources/assets/wiki.png",
	
	
	'icon' => "$wgResourceBasePath/resources/assets/wiki.png",
];

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@🌻.invalid";
$wgPasswordSender = "apache@🌻.invalid";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "bdprice_Souravwiki";
$wgDBuser = "bdprice_Swiki";
$wgDBpassword = "N]muxDOfG!jO";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

# Time zone
$wgLocaltimezone = "UTC";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "e2dedcbb568fd5e6b933a6a28fb3ea681bdb1e2f465205550f785d4540ff1353";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "cd22f7350783664b";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "Vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );
wfLoadSkin( 'OSMFoundation' );
wfLoadSkin( 'WikimediaApiPortal' );
# End of automatically generated settings.
# Add more configuration options below.
$wgDefaultUserOptions['usenewrc'] =0;
wfLoadExtension( 'DisableAccount' );
$wgGroupPermissions['bureaucrat']['disableaccount'] = true;
wfLoadExtension( 'CheckUser' );
wfLoadExtension( 'LinkCards' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'LocalisationUpdate' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
#wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'Scribunto' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TextExtracts' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'WikiEditor' );
//wfLoadExtension( 'cargo' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'AbuseFilter' );
$wgTmpDirectory = "/home/amargita/tmp_6l2r7i";
$wgAutoConfirmAge = 86400*3; // three days
//$wgGroupPermissions['*']['edit'] = false;
# Disable for users, too: by default 'user' is allowed to edit, even if '*' is not.
//$wgGroupPermissions['user']['edit'] = false;
# Make it so users with confirmed email addresses are in the group.
$wgAutopromote['emailconfirmed'] = APCOND_EMAILCONFIRMED;
# Hide group from user list.
$wgImplicitGroups[] = 'emailconfirmed';
# Finally, set it to true for the desired group.
//$wgGroupPermissions['emailconfirmed']['edit'] = true;
$wgGroupPermissions['editprotected']['editprotected'] = true;
$wgGroupPermissions['user'] ['upload' ] = false;
$wgGroupPermissions['Autoconfirmed users '] ['upload' ] = true;
$wgGroupPermissions['oversight']['suppressrevision'] = true;
$wgGroupPermissions['oversight']['suppressionlog'] = true;
$wgGroupPermissions['oversight']['abusefilter-hide-log'] = true;
$wgGroupPermissions['oversight']['suppressrevision '] = true;
$wgGroupPermissions['user'] ['autocreateaccount' ] =false;
$wgGroupPermissions['steward']['interwiki'] = true;

//$wgGroupPermissions['']['edit'] = false;

//$wgGroupPermissions['user']['edit'] = false;



$wgGroupPermissions['Rollbackers']['rollback'] = true;
$wgGroupPermissions['Account created ']['noratelimit '] = true;
$wgGroupPermissions['Autopatrolled']['autopatrol'] = true;


$wgGroupPermissions['steward']['userrights']  = true;

$wgShowExceptionDetails = true;

$wgShowDBErrorBacktrace = true;

$wgDevelopmentWarnings = true;

error_reporting( -1 );

ini_set( 'display_errors', 1 );


$wgGroupPermissions['sysop']['checkuser'] = true;
$wgGroupPermissions['sysop']['checkuser-log'] = true;

$wgGroupPermissions['bureaucrat']['renameuser'] = false;
$wgDebugDumpSql = true;
$wgShowSQLErrors = true;
$wgShowDBErrorBacktrace = true;
wfLoadExtension( 'UrlShortener' );
$wgNamespacesWithSubpages[NS_MAIN] = true;
$wgUrlShortenerTemplate = '/r/$1';
# Disable reading by anonymous users
$wgGroupPermissions['*']['SpecialPage_initList'] = false;

# Disable anonymous editing
$wgGroupPermissions['*']['edit'] = false;

# Prevent new user registrations except by sysops
$wgGroupPermissions['*']['createaccount'] = false;
wfLoadExtension( 'Lockdown' );
//$wgSpecialPageLockdown['Special:Specialpages'] = [ 'user' ];
$wgActionLockdown['history'] = [ 'user' ];
//$wgSpecialPageLockdown['Special:Specialpages'] = array('*');
$wgGroupPermissions['*']['Special:Specialpages'] = false;

$wgSpecialPageLockdown = [
	'Activeusers'               => [ 'user' ],
	'Allmessages'               => [ 'user' ],
	'AllMyUploads'              => [ 'user' ],
	'Allpages'                  => [ 'user' ],
	'Ancientpages'              => [ 'user' ],
	'ApiHelp'                   => [ 'user' ],
	'ApiSandbox'                => [ 'user' ],
	'AutoblockList'             => [ 'user' ],
	'Badtitle'                  => [ 'user' ],
	'Blankpage'                 => [ 'user' ],
	'Block'                     => [ 'user' ],
	'BlockList'                 => [ 'user' ],
	'Booksources'               => [ 'user' ],
	'BotPasswords'              => [ 'user' ],
	'BrokenRedirects'           => [ 'user' ],
	'Categories'                => [ 'user' ],
	'ChangeContentModel'        => [ 'user' ],
	'ChangeCredentials'         => [ 'user' ],
	'ChangeEmail'               => [ 'user' ],
	'ChangePassword'            => [ 'user' ],
	'ComparePages'              => [ 'user' ],
	'Confirmemail'              => [ 'user' ],
	'Contribute'                => [ 'user' ],
	'Contributions'             => [ 'user' ],
	'CreateAccount'             => [ 'user' ],
	'Deadendpages'              => [ 'user' ],
	'DeletedContributions'      => [ 'user' ],
	'DeletePage'                => [ 'user' ],
	'Diff'                      => [ 'user' ],
	'DoubleRedirects'           => [ 'user' ],
	'EditPage'                  => [ 'user' ],
	'EditTags'                  => [ 'user' ],
	'EditWatchlist'             => [ 'user' ],
	'Emailuser'                 => [ 'user' ],
	'ExpandTemplates'           => [ 'user' ],
	'Export'                    => [ 'user' ],
	'Fewestrevisions'           => [ 'user' ],
	'FileDuplicateSearch'       => [ 'user' ],
	'Filepath'                  => [ 'user' ],
	'GoToInterwiki'             => [ 'user' ],
	'Import'                    => [ 'user' ],
	'Invalidateemail'           => [ 'user' ],
	'JavaScriptTest'            => [ 'user' ],
	'LinkAccounts'              => [ 'user' ],
	'LinkSearch'                => [ 'user' ],
	'Listadmins'                => [ 'user' ],
	'Listbots'                  => [ 'user' ],
	'ListDuplicatedFiles'       => [ 'user' ],
	'Listfiles'                 => [ 'user' ],
	'Listgrants'                => [ 'user' ],
	'Listgrouprights'           => [ 'user' ],
	'Listredirects'             => [ 'user' ],
	'Listusers'                 => [ 'user' ],
	'Lockdb'                    => [ 'user' ],
	'Log'                       => [ 'user' ],
	'Lonelypages'               => [ 'user' ],
	'Longpages'                 => [ 'user' ],
	'MediaStatistics'           => [ 'user' ],
	'MergeHistory'              => [ 'user' ],
	'MIMEsearch'                => [ 'user' ],
	'Mostcategories'            => [ 'user' ],
	'Mostimages'                => [ 'user' ],
	'Mostinterwikis'            => [ 'user' ],
	'Mostlinked'                => [ 'user' ],
	'Mostlinkedcategories'      => [ 'user' ],
	'Mostlinkedtemplates'       => [ 'user' ],
	'Mostrevisions'             => [ 'user' ],
	'Movepage'                  => [ 'user' ],
	'Mute'                      => [ 'user' ],
	'Mycontributions'           => [ 'user' ],
	'MyLanguage'                => [ 'user' ],
	'Mylog'                     => [ 'user' ],
	'Mypage'                    => [ 'user' ],
	'Mytalk'                    => [ 'user' ],
	'Myuploads'                 => [ 'user' ],
	'Newimages'                 => [ 'user' ],
	'Newpages'                  => [ 'user' ],
	'NewSection'                => [ 'user' ],
	'PageData'                  => [ 'user' ],
	'PageHistory'               => [ 'user' ],
	'PageInfo'                  => [ 'user' ],
	'PageLanguage'              => [ 'user' ],
	'PagesWithProp'             => [ 'user' ],
	'PasswordPolicies'          => [ 'user' ],
	'PasswordReset'             => [ 'user' ],
	'PermanentLink'             => [ 'user' ],
	'Preferences'               => [ 'user' ],
	'Prefixindex'               => [ 'user' ],
	'Protectedpages'            => [ 'user' ],
	'Protectedtitles'           => [ 'user' ],
	'ProtectPage'               => [ 'user' ],
	'Purge'                     => [ 'user' ],
	'RandomInCategory'          => [ 'user' ],
	'Randompage'                => [ 'user' ],
	'Randomredirect'            => [ 'user' ],
	'Randomrootpage'            => [ 'user' ],
	'Recentchanges'             => [ 'user' ],
	'Recentchangeslinked'       => [ 'user' ],
	'Redirect'                  => [ 'user' ],
	'RemoveCredentials'         => [ 'user' ],
	'Renameuser'                => [ 'user' ],
	'ResetTokens'               => [ 'user' ],
	'Revisiondelete'            => [ 'user' ],
	'RunJobs'                   => [ 'user' ],
	
	'Shortpages'                => [ 'user' ],
	'Specialpages'              => [ 'user' ],
	'Statistics'                => [ 'user' ],
	'Tags'                      => [ 'user' ],
	'TrackingCategories'        => [ 'user' ],
	'Unblock'                   => [ 'user' ],
	'Uncategorizedcategories'   => [ 'user' ],
	'Uncategorizedimages'       => [ 'user' ],
	'Uncategorizedpages'        => [ 'user' ],
	'Uncategorizedtemplates'    => [ 'user' ],
	'Undelete'                  => [ 'user' ],
	'UnlinkAccounts'            => [ 'user' ],
	'Unlockdb'                  => [ 'user' ],
	'Unusedcategories'          => [ 'user' ],
	'Unusedimages'              => [ 'user' ],
	'Unusedtemplates'           => [ 'user' ],
	'Unwatchedpages'            => [ 'user' ],
	'Upload'                    => [ 'user' ],
	'UploadStash'               => [ 'user' ],
	
	'Userrights'                => [ 'user' ],
	'Version'                   => [ 'user' ],
	'Wantedcategories'          => [ 'user' ],
	'Wantedfiles'               => [ 'user' ],
	'Wantedpages'               => [ 'user' ],
	'Wantedtemplates'           => [ 'user' ],
	'Watchlist'                 => [ 'user' ],
	'Whatlinkshere'             => [ 'user' ],
	'Withoutinterwiki'          => [ 'user' ],
];