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
define( 'DB_NAME', 'gitwordpress' );

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
define( 'AUTH_KEY',         'TI)iM:c0;Rz^|;|SFYgSAVBa%ZM+={yXctjmQ=3nW5Pg*}Tb19o{^#t<s13|>)I]' );
define( 'SECURE_AUTH_KEY',  'G/DBGu#b/p0B_{nyrW`BCqd9O]37c{Xogpa_y-IVj_zabWnZ|9rfsD9hQ&0/@!iq' );
define( 'LOGGED_IN_KEY',    '6xfuhCO5lHMTTu`vS=3m~oV0r=V:=@sQG68Q K`+}aY]4!J[3-_xPgL<oDf_.nkC' );
define( 'NONCE_KEY',        'HUn+^.-jgZkgd^i/[lI0smk}PhD<D:E)07|8y*k1:axSQd=56NL`/]GqZTLR o/}' );
define( 'AUTH_SALT',        'K`la#_<[uk$`pl#>$.PiayO)TV@Cwd78K7Cqcle`(.jmX>E~mE`7U^0N_~7Q%6Dt' );
define( 'SECURE_AUTH_SALT', 'OhU0^mFuIv.,d}(NH*zibO<@iz-i&c@@>ZWP.,_bNHF7{Tpbp=j!;1C`:G,Td<2u' );
define( 'LOGGED_IN_SALT',   '981f%an?^:M#0Du!|*w;kImmbinuXnJ:0JSZ0h-s)`e9#N^pZpKb_ZrsvC,!@A%d' );
define( 'NONCE_SALT',       'B12Mcv@T<&O/?*umw)r.7%I,A_uROC^W&{%Au1Ut,c(8&Po)%AndS/pi+Ti{x}1M' );

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

