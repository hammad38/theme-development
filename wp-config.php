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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hammad' );

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
define( 'AUTH_KEY',         'n4&YW-.!Ll0*b9[eJv-lCZV~W?aKz9TeV=Pr_@]7f3H8*p0lx:|PBKiY)7$7)w7u' );
define( 'SECURE_AUTH_KEY',  'n}v.HMlzk;8=ZP40q^5qYd]+f`mV?~>.x(V@wm+}iHlif!x~G8_]]PDpG%&Fgzl{' );
define( 'LOGGED_IN_KEY',    '1t{_Sx:lPDZ8UPz)6&_yE!CA{DynuBf-flpfPmFr:o6^*EX n66?kIK9Byf=0%0l' );
define( 'NONCE_KEY',        'Ne{-_f*,Te0xX`g.^glqu2p10En)*Zu6V$8u8vFp%0GR02S@?fyTK[bC0OD);X({' );
define( 'AUTH_SALT',        'L2[a{2MgdeY=r&[R!U<]2H2U4:B==Diu6L8s;yeHXXl*,w}@*j8sC_P_,_)tPN=:' );
define( 'SECURE_AUTH_SALT', '7?3QgY,]g--.3$p_~e!|}1Kf/Uw@wOHi,&:KB9tsRCL.ak6Jm+-&@f3x<3Oa/8G=' );
define( 'LOGGED_IN_SALT',   'm(sS+Z{<:/u){jr60PAD-*fF9o>H$i?g%G@R>x,+ty:Zccn~#:B0{-|t6221s9&R' );
define( 'NONCE_SALT',       '1<l`Oj},?z`=XwIA)DPcVQLp5jUs(6AiT{O fzwY`I%K}={{5 erb._?!rVi@Kx:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
