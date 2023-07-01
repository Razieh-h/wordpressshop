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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zozanaghe' );

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
define( 'AUTH_KEY',         '=~)VK`[H~gpF+|BpFg[!2MHm#Miu6($PS1z`t<GG)|}=_7kmQu=d*J@tZc:c(d)}' );
define( 'SECURE_AUTH_KEY',  'L+:,x8kM.JY~/n(HhTBizmY+x/igHlhJd8]Hv|;wI!3C@w.e}%n1?kY*Rv@=?;wh' );
define( 'LOGGED_IN_KEY',    'P9mlqk>GRF`u8P*}v+`g*9zw>nslahH$W1CF5./ql_`[:,!kHTknfuDx^QXe@!~n' );
define( 'NONCE_KEY',        'bQZ7a?9]wo8G0e*W1*TuvkRe|[lRwh.!(0-{2?W>aKP0_2Yq:RLD6_OyX(~)VRg2' );
define( 'AUTH_SALT',        '~1l29<a=ds4;LPrB`R0Vs.o$<G3kP7Z5!&*r#4e}94XWf+Ar1X}AV6:7DW!AWfDZ' );
define( 'SECURE_AUTH_SALT', 'N`+fLDu#kJao&C<T6p0+D^LY>ooC)E}vJ *t7g >ipdsG%d qi4FpLs5<%7p%jx5' );
define( 'LOGGED_IN_SALT',   '^h$A+{1l^m7%;*MpCvdh3Qh`aR]MI|g`c9w7Myf+PS+[cr!7GNY8srO:)dl>zb,E' );
define( 'NONCE_SALT',       'rv0jq ${27kmfAEB?VH M9Nf0Sf;y}8Ob;WLq,1SF`)x[GF_:G0=0cf]ogQ)HJik' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'na_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
ini_set('display_errors','Off');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
