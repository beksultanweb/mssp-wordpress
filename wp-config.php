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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress');

/** Database username */
define( 'DB_USER', 'wordpress');

/** Database password */
define( 'DB_PASSWORD', 'wordpress');

/** Database hostname */
define( 'DB_HOST', 'db:3306');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/app');
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app');

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
define( 'AUTH_KEY',         'McptbJC=;[ u:s`#Ai)ef;q>/N=v9>e3==59;7?UNVsNRJwCr1.oUpn<w|chi$sJ' );
define( 'SECURE_AUTH_KEY',  'q!VD>g>;cG%fKXExl*d]u?kgjj4Rx/3wN=`oJ)aUc57rd5J$mLqYWnwz_%@P}I(#' );
define( 'LOGGED_IN_KEY',    '$a`uYgffFcYTpC2kgt$l%&38G3aXP7h)R5kRh17s:oYn[OwlmdKg72Pxh%{#Bu  ' );
define( 'NONCE_KEY',        'io1TAB,!jE]K:Hx[{J)s$0W|bQ=v36u{pAEZc|^(a`HJ]!^7Z^<%&U?a,eys(dKG' );
define( 'AUTH_SALT',        'p:C(Cw.+*b?}L~L%b)B),.a_.z~8YHE/k-#MEU/6=+P+qduLc>K&UAfQ/>kW$uT~' );
define( 'SECURE_AUTH_SALT', '`Z/LqNiA+a[>.;nKt9GS8u;N@E3#8h7h9tzp/0IlzuQb`n=U^<LTffE-/ 5#:G4y' );
define( 'LOGGED_IN_SALT',   'mW[R^@|i*udnU2gR]P=G7UU0JA<G-uaO  2xDKHR]l9T$H$,rX5eio:<qVZ!e@r6' );
define( 'NONCE_SALT',       '9^fkC.Ai2p_O[d(0>T-8{2_uq@yU3LsJMzXzI=(^r$JXGP*kX#eO8ow6%CXku;83' );
define( 'GRAPHQL_JWT_AUTH_SECRET_KEY', '-1CXmOF gP(q/7=iVS^&${mC+1HU!&tg;cMZMz|sam|_|v#&sS|n&{3|--,m` z,' );
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
	define( 'ABSPATH', __DIR__ . '/wp/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
