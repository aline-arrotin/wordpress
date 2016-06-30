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
define('DB_NAME', 'ingrwf04_wp2');

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
define('AUTH_KEY',         'DCl1$RQw~m+Sq=-#PW?#0,%VdymR]`g!ch<$9v,.ieDJuJ9%HV9>!za)ux  [-Lo');
define('SECURE_AUTH_KEY',  '(!b2L5qvfyA%f?n@2gIe=PENrV4[B[u-F[9:]H2{| *L*c@`w>CQN3EX90!ix cJ');
define('LOGGED_IN_KEY',    '.LNsdc(si[Y :k%a%^_:w.mF_*c2Z;x5m:.b}:*Xsq`RphfaKSV+FxE0UmR.1l[%');
define('NONCE_KEY',        'Y}{LG/?{>,P``G/>bkB><8H]05ZpQ%y4zz4.:)cR|sx(Ow5 d4uF1WDTJcKWI#k8');
define('AUTH_SALT',        '~+MJ@S^bwldht=q:@!+zP-<?%^4>g:o;g_] >48s=;4ONHvP:]`PUktyvZ:`< wu');
define('SECURE_AUTH_SALT', '_;?]~/J?^vsLq%T<@w{70f3[(lf#p3d.|kmZqupMsm[sd,u| l7/Zy_Xx1o:##Ej');
define('LOGGED_IN_SALT',   '+pdp,f5$5g8T^bH<:un)PsDgvVKN0N6<~`l<LO82-aK4hbGUs{vlqz,wUrY5Tnlx');
define('NONCE_SALT',       'sqDgd$]4qj^&}+SwN[%ojJR8)Mi3~D7~7vF4IUG;daguCt#dx5/HD|xFT~GD6P:n');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_2';

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