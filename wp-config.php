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
define( 'DB_NAME', 'poojacake' );

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
define( 'AUTH_KEY',         ';! JRs07?9>+!zN14u_f$.Z@I4s7mS$@]1:1/GlT&G=+~|&~/ohw.tFQA0(.%Z<Y' );
define( 'SECURE_AUTH_KEY',  '^^5|%^&~W?9#=nS<{0DpqQU?t3N+&PQ-Dgrk0t7(euVOqAP*2&JXN!Wu/PVM)nRa' );
define( 'LOGGED_IN_KEY',    'mo#[>5npXY)*o[OeiD}<s]{xo#Muz|@V7SW>`|>$|6yAD-.^RtmVqZv.R_MqD>Nz' );
define( 'NONCE_KEY',        '($g]MwUT-D2}qlX+u)A3H1Y?2A :-}BQn2UTh-ucq$E2n(8N*XF@+jA>I{Q4DhmI' );
define( 'AUTH_SALT',        'X0ywB$j>TgZlyqm,ZFuOWFFn>!I4bdo#*y29lRM9+lq7K}SAtU4+EPunygR+_#@K' );
define( 'SECURE_AUTH_SALT', '8tbn=!?T}4okxr~3&Gnz!2%[yOekb&X]G}#sQtF<nM_37U?%:<nMFHlkCZzLt0]]' );
define( 'LOGGED_IN_SALT',   '|++KptMPs `*Vs5+XuZkon6ddz@|bxo)W|q$t`79t6u+UI2cj.7lMEw,[#GrxZGg' );
define( 'NONCE_SALT',       'hCs+3XI~6$6Ct+K;^0hU20`|G9^:FUl<<#kjE7w^i{R*3[M5^U$<?xsj**i^^K)s' );

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
