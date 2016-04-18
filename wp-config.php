<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local_evidyalay_com');

/** MySQL database username */
define('DB_USER', 'local_B5mzxdsW0u');

/** MySQL database password */
define('DB_PASSWORD', 'tP73GRZD1FBir4M');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '=@~6j$5F/Q[.a#jq@c.h)&0^e$-,}_a~AA#Zkf^`N5r0ik :+]/wyQ-]rOR=|WP3');
define('SECURE_AUTH_KEY',  '|eDBm@HB+JoKy,7$-4f/-$6*q_Eq(_k/MaOi0G>%X?f%9W|_3y|oH(+k-[52%9Ng');
define('LOGGED_IN_KEY',    '<9,>0Wb6T]x?{u7IX~PRj.%0F-kps)G1#Q_ZB8bE(A W&F@~uKmE~AG}e+QT6{)J');
define('NONCE_KEY',        '&rQ&}&by@Fc`]^osIFXdKy+a6PI64x;#VW[{YWmlkv>rmJR?Vo=P/jm-RW|vt$qs');
define('AUTH_SALT',        'ju`2<i^_aZ>5wr3f`V*uZ)PfcQ+>un[ ++Df&z!-BbM/<kF;94+i|ws9dWk]j-YM');
define('SECURE_AUTH_SALT', ']>|DS2-Wg|27~>c]9#&9?S3bq-)62b9QXv<61P!5VWX@872)kr?V;v#2~i4sxo25');
define('LOGGED_IN_SALT',   'gzJ_bu|b&Q]bGFiN[lEiHpZ3vQ]TaQ|d)wce_+c`~6$b)}u.uj|/@9$qG&9v,Zs@');
define('NONCE_SALT',       '9UO;8Oe]3&+UVQ^||.}RjhmL8e}O5r|lG`1x2e$%L^+D_>e,#aaM~6!O+[,Fl]?6');


$table_prefix = 'wp_';


 

define('WP_DEBUG', false); 



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
