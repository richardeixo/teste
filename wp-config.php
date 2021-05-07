<?php
/**
 * As configurações básicas do WordPress
 * teste
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         '8L{O`Y$}FYyF#1n.mhAFG(t*x,gxFR?!H9xd0#Bj.I{m8#bu2S+f[Yi8sS6=)y]b' );
define( 'SECURE_AUTH_KEY',  '|+65ai9tN^&fh9SgQ8;|Pgdy;r+lqt>8e8A,$;R=cCK5(;E%*jSfaHeKpVCRTgcP' );
define( 'LOGGED_IN_KEY',    '4xs0?~NVrGt?WXt1FO6IY6 S6nD)2d&|;bS7(MG%.hVqOjaeWZ?<m?#>2#Kn`Kn ' );
define( 'NONCE_KEY',        'Hs6K}~z=&4=813#T.[>ljz~iu%fBeQh#zsDq+j0neY#0.P{Nr.vEHzToHr|-+C{}' );
define( 'AUTH_SALT',        'PCglh&4aaC/*n/I1$eGu{kN+y@tD?Rhap)@|*v9(<v|/84n|)6G$e%hVmhg/v*2t' );
define( 'SECURE_AUTH_SALT', '~#_d|c0XDDDK (O(w9Y.e%#PHS4iu;r4[+(S@k<:*))7)Zq^WA$)p?cL,D}$w-(8' );
define( 'LOGGED_IN_SALT',   '%$gA+&HO+0yps*j^4&TO]J=1BGz^gxE*is^7t4Ki&g5F69:MsI-Ga$pdka/bIQI-' );
define( 'NONCE_SALT',       '!dYC+G:FWI*.`.Bjp1`1PYn66<[Co&{OIj=0$bO$(}IMVx6|TzRq/<SEP_solX#c' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
