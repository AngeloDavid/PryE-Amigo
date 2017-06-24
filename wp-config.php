<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'prueba');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '!H5@5>+vgSG$bnl0S_5OtY-[G@y$G-d$eH1IPmz!{44Byc(@TFa;*p*UJOOEmi-m');
define('SECURE_AUTH_KEY', 'L8n7g&Q~biOOD<7S*<T>jR<<*4ZpRN[+[EQgbQpaKlqhymVB(]c5S0~30$slr_n@');
define('LOGGED_IN_KEY', 'FT-8KHXS?ZhE1McKC:cCq%Rk}+dnJYyps1SVpiZk!d[q@vtilAy6Ug&ZISD@k${P');
define('NONCE_KEY', '8?~,Q8d[-TPyKvk}XQX^&wE_)6g,QaL:&/:xGT~eLrX]yn)CMT,xo*2-mOgkhc9m');
define('AUTH_SALT', ')YbzjcDQfTlyt(bB UBxw4nU*j.ArdNb{IJZ*rdR>83J#vYyr$TMOe!&;0E%cC%0');
define('SECURE_AUTH_SALT', '4.<,W-qI~-YyJ`jXC^P?H-m!>h?#uM(.EG:cFUZ9qR>:Qvn99vk@4E(|.)_&r-m<');
define('LOGGED_IN_SALT', '[BSV^^OhK*}H8H IvDE:{E(@K?_k=NC$wf)Brlls)7KnR$7uv60#9l9}p6tLs)If');
define('NONCE_SALT', 'h4b%|xM?01Vn]XOHmGvc/R)aY?9tuT *Pdt,T7Zzc$WUe$7y^][tx-#rNNdzmTJr');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METOD', 'DIRECT');

if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}
