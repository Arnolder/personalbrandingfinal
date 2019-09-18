<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anderssoegaard_dk' );

/** MySQL database username */
define( 'DB_USER', 'anderssoegaard_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'QnAjve23WtnYsxbXyKXG6iB4' );

/** MySQL hostname */
define( 'DB_HOST', 'anderssoegaard.dk.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2a<t%91U_K.jC#Aj;iT|k(o0zVcZ=a<}vT+SWWT$7-u5n!w -5gz]Z:?7LYU/w V');
define('SECURE_AUTH_KEY',  'Eh*cXjBDNZyN?`V^mqtx>`VuhHBW9<I&S;55@t4*%iQ8Xcs#bqH|+3*-A6>vlx1w');
define('LOGGED_IN_KEY',    'J-}S2q8N2Nd>8 g2N0JU:v`W$2J}/UloVVmTbc2.J}TCOTWL3j1Q<_y{$DPGkc+O');
define('NONCE_KEY',        '0~Y%X jag@MfK!a-zp+5J<.RI-DH!Nt~SZVun-A-O0=|- Mk9Vh.Zoh!KBy}gXJB');
define('AUTH_SALT',        ']K/?+o(g&rTo++AbWXey1WDbOrLl 5Np{GU|9WM+S]S_ kP[Fey).NK@|XJ8PUc<');
define('SECURE_AUTH_SALT', 'zr+m&BCkk(|Eb8+,6<|mzezLUT4z(l~Ea7Mxw{ <s;JU=xI9z*Aew*X)ZTQ-AV98');
define('LOGGED_IN_SALT',   '/#hXj_)5&1`bLrMmC})$~H0ch/CF3yY-9[E@u@yDyCocjJvIp2/I[9*Bv{BGFUW,');
define('NONCE_SALT',       '0iA):NDR;|GHKE!m4tZ>r-i[tx:@K-Wz?-J8^x!08bno]74+l:svP[HR:U@L+5rn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'personalbrandingwp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
