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
define( 'DB_NAME', 'Amy2' );

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
define( 'AUTH_KEY',         '&j4/B7Hq,s D~3?!}Zi.%biAiNAAk3i8qR,6:|)b~YmpJ(&Fjmy7?7#=TkR;hW!i' );
define( 'SECURE_AUTH_KEY',  '/8eWt~5s.Gr5JVqdU9m*~-xX6MG6Urz!.W*+0=huqw` -uWa<7t4a_un}ph31(5n' );
define( 'LOGGED_IN_KEY',    'e/q~h<3K>wyXZxOu(A7hHRfk3O!M10_p*AK5K!9<& _j<i1pqI}zuTIL.Qi$<4U0' );
define( 'NONCE_KEY',        'vG_`F:--V5K]4BTsR9(g6uT^a&E~NJan8$j%VFs074>Qid-|j=jy#s|M4z[<`Zo`' );
define( 'AUTH_SALT',        'Pz,qs8c>Bkp(?`v|SQL`[ByBZC=qE,$o@3Pl(]1YPpjMH<H(<F,@&:(6jN~]%sc:' );
define( 'SECURE_AUTH_SALT', 'z}@PT)Sq<Pdm%/tf4uin.mN*K=yaLF_`*kG ,)jEi!5Q*6H*#$uT(:i=0g!(77-4' );
define( 'LOGGED_IN_SALT',   '3(fy.7e[Krz_Kh`1}uci{EE[n(tMw|!`e^su$jfjGG2jstrFLBPSV5&-6uMA4bc ' );
define( 'NONCE_SALT',       'ga-&_|6C^+Wa9Z,kIz5L*zOK9ZtQ#$:AwFq5ryN*XebZl0&-^op>/E6t8;[EEA)-' );

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
