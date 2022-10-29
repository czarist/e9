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
define( 'DB_NAME', 'e9' );

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
define( 'AUTH_KEY',         'X*@B5ZAc4H~L4g{yMUDT MJ*d#$wA@``?j^on7lR>^-+><MkpOJe$]OQA^o=Eh&i' );
define( 'SECURE_AUTH_KEY',  'bFh&y|wEPUwEz*IQ-Rgra0/Z_4?Xg#w,_eALx%9dvU>E LbbRG-JEs_ii|er&%3+' );
define( 'LOGGED_IN_KEY',    'l1kFqh@I0Z.}~LE`/:,+O)=v.uE=7I}wUR#U{`2nXnyfn|T#R+QoxiS%d1;%6^I!' );
define( 'NONCE_KEY',        'f(u1eg30!$;9k;^tC*GE?Yy<BDvE,K[N{i=%9-sp123iFtb$2V4W&Xc1jNq6w#&X' );
define( 'AUTH_SALT',        'NY1wB,bHt!l|xFusI+I^bCa&&f3;f<u-!Pkhaa|X; ZQXHfiavy|JzKa>Y>{TXGx' );
define( 'SECURE_AUTH_SALT', 'UzCl|ViD.`MRh5|d2N+<u ^(^OG9g9keZ`daqx[mradJ>Os/WQv]O4&RYP-oeZtu' );
define( 'LOGGED_IN_SALT',   'q#edk^Tr-N!WxU>TFj/Y;|hMh@0TsESG>CL|Tzl,sE=wJ{,U+#j9=QHvVZs`N},A' );
define( 'NONCE_SALT',       '-?Vx`KOC-3Kl!MX|IGV607A s+@)iJ8-~3wI:Y7M.MlRh}jL}i-8y0m&=!$7t1{F' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ons_';

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
