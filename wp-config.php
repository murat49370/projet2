<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// Ce paramètre est requis pour garantir le bon traitement des mises à jour WordPress dans WordPress Toolkit. Supprimez cette ligne si ce site Web WordPress n'est plus géré par WordPress Toolkit.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_1a3q1' );

/** MySQL database username */
define( 'DB_USER', 'wp_1a3q1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L0tl8?l9pApxpvBt' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'n#C)F*48YXrxE(Ma1114a1)5h]73CH9i2!788&hK|H;g4S74tt3x*Jb+;z7@k%RV');
define('SECURE_AUTH_KEY', 'n06&]hR2UIR6cHC%2mWKlBrzl2|5+3-PS&773iD5%q#8dcO*Z_:o7d5%u8)6UX*6');
define('LOGGED_IN_KEY', '1P93E|9zkoX5Ffv[*DN!70T/e[%H91b3(N2L~025@(%GJ0NeSnfK!9R92;3xjO78');
define('NONCE_KEY', 'I_jw_7H:)3b5h0b5#YC2SCA7+n[1K[dI;VC*tv%1|QDjAgi64Lu@x55QR(hs0Tii');
define('AUTH_SALT', '|34gA1v-drQ4bN*o%RsJ)k4u3)5oZ+7+o3!o9x5w@*l_f08pD&0L9sMf&A~esY|c');
define('SECURE_AUTH_SALT', 'JS*#4[nf;!0vbZuyM]!T*f86KF;*IMlSD;|K@#un[6/Uz0+h5B3amyn7S0AfQ0h1');
define('LOGGED_IN_SALT', '|8eC3P-5j!%dW4XT3LWQP0|q)FHT4D;p~*60%yU]a*Y4;MG~jkJr:!7gV89(;0o&');
define('NONCE_SALT', 'hC0jw6&*-uv*8Zp4454iwKW6s!H38R7hvP~d1|Oxr4|KN(/98Jp2Osel1Y02otq4');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '2s7tu4E_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
