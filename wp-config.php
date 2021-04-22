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
define( 'DB_NAME', 'susans-e-handel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5_9tS3,z@k2gYCg3Y/N$c*;lgq:C%/o7=PUmoA.6e41Jjn&(4Q1y5nneG{m)?KUy' );
define( 'SECURE_AUTH_KEY',  'EJR]kZ<cRsi5d?3*KQ+apTCi*?I|CJOnyV@N%M8>{|^d_,`r_9cUcAjg)i7Em9< ' );
define( 'LOGGED_IN_KEY',    'bp?f<)du6ASn >dQmMue )-AVqN5>jEQ`&Ft`)p~pfZF1iX_I9l(;8L6RHpSyrq!' );
define( 'NONCE_KEY',        '^IG:sVSmbOB85x(p^vGu%wM7PEsr|tOmJ2GfsG~{,P6o6d[zZa)2 Da<+p=%}5wQ' );
define( 'AUTH_SALT',        '_!tLmhudwqvFfygv2RvOPPs@&Dt<U(|;Po|a9|c[QgZE~:k:DN)A:53vV+&f`)f^' );
define( 'SECURE_AUTH_SALT', 'H.4~OMvYJmG%/O[qZ6%Ru1cbA)N~bp[,/tV,|fkIL~mo>fw8yKDQH<Vo ^gfL7dW' );
define( 'LOGGED_IN_SALT',   'O%fFmuZqb*`xd2%^bR.^t3~1@u1r?l>g$ei://D6ij-,#~xe4.`g|C&6I7t<82dp' );
define( 'NONCE_SALT',       'b]D}L*~X1KSc^8AVIGchs)yytVmXU0LSi{J`S.ddM4t9=w|V=3P|A8;=cxWMp}%h' );

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
