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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         ',Mt##nQ`?e6>kl,9^[*HAcdDtC}<7z{t.5IvHxsT]D:IA!<|<oSl8s:a#%AUS3b-' );
define( 'SECURE_AUTH_KEY',  ':qI$`+rwb6Btr>gA6z[|c[J~Z<HmeJa{&BEU!PCr/xC^b88L~<;@^WzU-igekIVo' );
define( 'LOGGED_IN_KEY',    'M1:8`jtafY4bfFQIE~><<xZ{0Re@F}@K[4Ac48IR3ZXu/T~X,7{UuGz?</mNq.!=' );
define( 'NONCE_KEY',        'DlYsp)TXxDb`NK>,,.Rj1|*LoL(Lp(qF @/ra-iL,*HV}UyV<,A.h~StgR^^aSyN' );
define( 'AUTH_SALT',        'Bx*99ZgSM[]8jPGmE9AiQK<4ie.[PDa]70)etU9IkX.gz}.z$~d>w{Z*y!W@6#iH' );
define( 'SECURE_AUTH_SALT', '9L,?*M_%v;:!YF/!rubafG|ZN,6VlE<CKIR^4Jr<?5`vPNVmPhtdnsAD%8CD&Pki' );
define( 'LOGGED_IN_SALT',   '1#P!FoJ++oL4ofK+G8/cc%C%m5(d+pR2<5{D`|=p{!yl_na&g.#<YK#]TS!^ CD ' );
define( 'NONCE_SALT',       'V Qld7JA]heo~RECv6<rClyV?miZaE/Yuxn?,At-$Ek50Nc=UV^3tbg}Eyuq&Q@<' );

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
