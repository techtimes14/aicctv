<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aicctv' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'DISALLOW_FILE_EDIT', true );

define( 'WPCF7_VALIDATE_CONFIGURATION', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.z|7bU4BZw`a^W*)4%`!jb56K:z:Iwq}:8gN-{x7OA<s]?rDiTTmgV&%X)gs(mk=' );
define( 'SECURE_AUTH_KEY',  'x bplG SPLUmTXQn1PuxTc?hxpZxrXZ|~7i(`cK~X:x!g^EgvX+ltk>ngBN|>33!' );
define( 'LOGGED_IN_KEY',    'oF?flk2Wl)%Fs%aB8,*Y&IJ+Oj?Z,}N|Nz.g0E70dElvRzQfK50t_^O5*H:AGxGr' );
define( 'NONCE_KEY',        'X4FWKoOcgFL;1V3i<(jlx}J-$R0X#,ILF1z%;hxHatWe+Crhs33i@)sf:td Sc<}' );
define( 'AUTH_SALT',        'lSg3;`vF_KHi7r{h4VQgDNHsvaPT}6{b3fF%0>Q{@Df~Rq8[+^~NZ[`S`85-0F8A' );
define( 'SECURE_AUTH_SALT', '0bI8FyF>IPL]z^Yy$+B>?;b[ 4!2jZ[Tknwb4Z l<A?S#YRe-|0^`^h_%ewdbGnD' );
define( 'LOGGED_IN_SALT',   '@/](H#Bcs584l+lQkj 2,bxH28,4w$G,h|[wyvjStgOCei>)l Z(YS_8 N3:CqM`' );
define( 'NONCE_SALT',       'i%ia7#(=ljaB}hMb<kt%6=$m[)V2:3,WoI -ExiX;JE*)mtp] D9XyX;?(.dpL)U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ai_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
