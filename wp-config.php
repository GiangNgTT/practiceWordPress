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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '`UFLW(p$z}sMJg:;e1pfC)7LGp0(@SG#yu+N*$rj1OL8fV&OmWZ_gcl%.8jhA*LB' );
define( 'SECURE_AUTH_KEY',  'W[Y?bdEA59E%>U}WFc@~)dY,gw{bAX)KAcRp#.}v5@4[ugx;i1O=k,38do^y8$/d' );
define( 'LOGGED_IN_KEY',    '}v-@;T*YTN8w~w%*[vKa#.sI9k0+h}Td_H2#7IW|.9+<g-)$TfnI[`:Gkx,~@v%y' );
define( 'NONCE_KEY',        'q3ni{,l49_r @fk|SWA}F]IpLi-oi|b=)GJcbq@]pQ~Sn&z&#x)8|]4Q-B!zX1e5' );
define( 'AUTH_SALT',        'TBB@i$Wl 4)P]uo(U4Yv,vSy1eu_Y.RyYWFt7eFM<aPt_`J^I?cL2e>dIc@By;x#' );
define( 'SECURE_AUTH_SALT', 'Iljkr2hgU43-zRyvJ4|FbUKq36SMvm+Qi&iE=eu@H,~A?E?:MD?}n$|/)htGf+)$' );
define( 'LOGGED_IN_SALT',   'XA6tnLF0tX>eNy{ag;<75#9z;n/ah{Nvci?|HMaenE%TbZ0>P4#^ 8hE!uH;gNf,' );
define( 'NONCE_SALT',       'On/v$ql/Z[  #19):QF 6onr&wtt/x5zw)C{ jxhE1y*!jmL+cxh&=IsrrGogTVi' );

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
