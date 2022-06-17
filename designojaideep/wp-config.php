<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'designojaideep' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         's,#CDI6?8vqXoa9j*Equ9AJtrLm_&v]Kr!.:OB<XKJ(StK)b,Y6zFZU~=eX/LavB' );
define( 'SECURE_AUTH_KEY',  '0hHf1G)ik|]6R4I`nA=03h_0pcpyy0QY8U]&UHC,RVzm6_vz?NX}e*kTYa*4zkcF' );
define( 'LOGGED_IN_KEY',    '}/,:NBXjrI|b2I[jhp9zAuEXh@d0%u()_tM0M.luQP^FCknDp)y:ay+9Qh:XrRl0' );
define( 'NONCE_KEY',        '?(cQ!4mlnp.G9rtOVIeubPthxPEXb ;$G=;R_)-CmKyx}sokk2*!QMfm9%R.<@na' );
define( 'AUTH_SALT',        'OVe[F>C@=_}@Tb%cp-7!HF`fVuh2;YM~GxiPY<B]9$XWuyzO4nBn{qra)z(mwO/u' );
define( 'SECURE_AUTH_SALT', '12#/C[t_AlQMAw`fUeXqMAH$O%vFB>xa2.[,)LDTpxAJcP{$Gv^<0Q`@u>jo#H)v' );
define( 'LOGGED_IN_SALT',   '~`pH_)<4vo.uEwCA{yEu=Ppn~iS7+hi}5M;2~c @dL_JLqMU*)F~Xr@#o]tPc*OS' );
define( 'NONCE_SALT',       '{780>i-d,7kv6jFeV,)i}L~An?}{sSUL!|#C4uj4_j-3zQntAi{[f~:(pu-pxxt+' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
