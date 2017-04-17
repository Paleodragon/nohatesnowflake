<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_nohatesnowflak' );
define( 'DB_USER', 'nohatesnowflak' );
define( 'DB_PASSWORD', 'JnJ10ZzLi1jgGXt9ntgB' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'f2}_DZ]K`xwUz+hd~vj>yZ1c=XoM9vAa}le/ovaUe-lEs8Gk@i)2_8VCM!^5zG5s');
define('SECURE_AUTH_KEY',  'z*%2B*`VM#,p7|3b-E~/gW}&k6?Ui,%Mw9+r]pqW&.P|.1+Ee5>YwbCaybSP{8-s');
define('LOGGED_IN_KEY',    'x9-U8XkKSFv;DW,{a/vrSh~g=_&r%c3}A97)zUwK??Lz]T UzlsRK1~)KZ@rTGeJ');
define('NONCE_KEY',        '+y~pb0P#*(]-:77!n(oL>yclzPZP c#]r(-9Y+Z0hvluF2)H0->J*$iaXi)Q$8.q');
define('AUTH_SALT',        '`^S4tLlQeo?svL`WXx[X3zo,>`j3Rt?g}]fooM[R$slRK<r~99a?K.b(Xe{ -> 4');
define('SECURE_AUTH_SALT', 'rcojr@k(d(O SsDSNH d_XIArTA_c&`gG:sa,p(!Iw*:4-pm(@`b);k|,f+fcLkb');
define('LOGGED_IN_SALT',   'r~f%WW=ZC])Xl+aD{VF[KO! /K?8+-P0.|Or@#$ZwU8GeMZ;SW&+DH9N|M1R5]?N');
define('NONCE_SALT',       'SS/8Qaa`u;|Wr4|9G:?Hh@Y_@qUpv,-|ld@+;D8>atMA>@a-msH6dJvq6}s%NI2?');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'nohatesnowflak' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '2176ebc731dd8d5057b5b70782f9c7f23a6114ae' );

define( 'WPE_CLUSTER_ID', '100032' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'nohatesnowflak.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100032', );

$wpe_special_ips=array ( 0 => '104.154.86.12', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_SITEURL', 'http://nohatesnowflak.staging.wpengine.com' );

define( 'WP_HOME', 'http://nohatesnowflak.staging.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
