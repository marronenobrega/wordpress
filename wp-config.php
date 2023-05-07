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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+lY#a;%/V9}NpFt^B4OB|r7P]B vgj9-]A:~q(p.J+E[f`wvhh<SU8NA,W#z(uKj' );
define( 'SECURE_AUTH_KEY',  'flRWBf]xaF!9<-59]!GndOL,glApObOx^<[Rq~VjI}M3gWcUwc&U6Hb>?^Ct&HN]' );
define( 'LOGGED_IN_KEY',    'o[>EPMf$P5Lz8# {6:0Nl@&isl*w*4{_Of?+hZ-fi#(@,B0Ar==&L1C%YY-mz0ST' );
define( 'NONCE_KEY',        'n4X)}FJO@Rs&#t!1tK9@NKj71k-CHO%<<E~E^FGZ2u=(>/k%Q w RI_NbaQk&PRW' );
define( 'AUTH_SALT',        '|CFIEtO=SP]z.?~mMD_)y6>tn4q=Ykxm|2`|,5-0Ro~/$rFZd)hU%mn!(G9=F*sq' );
define( 'SECURE_AUTH_SALT', '7caexn^U]Tr1YkyLkb6Y:2cWH]$2Xm,/JD}(M_LKf $B&4F>Y,Z)?}h$}C.8n_Xd' );
define( 'LOGGED_IN_SALT',   't@([T^{uPtzxg^Ybi3x#&`6`UcqR$vrhQAm#^^KZwi7<y3-Ix*9N8[qa`/9bryYK' );
define( 'NONCE_SALT',       'Nog/NETlOfXTd6)}Q0#A=]9C9C__^Wom@eR/M%tE$(Oc8d[<@`!dNmZE#a38p`Um' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
