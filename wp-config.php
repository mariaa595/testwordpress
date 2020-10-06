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
define( 'DB_NAME', 'webtest' );

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
define( 'AUTH_KEY',         'D=rtSMtSC9mirNp 5]+ -QDMh#f>+7e= gK5Z=`Blt&[Em2?!5c[![joU=w7)l[0' );
define( 'SECURE_AUTH_KEY',  'Q6{?2Uf>sBD}cq$v|x-a7n}xj!qv4qR@0Fnj+]MRlo!g+.%};OY_|0lQ3K22B)J%' );
define( 'LOGGED_IN_KEY',    '? *y6Q7 !mt.j6-d-Yea#v4pJnrldS~F.Cc&pGw?3GfOLu4>J:`nv4KS>Uym*Mi@' );
define( 'NONCE_KEY',        'nrZFF:Wuv}Z4EH?Q3d4U+AyTZ K,bdH(mkIrU,9iury)}s7qdf|hwd9Ex@|=iCNr' );
define( 'AUTH_SALT',        'Jg027hY[b/O>ti3yK8v#)87oXXW4o6SfWM&qClQ+]KA#$yQ|mB?7=F4p!r48VIEs' );
define( 'SECURE_AUTH_SALT', '(E9)37VFirG*U`9JAY62i)nxxBa=spCOI>(qsi$aZ!!V *36yX|G5(]EK5r[Yv&d' );
define( 'LOGGED_IN_SALT',   '.O~<-38<<aM87&il85![yUYckS<t!?Mwo5bf@}{TrhQO/m@AprOqAb/6Ux9<puhd' );
define( 'NONCE_SALT',       '^YAi&GtKT]fSdh0s%Ia#t<,hG-8g|t<u C3:4o>mLh3].fI=z1DVtHN1G{n(FTcf' );

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
