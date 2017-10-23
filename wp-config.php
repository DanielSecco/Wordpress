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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'c<`t-[yIxwRV~}OJd/5 9sDG(,z_v5h,ukAy/1n<A*`Av0A-q#|{4i~S=1< z]QV');
define('SECURE_AUTH_KEY',  'zxxRTAf_(Kw^/D2dvtdFx`!@LLjk0jstSO{%;c=I0!Rx2k`7FmUHL3R;Cv3JZ.[a');
define('LOGGED_IN_KEY',    '=$~fUK57${dM(LQ3a`bUM:6 _JIXfW{BbI~|l0M$}@5[{eMgPs_.f1W81g3nE?CX');
define('NONCE_KEY',        's{O<guZ4bx|*aq>6t&$^$E}]?J%^%<.hL}t)6G8>Y4U2Ve_H}3 c$f_G2BpkchC:');
define('AUTH_SALT',        'fQS%y>c:(eTRv{|Nih.{*WhCoyq}oaMowY{djT<75E#mvsW!4kpwlYH{G+r%Y6)k');
define('SECURE_AUTH_SALT', 'YUUMi_Fj/>S=esJU#1SL?`A{JjqW5sY|_z}F$i@ylWaa.S@n3*[Qdd&GW/Ri,>G&');
define('LOGGED_IN_SALT',   '3oT2 JPf`5ikGMC$m)oScDxUMf.gqg64-I|nk$CX`A|xqh@k9@Xqs$|@8dL <&[4');
define('NONCE_SALT',       '/>qGn^OXAG Y<d8H 4`qZ..T3J#?fz#7eFNmUdG?S0<@9=xO=o>EFL>B-Z@[]e?/');

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
