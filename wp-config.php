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
define( 'DB_NAME', 'w4' );

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
define( 'AUTH_KEY',         '$BMv]#ulG1R#UXz~kE%|nEw#pg).D0o.}WdFUc@MGOpZ(8 ex]U#+UbvCV@=8H8^' );
define( 'SECURE_AUTH_KEY',  'XU/Zc`]8(cK.h-0(%<P144T%l`V7mmc=NLzPgLt&<mf^uy3:|<B%r+GZ=Yg26+,l' );
define( 'LOGGED_IN_KEY',    'A6>)q`LoW-Qe_`kOx=_.<Vszi9?8|!nMHIv:8@`s}R],1Eho1M~ds/Kqnd]+xMec' );
define( 'NONCE_KEY',        'B/FT7{;s148rS#jt/03HCQW|Hws7<+t1dExy>q[OMW/I*USpO^J7!:>0@XZ>7bZ;' );
define( 'AUTH_SALT',        'X!h|]4#][vTirdv$0[s<]WIr7iakuZKMU-Hy5L^O#)|rB0lYV+#ExBzyx#B|JZ0U' );
define( 'SECURE_AUTH_SALT', 'kH4Fe*7X5_U,D!;hN7|,Aqxm-uF<]H*0$wpV5T>{Dq-p}E~^N^g|@pvAj0U1UE $' );
define( 'LOGGED_IN_SALT',   ')cwZeZ_uf8a[;&Ia)6dyezT%]F)?ds.n-.Nmi..9*121s`yDojOfyP->0E5[yzzr' );
define( 'NONCE_SALT',       '0Ns^l&neGB8.z$1Iud-RrFy1s1l*sKTqw`#~I/6[}9^k&b;bI}L~J/4-KBRzFVJy' );

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
