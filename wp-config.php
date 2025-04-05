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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newdbs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'tTGlG69I^=-Ni<o|A(oVCsTh7Kf%;Y3kS0WERO~h[$^ S(`<wGKX7$lQ+f?l<gAn' );
define( 'SECURE_AUTH_KEY',   '~=*x=[z_|Zk@J+`(m;*dHs3Wpg=e?kL?{11&o&y<VAM312||B2*DyW&EwlEXUsLb' );
define( 'LOGGED_IN_KEY',     'ehQ^@kcr6_tQF,0&Y;TOoajdhK]S@$}qZNk!JT@pW~WDe|)FW&F7gJ/Q1tra^:Z ' );
define( 'NONCE_KEY',         'p;4]|>jRR+eI4sn@r~-K+(/=;ELg*?d[GIFNTW1}Gbc}d,4^ vu/Ge]PIXz tzd ' );
define( 'AUTH_SALT',         'AlB=gQQhnt>EUx/.p$L$Cp0bt-=9A{i_7Lf]sujq24OwoCbXLrr66Z:GRDMxA8U^' );
define( 'SECURE_AUTH_SALT',  'zL:uHw9r|:M*u*r]DSWY$B)K@WGQ1PdsHqd1OEH+~FDHU5_;Tl:8^e-IY[M=4yUC' );
define( 'LOGGED_IN_SALT',    'WVwQBpm@A$Ki+u$CmEto,tsX1[d]xZyNt#I?dw)=1$XL84w M0RdoJ|^1?I^bZfR' );
define( 'NONCE_SALT',        ')*~iw>+wlE8Epqi`wG?F55]eZDI sXtBakg<$VVXRN~jdS~29-!GO*8nad8.01RK' );
define( 'WP_CACHE_KEY_SALT', 'm<im!coLv,^xsyEw6c%B@A}Bf3dnV1&~{1KOS2?T?<Nr34?YF&bG*8jU%=q8I,(_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'aaba9751feda35aef78041df26e33576' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
