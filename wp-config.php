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
define( 'DB_NAME', 'bb_blog' );

/** Database username */
define( 'DB_USER', 'Burdun' );

/** Database password */
define( 'DB_PASSWORD', 'AHXplBTFPC23DlrBZfan' );

/** Database hostname */
define( 'DB_HOST', 'burdunbearers.cf91sat9m1xb.us-west-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'vuC@dM}.]=Q+{=h{PafcQjz6[Ys[W1fe(ZuJO!o?QYVkKbo2?m_(/=EO+rblKK%U' );
define( 'SECURE_AUTH_KEY',  '~BL?Db>RfOzT=$8SWSM!I0H#p W&`3Uc((wx7=[Lx@zlL+84$!i$sOjZt:0 .hIN' );
define( 'LOGGED_IN_KEY',    'k,0QBIh[wfok<M_.E{s3iqPkD2CCjewVi8Ie?neyVn3R/m[<$dq:`A^.elbKVX2w' );
define( 'NONCE_KEY',        'rdb^B[U.MyWQA F+1zUTM]K_cr4$OCG.N!|BJ^v(k4<pHd#:QH55VJ7hHWeJC#Ym' );
define( 'AUTH_SALT',        'hu5fnLaYMe#Y_y1m@@N9-sf>uS=O&uTUG|=g]<t&vf(;f*BQ)H#kA#6[myh.kYkp' );
define( 'SECURE_AUTH_SALT', '2qt O0nMP`-zfCd%Q.VQCwTn?Z/B0KB)w Jm4G[f*usN)UXL(`J`QY3cQxH<Rl^$' );
define( 'LOGGED_IN_SALT',   'l]6*Z`G!nb2Oo3P*)/0Y}!EFq{J/y!$o<Q4.A?BvF9sb#:z|n!VadlmEf%sV1kCG' );
define( 'NONCE_SALT',       ')IKKO6JS_VYwmPcvP[zG(d_*Vlrz>}J44:;>kz8xrS-+n%j`styJUNkr]U;&%Yh4' );

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
