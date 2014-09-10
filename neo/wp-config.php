<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'neo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '20_.$4EmC&33S/O* #}NjSc:;6h>TmdmBF]:$TFPR!~+gp&Y+-!c[/zdahYanL>3');
define('SECURE_AUTH_KEY',  '^%J62=K`TP;3D.|LFNF?r.Q@}S*Gl9/Jrj)-%rpl#:`E;rBuoiqlC!,RlptgLFad');
define('LOGGED_IN_KEY',    'Ox6j-:57BRVP1.c)/ (pz#JxFE5czP|9G0T-4u(DT2_g>h}G?=?0oQ@q:H,$3-LZ');
define('NONCE_KEY',        '8iZnk?8x/`tvk#]XA<@19$mC*DenZ+B7#ZM{Gd98par$)FVe/#9UFS#[z(VW^6U|');
define('AUTH_SALT',        '1VvWxKiYuP-O]v|^$Hp#4/tc*^&&]*HoO-n|qu/}e<EATe)TDNWuVKm6c{#<ptz1');
define('SECURE_AUTH_SALT', ',5q{FL(ow]+gHk/Ep6*^L]?Y+zyACNf=+;dqt0K|+c&W(Kma:ttiyBv]93R6/782');
define('LOGGED_IN_SALT',   '|)d<~{d>{~AS+/Rz@1m+._v9|i-*0HUFWR>Dh=C993:j|2Y~|m(MI!KeIvg1@Vig');
define('NONCE_SALT',       '@z[b$k0XYH*%A03p:[i.<L=_(z5h|PH+>->+k.PvBa4Nv6YO)VqFL.lyrf&tw[e9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
