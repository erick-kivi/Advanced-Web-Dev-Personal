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
define('DB_NAME', 'wordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.IW][wIKz,; ,k!~GBxIP*qY<Ra*|1#:!5?:Q!A4_bv1C7vM@41U1`S$Oylq(z[F');
define('SECURE_AUTH_KEY',  'Pi8aQ8-c5PaR0ErS O9f-) FC?4XZlGoWom890{/cw$/ch_lJMx;)~B?I qChF{2');
define('LOGGED_IN_KEY',    'B<8* *6.ewi(I|.c2{Dvs1FjnF{fyPtzYN6y+&a/8m .[bH$,R;;DYmd0Nc66G8u');
define('NONCE_KEY',        '-Xw@9A0mol)a0=337hRr&8A)Pb)=T9%v<!lk3wAc14J=]rh=B[~9+A#CNl}$s/%7');
define('AUTH_SALT',        '%s#V>t`=.Re+Ni3N^{xauLSR=0Ifo%i)RjZ>+XL|i0H{NxzK{.AbaSclm4]i CTU');
define('SECURE_AUTH_SALT', 'Zv(pi]kD Kga?I8g~*:E&{(n%#v9r:1 sl(}W ~7_pq[0`,pb%C(4NWeYmU7h@}X');
define('LOGGED_IN_SALT',   'v6q=d1aTa:)(?338*V{_tb:E>.k%bfU@Bb8_j/M|N@4OcEHNV)7W3_FGwuS7+`rQ');
define('NONCE_SALT',       '>;]KYaLk^vkGPn])yzJ[[_,QDz&v8F(C3_qL$aUVBK?Z`R~x/6Va`hi?8z.*sW.#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
