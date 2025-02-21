<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HoangNinh' );

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
define( 'AUTH_KEY',         'P ~}9YlQCz#s{[[$Jj8PmJc&(^N$ZbB>^+}D{&=Dt[p4bdn8>&N,=v{ST bLx7OF' );
define( 'SECURE_AUTH_KEY',  'ho-.`t9:DP.>|%1ak`s;!Xau[^jHSb/D_HxZRt{+@B-F+p^?a1k&zkmz;vsGn96!' );
define( 'LOGGED_IN_KEY',    'fm2-ClR}d~=.3-Iw$L>OT}H.O1zqbd[{mhvSeI*ak^%K[h7 h iaFADAQ7|YM<:[' );
define( 'NONCE_KEY',        '- O_4Hbsn[H) pXPSC~rCa8yu=<j]V8M|&9SloKEpR&@xr*d.nn!k|@<thjf-YG?' );
define( 'AUTH_SALT',        's*;pZdBvpMK63.4kP:y jNZeqtUAJdmc*jj:-OlYq~ZgVe>9%ERYvO;:CSs&+tj5' );
define( 'SECURE_AUTH_SALT', 'a~oCVi%f0b8#o#d5^]R>gQ|pe]^sAXzqsR;^n:){?%=fk7&s?<0BsSm1eNRCspZD' );
define( 'LOGGED_IN_SALT',   '3E)nzK%BCa^X[0`k+Y%N&MQNTj)B1VdASo|2!bm2Bx`hyK:^r,o6~cFbY8)yaER-' );
define( 'NONCE_SALT',       'qlQ!^6|_H!IG gEcC.E5],v>3](spRH[}B|vYFSOGR@!,ijycj3G>fC$!qj$8h6Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
