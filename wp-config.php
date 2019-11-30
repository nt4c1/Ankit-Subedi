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
define( 'DB_NAME', 'wordpress2019' );

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
define( 'AUTH_KEY',         'VW{@]2JxS/gilU6NvjZ+!X#H_1GAy$wpbV(=`8s4af+HTBOSnC*7S:M`p<D*CmZR' );
define( 'SECURE_AUTH_KEY',  'C#+ax&M;{GkS$<1nfCe@UJ;NCpeqa S>M<fT~?X6$ak#IxSY[>78CH/iGuA~DhIA' );
define( 'LOGGED_IN_KEY',    'rG)bZIx&4?c3a~Yig/Mn..<[YozF<4E,>Y//(]x<j<`-Z^IZv5(&Ve4OP9#sJDlF' );
define( 'NONCE_KEY',        'e[1u%/YLT?wV-_<^u?jX(-:@T@l2h /,7riSM>#&2,bM~ZxX[0Bp?zG%&Y?Y2b`k' );
define( 'AUTH_SALT',        'AxAjb;V$o8Tpv-h? ,Fc4r!W!`z$[z=97NC]?C&d!l}}a:#r{}>(^M;m5@n-} W2' );
define( 'SECURE_AUTH_SALT', 'kz]4OCn NjCtOL=ob_3Csja2TW?uM$#g/B``X.gSWoTCA5e5[Ap#`OGX|8)o*gzb' );
define( 'LOGGED_IN_SALT',   '<{,WU--aW&)0Y1eR0#B5>J5DHZiV)bOd>Bk.]ma~t($mu*Ajr^v{&4e!aae_l*N_' );
define( 'NONCE_SALT',       'TC6,g-oFNabvTFJUGuh9:-ij1EO/o:-GWp`=D.,x3B>JeY81UpP:2)@8?z`)wz~A' );

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
