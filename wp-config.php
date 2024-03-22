<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L_I3{<1RE3;o8>q!D^RgI.J!?BW/qh!?R{mW|uR~7$=7`O>PsN4*hU+:ruO(Kz>k' );
define( 'SECURE_AUTH_KEY',  ')>D[rWa%F}v?kLi#/,;+0Y4Be5<hh}4AENt04cbM&.5h`{dgIim:)$)91:@Y]OtI' );
define( 'LOGGED_IN_KEY',    '|MAwsVl(Gfjep#VvsuU@u(X<hd}@(8E?o(L5.C-H-Ot^-EsyaL9$kBmd:xc#@jH8' );
define( 'NONCE_KEY',        '~jcI?xTpN*M3j;m!2Z/n M[f 1M($BdS)A-#jjUe(m41Mn|UFuW[l=-hy3ggF58P' );
define( 'AUTH_SALT',        ' 9cvWE#cU7 8Kr^>AOH~I~|`N(T^u[D[ZeyGLo~|qFS5,Kx(Cd;6W[Jbwk7wUdQ,' );
define( 'SECURE_AUTH_SALT', 'kl)+og[:2(pK~i:xrgCvHlFE$=XSM{c55u_&RUIIUB48I38pj49auX/7ek&:fV]M' );
define( 'LOGGED_IN_SALT',   '9nHe!`dd,_,^{R$<!f;m%FI&!I1HLKCa6V<7*~+sdf&|,}vA5FAhu]IGx93U)ES(' );
define( 'NONCE_SALT',       'eV4PL3)*kR]>Q#1$g;$<@KKDglxi>K)*#PtiDe0+#=1FrKQLzw&w{BE0mg3ngZeu' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
