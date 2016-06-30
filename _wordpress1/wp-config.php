<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'ingrwf04_wp1');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y<O Gsy7a+55C#Z mRgC#7K`SgqkL6McT9+U}c./M P>bJd]7whsikC_3j$^3xM/');
define('SECURE_AUTH_KEY',  'Ivx1^*a7}>HG`=$Iy/O H=Stt!D*N0L?bvUSL,f@^sJ8t^ON+Ui/_hIpQj]&/cnA');
define('LOGGED_IN_KEY',    '?2c3kT:sE<=+g!1X[&:-gKjUx9r2$s;e|Slklf<UTaQSeoH=_gZ6-Q6UBh>aBN78');
define('NONCE_KEY',        '^=_ZO2X]X0Z4.Z#|yr0TyMasL)wX@_kdwkApy1Cz#hP)~!&.~49v/E5vg4sxIbRT');
define('AUTH_SALT',        'jsi6-7J)QwJ5v0zr^S_V}IV[i][g$h(G?VurRQ${1^dHSeQ ,!F]Bil(P{tf2])W');
define('SECURE_AUTH_SALT', 'R;OmF2t^);BZyy2]*($9&p%rm$.r>7/kJ2c([+FEkl][UNDMg`q8[|:H1y%DCCPn');
define('LOGGED_IN_SALT',   'hdJ@YxHT+tVquQHf983|0*T>J6uPR43ah~h{l`5vq.CC`&0pn)R%;p}V~@{$TBM9');
define('NONCE_SALT',       '=4m)/BW1lJMzCDHKw=n(cUHOZHAI=W7x{F(b`xVi2gMJz#KF[U8rDn}[^4p)P;vF');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');