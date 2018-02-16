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
define('DB_NAME', 'sweet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8IevGyQ*D?t`@4QI37I{X^QjzR;jS_e/rn$R!+azn9NS2l!#u_!:&Jj>q3sc`#,]');
define('SECURE_AUTH_KEY',  'R_MO+&2,BHo?c=Cva@x}`H%`qs=Z_jW?cInkX/WP^jveG>C&+{)#%DZ4)Tql~wle');
define('LOGGED_IN_KEY',    'lb?jAMvk}<u1z:,}p%`L/AmpYkLEBAqg|0l-W#%wr3^I?jVdk*Y<ShkEipv:kwg,');
define('NONCE_KEY',        'eMen))(&4E=D$Ml|5Oqs^_(  ;!n!37w0s|b4YCTqd}]fo`ojm4>%|`nQ;Dj4wjl');
define('AUTH_SALT',        'x(x}u(vUUuWbk#clL7@fVrV-S|:7tf=C:I=x.i!#DP~AtvNQ$Z;^Z<aQb.n$i/Y%');
define('SECURE_AUTH_SALT', 'T`FL`.&?|0%,.JYV~>g=u.GG<@G6^&.)1E17`ixkEyYWH-hyD2I/x]N_Q;wYAC~4');
define('LOGGED_IN_SALT',   'K:OU7M-ck`QL$o*T@&-FT!+`Hpz6^vL7)pRRNHmxCjy5V7R_oIE}`-246F6Za{8h');
define('NONCE_SALT',       '8bS:-?>VAn0971SY,1 <R-r]/6k=Zz[=-=Lgl*lCT2M7q(UfE#n(glqeUBU=,iY ');

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
