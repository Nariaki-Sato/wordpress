<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'testuser'); # 変更

/** MySQL database password */
define('DB_PASSWORD', 'testpass'); # 変更

/** MySQL hostname */
define('DB_HOST', 'docker-wordpress'); # 変更

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

### 秘密鍵サービスにアクセスし自動生成された認証用ユニークキーと差し替え ###
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')|;Y)*+c%OTN!49(w?C{|-1+[GrpH|na{x&mt#-ix}UFWY:mi|]@ST=)rB&&@CjP');
define('SECURE_AUTH_KEY',  'BmDsKHiUw+k1[K$-.lzT>$I:D6w0ilgkdudU=zZ(nBaQbb:yCMuVmJq|[e*muXp-');
define('LOGGED_IN_KEY',    '$/%u|z&25w4yvkd&x7S?tj|01`QrnZcRjIXH[`F!F?1-3}53Tn0C.cHg.|b9~^bw');
define('NONCE_KEY',        'Sv9!2B}*N/9H-= Z+7&E?e%2*xV!7-:p]pjaB1Rfo@-QXD7=VDh*SKO0QcAZea4$');
define('AUTH_SALT',        '1;!HqZp9[j1-|ihs|HJ=>iZUjqdPDa&G$)]=1>Y o/KP,ml(Pxe?,RFJl-T+5bG ');
define('SECURE_AUTH_SALT', 'L)Cr%HB-G^4Q6XF.|k}<.&h;2-Yvn[&zwR?V1$,B9~EfWG<gqL[Y$]rMmMCw)Rt*');
define('LOGGED_IN_SALT',   '_i{-`| ?-=)KSu#S.&Q.r|U%,xY,3pqY`$(jKEf(WFMw_:)6j!?]++lGS<nfOQ%m');
define('NONCE_SALT',       ']&Iwe&vGo b`0yVrqUBj R97t`sv_:a+#_N)n0~`CFJ#(O]^9@+F 9sY-W24vTA[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);
