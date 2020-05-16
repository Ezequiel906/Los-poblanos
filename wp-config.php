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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'bER1@5Lu;sm][x@/m=F.57);SViUN`V-9AJh9Jq5cnx#&WuL/WQH4/9iUERXx/Vb' );
define( 'SECURE_AUTH_KEY',  'J<k(W/+<o<^VFTX$B<]yh=vHCH4ShPI9+V0CQQ}Cu`H0H`j#ztIG1f)NobXkahd4' );
define( 'LOGGED_IN_KEY',    'on@,SN2U[x3)C%nR%2jF]s3nRXgK.=qzvPn3s} v$N/gLB6%aGpu$6!Z<A,c6>d7' );
define( 'NONCE_KEY',        '`REsz-{X`S3+7b]tN&^k#vg=$:?^I7aiFq6ihC;-x]Wu?^%V|IyPuUL|jOAX&@}V' );
define( 'AUTH_SALT',        'Bl]W;yGI_7*H0b=3 I5t/;O[0aUMRMvSFG$z!v.l9>,!tYm!~{JWmWxT8UX[dga3' );
define( 'SECURE_AUTH_SALT', 'h~n6.UA{K@=JF5Vs=3%WkMb+8b7bgHr*>Y2AJ%IekA0c8S[vc(%]/_Tfun_kgZ#&' );
define( 'LOGGED_IN_SALT',   's3#::!MmvxUo-@ME_DL6F8&{):,O$Z,SxdUn$Ui@l9I]nAI)K>l.yvk5YII,(.m!' );
define( 'NONCE_SALT',       'A:)u-nE_Z!~NVa]XO<q+KVM0xxw?=lV&69[gb,uJ[u%DiSKQ|#<Q|/Vhd?c,di%-' );

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
