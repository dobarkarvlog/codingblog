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
define( 'DB_NAME', 'codingblog_db' );

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
define( 'AUTH_KEY',         'JDj_ULwa)ATz#v*?Oa.Nu;WQHoTR6_lW];&=26_BrLb*ZjutKI@iJ}geA!/2[NHB' );
define( 'SECURE_AUTH_KEY',  'Y_CF$geLw^_/~vX-|3:!B]=oN^BbBGH`/HEJRf)&)0w~`jm>.@.kmt,plMJ*8}(s' );
define( 'LOGGED_IN_KEY',    'v^FrCxlihR_e:~yn^=Uc+%Ryy($8a`Lav_qs`% roI&_`R=pZfH3W)>H%>,J31T<' );
define( 'NONCE_KEY',        ' d_4iT^]ay@e[z,+PXN:NWQEYUVdh`2q;Ou% *_B@<n&)jF]T!&lf!a)!V$z29k!' );
define( 'AUTH_SALT',        'V0*CyJJ?7JL*-{~vi}z9!,E8#Z}WonrYp.$2+DlPuk?s!w[AF(4K@77g-_kAw}q~' );
define( 'SECURE_AUTH_SALT', ':2CZT@^Fo6|1FQ-j5e6(7kYW0O^Q{%X^rn%-F kc>23lGl)2V5&1W&TOjcy[Tl4G' );
define( 'LOGGED_IN_SALT',   'ai_pUd9u@~{xo(_L82ODrejI&GJG|u3^8dzYq&k=;h3FUxtA<(:EfCQ8Q=~~<>kL' );
define( 'NONCE_SALT',       'q1rw@GKJ4fOjNL~P^2Fm!n`,:qeNNFi.0A~wBa}i=|;|!LEQ5$u^ZLMIvE -`6Zs' );

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
