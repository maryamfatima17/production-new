<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         'S/;NCqn*zPCm|mP!WAOnu=`rALqFUj$xA1-b?XctCaSdr5(lsE9td*;p;0O#_o*_' );
define( 'SECURE_AUTH_KEY',  ']LzTXQ.n|/3NB:W/J?!uA3_*X7hxyC}zRU `<].<U$>>^AHW~B~Y*vQI0:+AzB/m' );
define( 'LOGGED_IN_KEY',    ',<m|?;Ot~`myvt:1WWRr37Q#/<b/11cBY43xb*(cQ$)F$8lxt`mQH/+{6>fljs%!' );
define( 'NONCE_KEY',        '#4)cR>/F%:u;)=@7STO_Tg=364fQ {NyJd,-@<9Nf!:8|eu4=sK4wLOt4kOqP$Vj' );
define( 'AUTH_SALT',        '-W[w6>?#esk.T^Z}5}wWW>,*Wy~PQIMYV}@7.X08*i~;3}YQ-.~t,~VQK(Z7eR)V' );
define( 'SECURE_AUTH_SALT', 'M9!U2Fo^Mou#wC39<eO06pV9Z||8xCc! S_46!7M^C%T=.V0,@u,LP,|Ma#jC1>k' );
define( 'LOGGED_IN_SALT',   '0dkXExu((OGVrM,7`-L_/]BQ^_GgvJgZxwlS#5EaEMO/2*)zs2BMs6Jr;GBo39J ' );
define( 'NONCE_SALT',       'ou28f[VSR`mbCHQ#~zFl7$efQGdmTC<{N,3M:k+UABr80jxQ<;M.D[yGa24XjXC9' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
