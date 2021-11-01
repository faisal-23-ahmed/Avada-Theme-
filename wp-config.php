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
define( 'DB_NAME', 'project2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'eWX]l-{Lps4S|GD]E}k#I_hEpF:g<@]JU~Z$e@`R-1ITIxXpiBFI:ll[D*<cco>J' );
define( 'SECURE_AUTH_KEY',  'V<eLfG3,mK^+rx9q<7n]c?H+MIb<w>3gIjO2}NcES4RLp<1i%ExghvM|cTw*AFlE' );
define( 'LOGGED_IN_KEY',    'OQDG4&`RmtN/#( .uj>$@AL%GvX4w*N{f+srJro$x%IkW8RU]-WB=!asE8?/A323' );
define( 'NONCE_KEY',        'I;|b0MA1+|hm_8k*E.m52EE,qekf-~xJ3F9(^h^a)<;pM]!$+e|RO,dMo&*sw}Ka' );
define( 'AUTH_SALT',        's&`hmE6e9j!Y22k!Wu~T,5xTgPB;FZw`OTjFdNabsDo+UQUy8lT!mO}-&R>FV.J+' );
define( 'SECURE_AUTH_SALT', 'Yym$av`eMyz <RNICPjHdM3O(,~:BoNz#D%5pA=g?/ZQTTPlebQ5.xK=y`LFN(r*' );
define( 'LOGGED_IN_SALT',   '$v{?/)x;k#eL7Q2=3Rm>/w6r{pbWZF>GfH1h#~+[Bv{>|6Aoyc3xcpW{OnNV/WCc' );
define( 'NONCE_SALT',       '8~VRfK~!j0U+n|!N~Lgg29w= $W>i9W(Lt(5]eWhoO|}merRGu.YpKL`?&<3Z=/,' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
