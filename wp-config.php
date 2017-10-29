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
define('DB_NAME', 'treinaweb_radical');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '[9PySH)qZZ-{]@D_o%A9<Qd_LiR8={`E5H3m^fV.oK=1,!_-qG9uWgih_XKLw1 0');
define('SECURE_AUTH_KEY',  ')i0Fb6kL|26diQ_1Mv5+7?g#@-i6tC=SrC{>(~&,id6%nl.P1IPaxcn!!{~IS#5d');
define('LOGGED_IN_KEY',    'S(B[gJb?58aOwJn]]a1Ek(UpvY!dPjvIWxMuDsg>)CiD:Ml3DG=!El+HtD=q|aSv');
define('NONCE_KEY',        'ip!9$w:$0y2oCcrg+4^xIt~GM4]H9no$~sw2Cj%3GoiQd)Pmp~0<.^+$D]c*$^^U');
define('AUTH_SALT',        'HKg#/;B5h2m`P0OI~,=22v8n$+svEscr^2vM&^$+>:2(R|)xj;Ht3~fqpl3a8&IN');
define('SECURE_AUTH_SALT', '~mqn}BV8_u;{LW= PN_WJs-/>VF{_`]:ji=HrtI^G.Ff 9Ho=6-gOQ8LA~WN<8!s');
define('LOGGED_IN_SALT',   'sUX8 E`ptlFDv [QQPKm)<G^6AwClPU*Yw{17@EQ0Yr[D$V1kk{GfqU[8vr,*5iV');
define('NONCE_SALT',       '6:hVY 9/%#.zG2|4b$];(,o6:QCO3x33+hMQ^k!ucZ74=CN`j,XD@]>_Z_0TGg48');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'tw_';

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
