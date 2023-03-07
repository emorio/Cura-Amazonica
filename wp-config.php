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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'curadb2' );

/** Database username */
define( 'DB_USER', 'mandelbrot' );

/** Database password */
define( 'DB_PASSWORD', 'FilipeDavi@123.' );

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
define( 'AUTH_KEY',         '@D=2s2hN.b@b+1H~sn2mab_6Eq}_pMJ~we=I4H}B`=<Q/5n9[>>xJ}T&RH%i(+%F' );
define( 'SECURE_AUTH_KEY',  '|?w`_s.I`nloRquL<Z&V%DAQ*~#m.7QZA[Csz]g[i4U0C#F$,f3**Ai1rGPjTAix' );
define( 'LOGGED_IN_KEY',    'Bp>{C/ipq>O;XBg~yAR(6JTT.(I>tP$N4+fBID BAxN3_WY=hS%k`/bIAR[#E#pP' );
define( 'NONCE_KEY',        '$TuPq:7d`7YJPy99{+)|WS{d L}_ 64zj95r@qQ7rkZl H`)/;!<@vs>{[s77Jss' );
define( 'AUTH_SALT',        'O28@@^q[dHs${} Bl,sv_zIKuDQ#n$R,d8.AUq|f/s3LfYL4& ^jMJ++VEhP7i3_' );
define( 'SECURE_AUTH_SALT', '_[rRXM9x]uxFn$<?VBX)SBpa{<qBk3LD<LL7J nF7JnT&-@D1ZN^:$)%Q=7>@29A' );
define( 'LOGGED_IN_SALT',   ',fj_5Ko@1hX%;`a9{N:,8~P,<NDe+J=3|da6%_c*!on1h[3?:K!^VU{/n:M:}t(t' );
define( 'NONCE_SALT',       'Jy4N:EakpX|Jx4T&QwMyVHMH~WNjU8+Zp[3Ri9`fH=!G[OATqMHPKJIid#8/a@ld' );

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
