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
define( 'DB_NAME', 'lilpeoplez_db' );

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
define( 'AUTH_KEY',         'zY#8qG]cV )>;WF<JGxXX0wjG:K+)8=0:HUHQI;2SFTorbjFw=;^5WQYJ| )vM!Q' );
define( 'SECURE_AUTH_KEY',  'Y:*6aA-h1PgPR`EwdCK*hLLIJ@W9jKkAtM@ZL~v;e:c;lSuoOZ81Q,XBkFx!*Z@q' );
define( 'LOGGED_IN_KEY',    'uXvBoM^TF}p0x:Od*qPC$6PzVo5[6rLbk;%3x([anukO5R{Bse>n[Ga4[Ks2-lmh' );
define( 'NONCE_KEY',        'Fio/)vc(f-5i;hGxva^2v,?KC/W5w!J$%7#rymT./duG%Ok!e[@a9;O&-[i,0Wca' );
define( 'AUTH_SALT',        '|+.pVUj=/vk[`v#d2=]*qea(eeiEHjMg4F^u|=5XI}Q2&`r6Qdc#N&?JIctDaT~d' );
define( 'SECURE_AUTH_SALT', '#EU},+B`+KvuE}b;1nS6sU?8z|l:m5NA_oMZEszCa=*|v? L0wx)aGJ`@7|p=d^i' );
define( 'LOGGED_IN_SALT',   '`eVv]Nx)AFV}*&:-Aaa_N*.faz%[ec_x)H[*]wZ7WSdwBMFdM4H?2nZ$:ky/gR-9' );
define( 'NONCE_SALT',       'Rt$&ZMnu7K84@,G$L#bOcA3caS_|bq7W.H,8/;@%I*PhK}pGMA=?mI^`vowF}g6a' );

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
