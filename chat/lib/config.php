<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license Modified MIT License
 * @link https://blueimp.net/ajax/
 */

// Define AJAX Chat user roles:
define('AJAX_CHAT_BANNED',		6);
define('AJAX_CHAT_CUSTOM',		5);
define('AJAX_CHAT_BD',			5);
define('AJAX_CHAT_CHATBOT',		4);
define('AJAX_CHAT_ADMIN',		3);
define('AJAX_CHAT_MODERATOR',		2);
define('AJAX_CHAT_USER',		1);
define('AJAX_CHAT_GUEST',		0);

// AJAX Chat config parameters:
$config = array();

// Database connection values:
$config['dbConnection'] = array();
// Database hostname:
$config['dbConnection']['host'] = null;
// Database username:
$config['dbConnection']['user'] = null;
// Database password:
$config['dbConnection']['pass'] = null;
// Database name:
$config['dbConnection']['name'] = null;
// Database type:
$config['dbConnection']['type'] = null;
// Database link:
$config['dbConnection']['link'] = null;

// Database table names:
$db_prefix = 'fsaf_';

$config['dbTableNames'] = array();
$config['dbTableNames']['online']		= $db_prefix . 'ajaxchat_online';
$config['dbTableNames']['messages']		= $db_prefix . 'ajaxchat_messages';
$config['dbTableNames']['bans']			= $db_prefix . 'ajaxchat_bans';
$config['dbTableNames']['invitations']		= $db_prefix . 'ajaxchat_invitations';

// Available languages:
$config['langAvailable'] = array(
	'ar','bg','ca','cy','cz','da','de','el','en','es','et','fa','fi','fr','gl','he','hr','hu','in','it','ja','ka','kr','mk','nl','nl-be','no','pl','pt-br','pt-pt','ro','ru','sk','sl','sr','sv','th','tr','uk','zh','zh-tw'
);
// Default language:
$config['langDefault'] = 'en';
// Language names (each languge code in available languages must have a display name assigned here):
$config['langNames'] = array(
	'ar'=>'عربي', 'bg'=>'Български', 'ca'=>'Català', 'cy'=>'Cymraeg', 'cz'=>'Česky', 'da'=>'Dansk', 'de'=>'Deutsch', 'el'=>'Ελληνικα', 'en'=>'English',
	'es'=>'Español', 'et'=>'Eesti', 'fa'=>'فارسی', 'fi'=>'Suomi', 'fr'=>'Français', 'gl'=>'Galego', 'he'=>'עברית', 'hr' => 'Hrvatski', 'hu' => 'Magyar', 'in'=>'Bahasa Indonesia', 'it'=>'Italiano',
	'ja'=>'日本語','ka'=>'ქართული','kr'=>'한 글','mk'=>'Македонски', 'nl'=>'Nederlands', 'nl-be'=>'Nederlands (België)', 'no'=>'Norsk', 'pl'=> 'Polski', 'pt-br'=>'Português (Brasil)', 'pt-pt'=>'Português (Portugal)', 
	'ro'=>'România', 'ru'=>'Русский', 'sk'=> 'Slovenčina', 'sl'=>'Slovensko', 'sr'=>'Srpski', 'sv'=> 'Svenska', 'th'=>'&#x0e20;&#x0e32;&#x0e29;&#x0e32;&#x0e44;&#x0e17;&#x0e22;', 
	'tr'=>'Türkçe', 'uk'=>'Українська', 'zh'=>'中文 (简体)', 'zh-tw'=>'中文 (繁體)'
);

// Available styles:
$config['styleAvailable'] = array('Red');
// Default style:
$config['styleDefault'] = 'Red';

// The encoding used for the XHTML content:
$config['contentEncoding'] = 'UTF-8';
// The encoding of the data source, like userNames and channelNames:
$config['sourceEncoding'] = 'UTF-8';
// The content-type of the XHTML page (e.g. "text/html", will be set dependent on browser capabilities if set to null):
$config['contentType'] = null;

// Session name used to identify the session cookie:
$config['sessionName'] = 'ajax_chat';
// Prefix added to every session key:
$config['sessionKeyPrefix'] = 'ajaxChat';
// The lifetime of the language, style and setting cookies in days:
$config['sessionCookieLifeTime'] = 365;
// The path of the cookies, '/' allows to read the cookies from all directories:
$config['sessionCookiePath'] = '/';
// The domain of the cookies, defaults to the hostname of the server if set to null:
$config['sessionCookieDomain'] = null;
// If enabled, cookies must be sent over secure (SSL/TLS encrypted) connections:
$config['sessionCookieSecure'] = null;

// Default channelName used together with the defaultChannelID if no channel with this ID exists:
$config['defaultChannelName'] = null;
// ChannelID used when no channel is given:
$config['defaultChannelID'] = 201;
// Defines an array of channelIDs (e.g. array(0, 1)) to limit the number of available channels, will be ignored if set to null:
// Don't set this
$config['limitChannelList'] = null;
// [FSA] Authoratative list of channels, available to all logged-in members
// array(<name> => <id>, ...)
$config['channelList'] = array(
	'Allergy_Alley' => 200,
	'Butterfly_Beach' => 201,
	'Dusty_Den' => 202,
	'Feather_Field' => 203,
	'Flowering_Forest' => 204,
	'Pepper_Path' => 205,
	'Sick_Seas' => 206,
	'Tickle_Tavern' => 207
);
// Group IDs that should be assigned Benevolent Dragon status
$config['bdGroupIDs'] = array(9, 12, 13, 15);
// Group IDs that should have the Chat Logs button hidden
// Has no effect on admins, mods, or BDs
$config['nologsGroupIDs'] = array(4, 16);

