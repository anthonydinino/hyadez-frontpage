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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'C.UpwKdfr  Qrw=<A,BVs1#tHC<00Q84NkRscBEP@9SS*pd_uu6DD]QJc@T9)}*f' );
define( 'SECURE_AUTH_KEY',  'miuiQ$sIMrXp5bwtGn!raW@viH4O!F!yT+yCA,K1{E}@m.ut)l=Ph)2!MpzO/3gy' );
define( 'LOGGED_IN_KEY',    '{yF4BJnG#Urs@:NsFWrH.A`V95ytKo/oTA<?xEmE_:i|!A!BgS%={MiH96g5cNuy' );
define( 'NONCE_KEY',        '9gb8yX6%m bJ|m+/b%pWH1[.&$WJK2nj7<p~bZKwNz-`E4GzKjGHl;>+JBX5:`m)' );
define( 'AUTH_SALT',        '0qD-bbVsQky]&R@2:PWdTaFhP*5Ry;)5hg8^#n/i)kYc/m!UU^G|EsBpD>%Aj9[X' );
define( 'SECURE_AUTH_SALT', 'bODWSdmAO4D;WB4~_rb$7aqg7_n{<Ej_du.|/m czOm/vEScA*_zfbSa*&{D+o_A' );
define( 'LOGGED_IN_SALT',   'FFu:&`()kA;qWWp<m%fQh:9d|(quAhM@$iK1d9_{CySEVL|HkbhcWRodG,P*S)lt' );
define( 'NONCE_SALT',       'SU@hPMgQ;60 4}^6]s.TVnTG}lKKQ+,`tm@`(n*)AlzBfR/9f6?@M($mfb&&07(-' );

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
