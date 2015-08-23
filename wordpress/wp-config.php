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
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'thinker');

/** nome do host do MySQL */
define('DB_HOST', 'localhost:3306');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2-G/gwtq_JT_y~V,u5PpkJekb%yr++w(W9Uc!t?}QpGiu5F|g8s9grUl+J;4|ou8');
define('SECURE_AUTH_KEY',  'O.mlyr}I;;V,jb9,|(sn#Z^d@O/0f-%(=}#WJ~=:%HN/VT]AwiiBP5lM6>CG+63~');
define('LOGGED_IN_KEY',    '!`l(RtZpeN=Jvr_1,[uQ{7aD8N|SfJIVWyP+PWK3|.*xn/n$-X6H|H[0+ENY+7}=');
define('NONCE_KEY',        'd/%-a/[X>X*&6mnh%W#1*u0-ZU{y0hJv=r |]c0S3ZhDmp4>S.~,|qUi+-I(YAvk');
define('AUTH_SALT',        '}RjU7T?yT;1,EDnOl!@ R--=XwX3]wx+z}73*n+uU5@Iif<|Vz`/`p/iq?ev1 q3');
define('SECURE_AUTH_SALT', 'Z?)fn47*A;+^2lu[6UR5b}Q/.?G? x4rv9rv{(fs[A]dlB-:vrB*v;Q`.o3[08j{');
define('LOGGED_IN_SALT',   '4~I|n&uAzr@0m4&R1`X=qi+>ISctOq>mI>]<Hb`MF-{bi1OQLh=lDr:|kZ*[X@Ul');
define('NONCE_SALT',       'HXLFPa7/4g9U1U}SZ$-$P=xy1|_2=`{vxj0xVLe-3@LM6GM4o/=9bxT}Qmww+zLp');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = '_';


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