// UserID plus this value are private channels (this is also the max userID and max channelID):
$config['privateChannelDiff'] = 500000000;
// UserID plus this value are used for private messages:
$config['privateMessageDiff'] = 1000000000;

// Enable/Disable private Channels:
// (admins always Yes, unless set to 'false' instead of an array)
$config['allowPrivateChannels'] = array(AJAX_CHAT_MODERATOR, AJAX_CHAT_BD);
// Enable/Disable private Messages:
$config['allowPrivateMessages'] = true;

// Private channels should be distinguished by either a prefix or a suffix or both (no whitespace):
$config['privateChannelPrefix'] = 'Private_[';
// Private channels should be distinguished by either a prefix or a suffix or both (no whitespace):
$config['privateChannelSuffix'] = ']';

// If enabled, users will be logged in automatically as guest users (if allowed), if not authenticated:
$config['forceAutoLogin'] = false;

// Defines if login/logout and channel enter/leave are displayed:
$config['showChannelMessages'] = true;

// If enabled, the chat will only be accessible for the admin:
$config['chatClosed'] = false;
// Defines the timezone offset in seconds (-12*60*60 to 12*60*60) - if null, the server timezone is used:
$config['timeZoneOffset'] = null;
// Defines the hour of the day the chat is opened (0 - closingHour):
$config['openingHour'] = 0;
// Defines the hour of the day the chat is closed (openingHour - 24):
$config['closingHour'] = 24;
// Defines the weekdays the chat is opened (0=Sunday to 6=Saturday):
$config['openingWeekDays'] = array(0,1,2,3,4,5,6);

// Enable/Disable guest logins:
$config['allowGuestLogins'] = false;
// Enable/Disable write access for guest users - if disabled, guest users may not write messages:
$config['allowGuestWrite'] = false;
// Allow/Disallow guest users to choose their own userName:
$config['allowGuestUserName'] = false;
// Guest users should be distinguished by either a prefix or a suffix or both (no whitespace):
$config['guestUserPrefix'] = '(';
// Guest users should be distinguished by either a prefix or a suffix or both (no whitespace):
$config['guestUserSuffix'] = ')';
// Guest userIDs may not be lower than this value (and not higher than privateChannelDiff):
$config['minGuestUserID'] = 400000000;

// Allow/Disallow users to change their userName (Nickname):
// (admins always Yes, unless set to 'false' instead of an array)
// (must set allowGuestUserName to be meaningful for guests)
$config['allowNickChange'] = array(AJAX_CHAT_MODERATOR, AJAX_CHAT_BD);
// Changed userNames should be distinguished by either a prefix or a suffix or both (no whitespace):
$config['changedNickPrefix'] = '(';
// Changed userNames should be distinguished by either a prefix or a suffix or both (no whitespace):
$config['changedNickSuffix'] = ')';

// Allow/Disallow registered users to delete their own messages:
$config['allowUserMessageDelete'] = false;

// The userID used for ChatBot messages:
$config['chatBotID'] = 2147483647;
// The userName used for ChatBot messages
$config['chatBotName'] = 'FloatingFeather';

// Minutes until a user is declared inactive (last status update) - the minimum is 2 minutes:
$config['inactiveTimeout'] = 2;
// Interval in minutes to check for inactive users:
$config['inactiveCheckInterval'] = 1;

// Defines if messages are shown which have been sent before the user entered the channel:
$config['requestMessagesPriorChannelEnter'] = true;
// Defines an array of channelIDs (e.g. array(0, 1)) for which the previous setting is always true (will be ignored if set to null):
$config['requestMessagesPriorChannelEnterList'] = null;
// Max time difference in hours for messages to display on each request:
$config['requestMessagesTimeDiff'] = 48;
// Max number of messages to display on each request:
$config['requestMessagesLimit'] = 100;

// Max users in chat (does not affect moderators or admins):
$config['maxUsersLoggedIn'] = 100;
// Max userName length:
$config['userNameMaxLength'] = 30;
// Max messageText length:
$config['messageTextMaxLength'] = 2000;
// Defines the max number of messages a user may send per minute:
$config['maxMessageRate'] = 20;

// Defines the default time in minutes a user gets banned if kicked from a moderator without ban minutes parameter:
$config['defaultBanTime'] = 3;

// Argument that is given to the handleLogout JavaScript method:
$config['logoutData'] = './?logout=true';

// If true, checks if the user IP is the same when logged in:
$config['ipCheck'] = false;

// Defines the max time difference in hours for logs when no period or search condition is given:
$config['logsRequestMessagesTimeDiff'] = 24;
// Defines how many logs are returned on each logs request:
$config['logsRequestMessagesLimit'] = 10;

// Defines the earliest year used for the logs selection:
$config['logsFirstYear'] = 2011;

// Defines if old messages are purged from the database:
$config['logsPurgeLogs'] = false;
// Max time difference in days for old messages before they are purged from the database:
$config['logsPurgeTimeDiff'] = 365;

// Defines if registered users (including moderators) have access to the logs (admins are always granted access):
$config['logsUserAccess'] = true;
// Defines a list of channels (e.g. array(0, 1)) to limit the logs access for registered users, includes all channels the user has access to if set to null:
$config['logsUserAccessChannelList'] = null;

// Defines if the socket server is enabled:
$config['socketServerEnabled'] = false;
// Defines the hostname of the socket server used to connect from client side (the server hostname is used if set to null):
$config['socketServerHost'] = null;
// Defines the IP of the socket server used to connect from server side to broadcast update messages:
$config['socketServerIP'] = '127.0.0.1';
// Defines the port of the socket server:
$config['socketServerPort'] = 1935;
// This ID can be used to distinguish between different chat installations using the same socket server:
$config['socketServerChatID'] = 0;
?>
