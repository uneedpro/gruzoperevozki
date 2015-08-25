<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'gruzoperevozki');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'nul1');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uf]|EqQoDFNWq?Zb!0?dNF%h_+GD{-!Jd|4$|+#yUWNBO=E4HqD++TX<9g:RBq+{');
define('SECURE_AUTH_KEY',  'G+$iY|{+x1|+1fqN$YXpae=y@79+_~J:qz>(utgzWc8EKj!j;|vp2n-9(Ei-10Dl');
define('LOGGED_IN_KEY',    'Q_X~e~wwO$@t~[.p3l;,P|j-L*h6&S%|av5/ko8!RWk8Q|s32&c?^vA|3 M48g<p');
define('NONCE_KEY',        'QTz7Jr-p7S$f|AyE~fcH%%e<OgY]]TV#/oym|bNc`.-D_TjpL||aeElU/1--NbJ8');
define('AUTH_SALT',        '7q4>/?AyMx-*K`x4)Bm:Tyi]@3b`:/GA+H0-2|+_8iii&-q:{4]*i8}[yn&YV:Dd');
define('SECURE_AUTH_SALT', 'Y8v4nV1:UOf:m}M(Yt 6 1tzX#p5*-c:jal(IrfYeSO,@70S?30:1]9[JlqA8{RI');
define('LOGGED_IN_SALT',   'a,|e+{[T|lzxVtX.`jnAzU-reZ|eWH$oRQoH3qH?j+!+JcL65*F>g:@F!l)ZK-f[');
define('NONCE_SALT',       'L4NlPp+~HOB-B+`Xaz~2Lu=Is6#c/4Fy!VK`pY-`K`vtlOV7*aQp[fB+oE@y=7h-');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
