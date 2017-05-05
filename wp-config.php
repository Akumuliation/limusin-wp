<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'limusin');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1111');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f!YI[KU!h.ac[XI}Iia[S~oh`Z%JGd:UXO$+*V}]Yohj&w9c%P/(]$1MySQ`3N7-');
define('SECURE_AUTH_KEY',  '/>eEXo.NzpF9I0Q1po%a5a-6EN4#Qiw~Bp)&`Z+][hM^.e)32$U8LWbSaeZ9W]hD');
define('LOGGED_IN_KEY',    '(Y1rEs0Fl7R&YuG ?vZP~+J(yH3}#+?xvsVW$Dn}Q3xpYyqE}mdwzfIYAG)&3abH');
define('NONCE_KEY',        'NDEZ8Y&-F-;;xKgcWPzT>NH9DOeb)Z<w@(gw^8$CMt>Bg{{&9qcqVY-:JYCHnL~V');
define('AUTH_SALT',        '>aRZXyKuwOfx.TOEmr)[PXv0jgR.y>i>8h<V`qz<OO)w0at2I)%W1O;y=k%YH8G~');
define('SECURE_AUTH_SALT', 'z1}.)rH+yJ8;CWD&)00=xf%h*NMG,l2;ydIHCvDn#:sI;`TXE h>6W;|  OQ[+&1');
define('LOGGED_IN_SALT',   'cA]{)uF$6E9AH)[gM^3Ue_(l.l3TzAet7B8?%R}_T*5s_ZWmIquOLEZVzF}i<nOg');
define('NONCE_SALT',       'f`FV0Fn-| zKtdKiVJjHDX^^1efkyiB]m$<I~I :|KS9w{EQ;4i-@inTPGN|,?+5');

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
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
