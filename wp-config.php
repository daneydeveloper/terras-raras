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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'u972871083_raras');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'u972871083_raras');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'midia@123');

/** Nome do host do MySQL */
define('DB_HOST', 'sql50.main-hosting.eu');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'hKg@D5$4~=i-h*NJ#urTOpAo-&DE*OOr5.ofQM9Kdg2xAZzhI2s 0=XwM<X}5JDb');
define('SECURE_AUTH_KEY',  'f$qc/_]2g?! <Mtng:IRiFA5t1HN,es-N`gl^?uJ(&ol0{A$ lEl]Q;gO!xZTf+4');
define('LOGGED_IN_KEY',    'WC2#uUYkkhZp>=[^q1uUm:M,1Kj+yxfhVlgFq@/WW*8:2vEZf?+Mq(.[kC4+e%1 ');
define('NONCE_KEY',        'X0P7);,|JOGbH>lLJ]9tKr3+*~V&umJTjFC9](k>j?I<trSLy6x[ eg#b+,[}=2V');
define('AUTH_SALT',        'r5x9,jq|zHR5v`s.VP~F#7?juIcpEUVn)F=omWH#)vMusz0};XT+e!YnP9h@/|f*');
define('SECURE_AUTH_SALT', ':rZ>Y:$%_PL}EJTCgm7i^zh&q:B>Q-`Tms2?,zG9bHJBvWIv^sH;5v(3/&<|-lR)');
define('LOGGED_IN_SALT',   'Y:3K0mle_@@6ZfFhy*[rG+Ax6~Xxgi9:i1rFLu@r7BZ^!pa!NJQ[jS3dPX5X!^P#');
define('NONCE_SALT',       ']`4@``8F2S8YNKY-S];oa/>O VnPVkN+r+8DiIYb7asl:SN7G-4tbpB4gZPp3Dwp');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
