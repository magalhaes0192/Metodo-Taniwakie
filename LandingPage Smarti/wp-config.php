<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'landingpagesmarti' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CZ*S2cIC%/gL)s}04s3Ue#)>a=$={.O$;wx,J&6&E7@jQ MGOw *swT(oPQokeqn' );
define( 'SECURE_AUTH_KEY',  'Dp,D]>I^2U}(i00T7:f7up`<+mOTf*Z#ci{qQE`~X)IAP(2_t3(07$}LBB:MPu4s' );
define( 'LOGGED_IN_KEY',    '0<> no:wTGwDPQ,Y8d0yP+e{_K%fp;Iqp,ii>xUhJ~1Q:1jBYp<dDbNZSGN/.]*u' );
define( 'NONCE_KEY',        'uq?KOw,<VaKr_3&z+8|pEhKV;5bS>^`6i=(# c#W4HXc6MC(f/[R?w+zPRJonGOh' );
define( 'AUTH_SALT',        'iIc~rKuqT*Hc>Gu%IzVjpfqU*l8p|?/LW ,3P7L.6|.1s-@bURyflOJAnfncH;bT' );
define( 'SECURE_AUTH_SALT', 'ymT3u^Cat(mJkm7a[f]o<]<22(G~y;f(n0WgZy)LK-+|so5rxPVNc1PAYtA$0,DE' );
define( 'LOGGED_IN_SALT',   'W|]Lv>EBzF:&!_Sqe23ez_y7duINON/GudS|~J)I{S&ysw&KP&p8jzt2G8(JeUI}' );
define( 'NONCE_SALT',       '!g,+Q,q6E%r#kRc9_Q@)CZW3N%D<k8?TT<P;*XI5+=`J:cx:h5Kv+NW`I$TP>aYl' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
