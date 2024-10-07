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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'S,CKfRV6Z7m8]fwPwqehzO2V,t7:Z?S~S;k0L,bo$%(*JBXDohGi-9c{(3[EA>4L' );
define( 'SECURE_AUTH_KEY',   '=uW2/x_W1;=9ym8j%F[CA-S:hmz$$j3/!W7RcO0[o5I_,D`0+;w:Lct_eaw=<i*M' );
define( 'LOGGED_IN_KEY',     '?H}um=6(Rpw{n6j/=^D& Eg:Dqp?N+nIgsY+2v9/ /$@oQ?vdx<^xC7;SEv.2cPp' );
define( 'NONCE_KEY',         'd*~SF,-ND0ylblYpU/pRi0(TFT|jrlKGlo[ao{F@Te(.y2~M77DPOPJy5[#6V/Hk' );
define( 'AUTH_SALT',         'PFM]pjN#CsO+ <k<@yepUC2?H%<J&H9Svb#T:C&eZs0889A{.R#le/aRKY_ /R`^' );
define( 'SECURE_AUTH_SALT',  '`Dq-TC~_{N$DY=Ak,&hZ8zGD4;EM~C{J+jtS@|sGE>Ko!Sw<lvN.OTq8:eaJ4He`' );
define( 'LOGGED_IN_SALT',    'peFJ0N(3fV]XHXm_*8wX/REFksG,jD4g`3aNO}^CRtl2~&`uRB]69zbqO{aE(fNg' );
define( 'NONCE_SALT',        '7xXxlIVM_#RyIeu(Wl[TJ[[P?5YIMk&8h|5m~f]k[[[!+$y.y;o,lNF9E}|@@MUA' );
define( 'WP_CACHE_KEY_SALT', '~)B/C%,AI`fUa2H%eA0fGcD|>k^6B3uk_ogf7Hp0,WO WQ#TaRY*3<<Or*R<_wAB' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
