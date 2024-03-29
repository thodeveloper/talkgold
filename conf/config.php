<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1.11';

// Database
$Configuration['Database']['Name'] = 'talkgold';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = 'password';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['Wysihtml5'] = TRUE;
$Configuration['EnabledPlugins']['Emotify'] = TRUE;
$Configuration['EnabledPlugins']['AllViewed'] = TRUE;
$Configuration['EnabledPlugins']['Like'] = TRUE;
$Configuration['EnabledPlugins']['VanillaInThisDiscussion'] = TRUE;
$Configuration['EnabledPlugins']['Sprites'] = TRUE;
$Configuration['EnabledPlugins']['Tagging'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'Talkgold | Make Money Online Discussion';
$Configuration['Garden']['Cookie']['Salt'] = '2LC33KMF8B';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = TRUE;
$Configuration['Garden']['Email']['SupportName'] = 'Talkgold | Make Money Online Discussion';
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Html']['SafeStyles'] = TRUE;
$Configuration['Garden']['Version'] = '2.1.11';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['ThemeOptions']['Name'] = 'Bootstrap';
$Configuration['Garden']['Locale'] = 'en-CA';
$Configuration['Garden']['Format']['Hashtags'] = FALSE;
$Configuration['Garden']['Embed']['Allow'] = FALSE;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1.11';

// Last edited by talkgold (127.0.0.1)2015-08-28 09:42:01