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
define( 'DB_NAME', 'swati' );

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
define( 'AUTH_KEY',         'K[043Ay1(]pt^q^}a.*+(apobl`!p _dYi.,QD`R/0aWO#3=ZBeZrO{qW!p&s(oq' );
define( 'SECURE_AUTH_KEY',  '4~47@7[)MPQ]Rbn~_^XntC1<056ed= ae]{toi]D{5HpI22xzl{,~,`|q)k^|[g%' );
define( 'LOGGED_IN_KEY',    'BC,4$P#A2b_}HIsAnq|OQIh!@*Vxd^4NL$4W~t@&B(p4$iw{td.zdLnQo|9mA-kA' );
define( 'NONCE_KEY',        '5 Tp_O-!ixhQk?.wJG enJPoSrXt|wf=Q-P{&%TN#0b+b00g0A(F]oxK/QH?(}/N' );
define( 'AUTH_SALT',        'gmykJ0Yn`e{5gEx&Qy,!%H67Aferp>Y;-%?jsn#L*z_)088Ch5KITM2fWQVAe: w' );
define( 'SECURE_AUTH_SALT', '%o=Jn qV*|]gzcnlB<ozze7v@@0D*b|Kq=[9sR~W: Do:A9?mi,,i>XJl2?ztPIS' );
define( 'LOGGED_IN_SALT',   ',AZ8RxDfOueg!~O)=79;XuQF]Yx)_+dj#;?w ]s)lsEJQ3*p90R|C*L;nlZ/stVd' );
define( 'NONCE_SALT',       '.<z^-{E(UazAPaaS{v!)=m4Rw3p6;Y6CE*&<}:KDvhoeiz^TBtS-i5Y;m>{Oh)8Q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
