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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'testewordpress' );

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
define( 'AUTH_KEY',         'D[`RDvIvK.5%e=Fi$(16YCZFD9-!6TAA>upEI9,4P }Ny/|XUG{xC&5c_r#@@r`1' );
define( 'SECURE_AUTH_KEY',  'JpDbqUxoUh<R]~fm&)ynrKPhu-{&?/[NZWrdjM.=@IXBoOReEcRF G(rbuhp%AX5' );
define( 'LOGGED_IN_KEY',    'MyG-[IR>.^-<,FEw&SZDr%@&NRalHOZp~?jl{!ppf7CksH_?n?HCF45F@JGI_rv.' );
define( 'NONCE_KEY',        'C*D9C,4vbxl>/;|cm40e~iF#e4 ~}tgl;kr;HZCH*EEGgfQ(20%vF35Sv+^nP6jI' );
define( 'AUTH_SALT',        '`!.dCcB~ItKuR=x-zL*k`R8BL-94mxf&mnm]!GuwO)j1:7>Izg4Yc>loiK1.N:J8' );
define( 'SECURE_AUTH_SALT', '0EYL;<o+u/CtZj Z08-!bC-GS@yrG)q0Ldp-BkNen*Kd~>i)k-~I~03}S6.ul|Q6' );
define( 'LOGGED_IN_SALT',   'P4!F)3)yw4-$rH32AU>(t{N*kv7yK6QVU5z1w5mV-n0v!5y=x&$K`JsTK:7QR10L' );
define( 'NONCE_SALT',       'y<Jzd7)nK9.`JtuW]^_r#R*osAmvDzqe@6&kxsOu.iU)sTEUa4;uU F99o!?<3J6' );

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
