<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'rodrigo_maciel');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>E:(wQwFZZ6cs$XgQL>o[ZKBy@S*D*C*+`-JdP|/7.WebQzgo[<FcmLX;RHUKx+|');
define('SECURE_AUTH_KEY',  '>y!{S,QyEPkTy(yj^(Bm.fdvVL8&AUU.{ah5=++W>Yq7rYP@85raW7F,lCpxlV,2');
define('LOGGED_IN_KEY',    'S3pgEkf_W<XT:0PVT{#*+bH#^hWn|ggd>=:2*+|m=/auKDc>y0]|aUv@v2R3@f{:');
define('NONCE_KEY',        '`/*B Gvm@|7ev%Iktvc{]|{?E_we5/)P;+XZ e8sA$H-zC)oN$h%lGyEl1!]~BS ');
define('AUTH_SALT',        'f&-UNDKAcJeK3|_XSn<S+N-LZ|M=.-[z^G@.|G,T7[-de^+3-Y]hFr|Y^1:G7hAl');
define('SECURE_AUTH_SALT', '>*-GDNc).3@+ZhJ9S|g==i#~Q;3f(#=c1sNK;-hN%Kb<re@&H@{8wQm*RaN*LW&B');
define('LOGGED_IN_SALT',   'Kw.}KX>35Zro=rRAr$*#~UL{1-Iu^dqz~.(r*[Fq+F7ZlY)oFhrj!w%##934&1Vg');
define('NONCE_SALT',       'Irq`F;GEt+n7TV|SWkCnX>L!gNdv*p#^(}zu&s0Veg|=C5X6/dY| ,DO=/W&cL->');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'rm_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
