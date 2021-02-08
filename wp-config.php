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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_training' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oSJ}UsJ!(?H(_Ys3w M@3#VH@svkdNg*svLh=v_;0_3v,?yF.fujS!]d6u;Wxa!s' );
define( 'SECURE_AUTH_KEY',  '|1,~e-mvFqECZ^[GUKh3Hi{] cY.>k%(p5=Md:q<^2)X=+x[!%jx%g^WYQ~CK}bZ' );
define( 'LOGGED_IN_KEY',    '!en2|aXuj.?C;XHXO1%Q}Jw1y|s6up~*w+]A7*(0Z<fcke92>.BFKaMB%|Dcsi2Z' );
define( 'NONCE_KEY',        'MSk5[M^XORmgI<!UUXN>_g]U[k&+aAAJf5CN>gE?hQNIa{,WOhQTB$%,tbO;s-gH' );
define( 'AUTH_SALT',        '|<W 0j*ok8~`jlcpa_7F%U.5K<gS6wNiEYYd;]2lOeKBq[Z26EO;>a UYPS&bJyU' );
define( 'SECURE_AUTH_SALT', '?%n-y%QCysad75>sJW%/)p9#(<!SB03SX+%De.2^j$LZ5ZLGXbp=A<t*-BiX$SFa' );
define( 'LOGGED_IN_SALT',   'k+,56;!3=?b9XpM~9|BeDPyR}ibr^PDEY@3w9.f#_3_]cMSQU <[isevamaMar?F' );
define( 'NONCE_SALT',       '03RR`.#>*9N<xeN4TBXOZQaru_UuGenD_C6#rqrnK-X<b:lR6]- ;;;`)8;8` m ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
