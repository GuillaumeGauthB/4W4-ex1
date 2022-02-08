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
define( 'DB_NAME', 'haha-i-hate-my-life-trololol' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xTe7a>ke8N:b`-Y}E[Yn!+@{Z2|wB+b&RC$Rst,*=^/BE[85m=+^N?1/{n(XsY=W' );
define( 'SECURE_AUTH_KEY',  '~5<:V2&}H4d#pOG25zrZ|PE8JCtH.MyRs4D`+<~~|.L,|l4*l2%=(RxMfqv7+Do ' );
define( 'LOGGED_IN_KEY',    'NSr,1-4OvRq.[uk[||o1F#gV#lxox.R|{g7:D|`EcI/PLX.Sh*v4GoyW9.=^?7@u' );
define( 'NONCE_KEY',        's~i8uue^gv!D7=[RBE(`e}]~CO.)6$,Eh`!Ie#9.,o2H5`qM4DR+()Zi}:G|v5oQ' );
define( 'AUTH_SALT',        'AsUy*rZfgn,AD$6L>OrqQ*6KvINCyELPnYcbQ&6+~|L-IneT:b*DTb4&8:@Qu/9x' );
define( 'SECURE_AUTH_SALT', '~eYJrOdd?^-!B=g:=J 8NtFqK@ha;nE%,R(G0w?4^]b@N>;cAq#[/[vJO7fKs`2e' );
define( 'LOGGED_IN_SALT',   ' /o>{%6$h]f.n(+&!iL2QuR@6pf@YF8,yYi@t;hfP[B3+%Vb@[:ne?.ngH]m[:y0' );
define( 'NONCE_SALT',       '9dh,z$B7RKtL?2oKgmgpw!^KvuM*kX4CJm-X3=#i[V:6}yau^.p:.(R7RrUuZYX+' );
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
