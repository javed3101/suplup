<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'u856179964_WdLlr' );

/** MySQL database username */
define( 'DB_USER', 'u856179964_Wslgl' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tdHlHLCD0T' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'U:eF#hw9YP4&s$z*@ZT=F6NqugEx(zmWr3uEEH:Wi@#FY(I{js3#78X;HJ|yfUN-' );
define( 'SECURE_AUTH_KEY',   'PA)eOACb*f<12R#% ^4g#p{98{b5>dFdG%Y,npe`g83`5f7)BnS^z-XD-z;wZS$U' );
define( 'LOGGED_IN_KEY',     'm:4@GX,_3dPEB{:WWK=a=m_yA B-?24U9XgrhRaM:rpoNIU)IVmo2ET$>K8dItYK' );
define( 'NONCE_KEY',         ' D/Akp!Iw`AgOo`98gEsOMK}d5/2+@?$zWUF^1]TyYo@>aFS8+g)p/PbjSm0~<ZX' );
define( 'AUTH_SALT',         '~^T:.|wxmO!7LNC/mT#83>PBNSrYLY%:^e3LaDO_iVc$YJAd/DA2gq]=,%jLJO$<' );
define( 'SECURE_AUTH_SALT',  '4}y|M?5{j8Z3yq0:);:^.9:J2S`E<cilIqF<u|aQg2K,hsJ3md>`O.|>jH {{o~p' );
define( 'LOGGED_IN_SALT',    'Wmwfk-yxJs0s`!|Sl->}}MO/<vTyLzZ=2&OXNx77];Gn4Z7&-G^OPlc(d0 5GiO#' );
define( 'NONCE_SALT',        '(-aaDQ?)l=?X&[uE/R^ROCzZ?eTE}ECfD6lt$my!,[sN]PuLx8(h~tYDt@CD98iV' );
define( 'WP_CACHE_KEY_SALT', '+`9~X~UVhp%ugD?4</+mtN@bkuPb=-DPHD[~7b,~#2V t2+*:[~[:-lJ=k[b69K.' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
