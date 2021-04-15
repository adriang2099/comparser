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
define( 'DB_NAME', 'compbhub_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         'Afz?A/qc-hxklw%TwT[i@qbi0)=}tMtm.B8z#.WZdTJ+^jCQ_=Q%:M_rR^l{Q9[B' );
define( 'SECURE_AUTH_KEY',  ']@_aIh^7Mu*/H#wU*zf;?KY8#XTGjDyzSY-wO|2L3C G)B3@7A$wNlbgA(yU{c%/' );
define( 'LOGGED_IN_KEY',    'P5K(~D7/7ZN{z+9wI7s&t(5v7Mi!A+n_vc@q5X,U+}fYB3 xIC7IM3QfrYVaMTT3' );
define( 'NONCE_KEY',        ' <[Cg5j~&t{oTf%+_jpy,PiB: H87l2/kR*cuoYW`j@pr|$&,:8r%C>w`2CU7Mub' );
define( 'AUTH_SALT',        'FO|y}lKcD}WpdFnRsX8ol:Wv,/EMvJvO2;!AZQmIcZL`WV> %kx}Y.!wsLpB^$yS' );
define( 'SECURE_AUTH_SALT', 'Tx5<inbBo.|Je_wUi?+VS !lHauT-?9Y1812,l^-`}=+O2$4):=*x.JkLK?g}Yl_' );
define( 'LOGGED_IN_SALT',   'N1ZwqNkZnABQ6Z3Px?pbMizh)KO2e45oY]E`@Q2ABb,!+/(c^P}2XIOqUtxAw{2Q' );
define( 'NONCE_SALT',       'Be>NCO-yck_JR.}pbX?EM`Tp3lO|iXk[W3#,hj_eR%Hz=>tpy(`g5f12f{U!T}$`' );

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
