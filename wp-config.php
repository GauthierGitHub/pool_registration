<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'nad_pool_registration' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'pool_registration_user' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'g7Z_sms-T7' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '[;)=v]xyW>$DTxn5 ]t,B:+CGVe%^FWZv0ci9}%_=MTW+<,Z&ui66`I*pF4/&}c{' );
define( 'SECURE_AUTH_KEY',  '+1/$@|9bKvMfS:MZs_@uS^eSoXXxt{AU]<p#h,{7e0T}%=MwkBNy[FH4rM]KC;7g' );
define( 'LOGGED_IN_KEY',    '.0X=c!~a8?.)gYSVrKy%j@]JpQ.&ryV[]I*Gj;z5SE1h_Gql#1g)wIN=T(%hr~j(' );
define( 'NONCE_KEY',        'J?A`xrur%6B.baXx/>}/T0N!aO^+3/GzddahZ9# (QL#qDl}mj%#|NNt-;M6,]V/' );
define( 'AUTH_SALT',        'EcK^M-ht8r(U>3WN^EJ83GvT5NSJ?7f1clk{C%?/:@d!v&r$hQO]9r.v7[>AW$Tq' );
define( 'SECURE_AUTH_SALT', '`cA~?`hYGTDLh)j_W GgHd20%@S6PYSTvq 4:ZEK>B*qLn8 [FAvs@6S`~}X_%C1' );
define( 'LOGGED_IN_SALT',   'Nr9W54w5bH;dK4op>N<.*v),f5cZI/_~~zTwZZ-FG9fPVRJ=/1JaD2mntnmWdW_}' );
define( 'NONCE_SALT',       'irZu~3]a},M2}(E:`xoeD*h_A?(0f2!Yu7t`#5t.iA:2V>WBzceg-vL]V{.qwmR[' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'nadtb_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );


/** Add by Gauthier Barbet */
define('FS_METHOD', 'direct');