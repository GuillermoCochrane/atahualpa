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
define( 'DB_NAME', 'atahualpa_db' );

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
define( 'AUTH_KEY',         'gZsC8,%i;.+Ji=m5F)n,U[mG7w?dM6sT%>Z6i>~eZ*K>&$`]l[TAWq4aePk&j8P3' );
define( 'SECURE_AUTH_KEY',  '/1k{JW&XLQyGpsa`.#%JRF.`p*$xzG]?rQ*b&:W>E~{g2Ld)t_u[* vupV;ZXT3T' );
define( 'LOGGED_IN_KEY',    'HR}%^_I.8]CIim:wJgUz0#JdECwI]gq<@q~aH:df5Q~HDJtdEowQ=RWLWJ8Y33WB' );
define( 'NONCE_KEY',        '>HCZnC`2j<7QFK8$yF{Lwv#l$REhYo~.:N1i9@dGh0u|bA|L`45;Gd7HT6TNk{y!' );
define( 'AUTH_SALT',        ' j%3;cc!lo,xQnOn]+=lP{gNa@A!j cKU?WOgU(R^-E4WyB:sIvj_]Y|j@ZSmz`6' );
define( 'SECURE_AUTH_SALT', '=W22M%4ioFkLty ,P_ u/`mJJ@B(^?]F^#h<.QB]?/2&}BQ;H_|GfkcR#{DQyhkq' );
define( 'LOGGED_IN_SALT',   'lP(PjN;7Ezr^GsK_|;501+yga!}+JS0n)RkoZ1F&`Za<ZSFR1LY(AYj67OW9$o7L' );
define( 'NONCE_SALT',       'Y;=9+GT.!bVO>CZ#?c`,gSH,&zwxImKU[&Kg[W`E5qry0N&MDN 5=UzMzIVx^&g%' );

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
