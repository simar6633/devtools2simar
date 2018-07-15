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
define('DB_NAME', 'devtools2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'h$*l=S$:}DrihrbZB9Q@Be{:HT{VZ~vG}Zk^_po9+uEH{/Rcup1)Tychpg!M^E7k');
define('SECURE_AUTH_KEY',  '?P0n{Ih16pY$o$ELu&KQJvZb$P-o*w5~je4S<E|2{|?X_-i39E/FQDaRy0v@yfG,');
define('LOGGED_IN_KEY',    'rV}/F3N|pE.qB&v%kBt2I@7&D]j>_QffIWYj]RYa}XoFLVwP2w7rO.8rL8X(m&{?');
define('NONCE_KEY',        '&2^inR5bXGMG:g#9i]=@8*rN|uquGC%~9yD@Cs|>wQ,{x>E0ndW!j3K:AXJ4;U^l');
define('AUTH_SALT',        'R^O/&Q 1/qKK|Wq|wgSa$3$G6AxCaHI+VeuNDy8Yz$SLW}[y}*=Z}WbapKkZ)iiU');
define('SECURE_AUTH_SALT', 'ls1 ;;@91&lKsXX}.l`l4c{Sk!],{ufDfl,tI^5l-V!]Ei1ivDe]BqH9_0O5h!mp');
define('LOGGED_IN_SALT',   'v6P]_I[xR1T%7,~zkm-sFOuO7OHg9.237L1BI-PpEmng/*qjQG{?km])b1~i1mv>');
define('NONCE_SALT',       '+nna?yzuHtnb:ER?,-`qdV1!.Scl!Bbb4kP=A43DzX}eydS$3&?4}Oprn`s< wy>');

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
