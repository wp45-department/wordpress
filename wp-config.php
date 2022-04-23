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
define( 'AUTH_KEY',         't/cK1kOB8gS92dHBC(T`au0Fv2JgO/GpA1iT^L9em&Edx=2VbVF]).t=,gytfJG(' );
define( 'SECURE_AUTH_KEY',  '*P[[E(3F9@QZ`G.K5LKeOoKOn@}g3tWcyP8y,>5!.0>G{MqYC+#_#(3`c8N~&j8(' );
define( 'LOGGED_IN_KEY',    '`X|xyv>F=AOw6xITZRw?^7K@7#Y_]<iq{:;9bML2bV4LWQBQBdNan7YQU<ts<1Oc' );
define( 'NONCE_KEY',        '`x%2H()L3_;#W>0QIk|~Qh4Z;37v,d,[3pEg*K~:dgHJ)Krkf7HM>2HMPbBZW-Mo' );
define( 'AUTH_SALT',        '[tT Px._]]9ly6&|o2]j6K.S+AfZ6b~)XO0q&7#KC9w4)=/1sdFO*!.d$ncD}?ry' );
define( 'SECURE_AUTH_SALT', 'YcjZFjz8H&Mq/>@27}coLGwWL{{}lHtD0C`8WA}{}MqSrDol1b_TVE-dvp:)vy-D' );
define( 'LOGGED_IN_SALT',   '*<D%QHQ+,T!XX{efeb0TzD-:)~JlecqY+)`0ufBF~koi;A()~:*mx7}|oK<>hPWL' );
define( 'NONCE_SALT',       'C<`!|d(%baA(%l8n~qZKA}m*_$vN$8~,>us:_{IKV!M}2TmcA6w7_q,6]p-.kAnB' );

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
