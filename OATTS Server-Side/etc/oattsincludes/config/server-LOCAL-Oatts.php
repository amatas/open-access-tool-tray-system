<?php
//if set, setting will override local settings
//$globalDebug = false;

//define("SECURE", true);    // FOR HTTPS
define("SECURE", false);    // FOR HTTP
//define("SQL_SECURE",true);  //for mysql over ssl
define("SQL_SECURE",false);  //for mysql over ssl
define("BASEIP",'oatts.local');

define("HOST", "127.0.0.1");	// The host you want to connect to.
define("USER", "");	// The database username. 
define("PASSWORD", "");// The database password. 
define("DATABASE", "");	// The database name.


define("BASEDIR",'oatts');
define("WIDGETSDIR", 'widgets');
define("WIDGET_ABS_PATH", $_SERVER["DOCUMENT_ROOT"] . "/" . BASEDIR . "/" . WIDGETSDIR);


//---###//---###//---###//---###//---###
define("BOOKMARKICONSDIR", 'bookmark_icons');
define("BOOKMARKICONS_ABS_PATH", $_SERVER["DOCUMENT_ROOT"] . "/" . BASEDIR . "/" . BOOKMARKICONSDIR);
//---###//---###//---###//---###//---###


if (SECURE === false) {
	define("PROTOCOL",'http');
} else {
	define("PROTOCOL",'https');
}

$baseURL = PROTOCOL."://". BASEIP. "/" . BASEDIR;
define('REGISTERED',10);
define('DATA_SIZE_LIMIT', 40000);
define("MAX_SESSION_IDLETIME", 60* 60); //seconds-> hours
define("MAX_COOKIE_LIFETIME", 3600* 16); //seconds-> hours
define("HEART_BEAT_RATE", 1000* 60); //milliseconds-> seconds

define("DEFAULT_USER_AGENT","OATTS_CLIENT_v2_0"); //until we come up with something better

define('MAX_LOGIN_ATTEMPTS', 5);
define('MIN_LOGIN_WAIT', 60*2);
