<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sayohat' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.D{XA8&F{4>U@3G^MuT.8S@5;e/S[ vCT*ZhQFyd9G1P5a0j0G2@-s3dEnk/&mU5' );
define( 'SECURE_AUTH_KEY',  '=;GR,tbBwM_jzH!-sMMAAH@.61Wot1[#i#}Cf@:_,,hSOd(ZY-w,Os])^^yoCcS8' );
define( 'LOGGED_IN_KEY',    '3Bt-d[d9;8_]K5>5Zj+t8QKR3_r<ZW@W,Tq^mx>v}Lh|.w?n3~O?k>rMA/(5)E^=' );
define( 'NONCE_KEY',        'm]A $]a^eBVEv[-/_h!)vaOxdn[fgP4NA`}vgLi]a* ]!6ewTif*nr#n0$<VirYO' );
define( 'AUTH_SALT',        'vqzYuUQ+Gxv0;l`j@v_iB-c_21F=wQw4_6OT0Wo4=0J)`r]4:Id^~wbZ~W9!BKBF' );
define( 'SECURE_AUTH_SALT', 'MJ#2S:XUj?<(ti:%l/n=<flmr!M30s(?gjtZ2teSH=PbX a[a.Y>IT!y(+(d5`9D' );
define( 'LOGGED_IN_SALT',   'Nr0G`L4pkXT2:UDA*C8Xq5?wbAqW#m=II9$BT?m.)pxsdyKhN_$OfAUgMUXBZDoL' );
define( 'NONCE_SALT',       'fW%tdRq%j`jF(cDz(8&aQ&; V4aDz|W_i<gs>0|d>!tl.`?A0|t#5}}9WCah^D/l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
