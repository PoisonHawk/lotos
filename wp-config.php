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
define('DB_NAME', 'lotos');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'd4mU(%La?_(p8Cw^[gyy.AP+Y8ak<4oA%c]}VBOpPsu>0!oqGoq#x  1$y/Q&H>g');
define('SECURE_AUTH_KEY',  'wwY6Y)W6XfXJEy;UB/H@6=k^H{hR$^*JxO~@U2[+j$bWQRzQkPL}T|o)Vy)D>YVj');
define('LOGGED_IN_KEY',    'm^J!qe<Y]Z;x)6y7Om+yqz(-r7Rb!<9C@f?%rRPj1==;YQ8SBqJPukQES%N/=/5&');
define('NONCE_KEY',        '=D>j]vSM!L:Yyk%0ipHfN=+u.JF3c6ROSK#FwZkVS3;Uwt)_90V-~y&4P#%zRq]n');
define('AUTH_SALT',        'J;8l@o*1H;Hvznkc#Rj.I*vZ~7Jbmx<ZPw[vAOdNAHfFYk[AKm<i~(T{[@N#A3uZ');
define('SECURE_AUTH_SALT', '9dVQY%WUbr/ay~k@o9:ikJ!gK@H/Uy?;M4/^s9Faw@)8_s@bBW0a{iR50p]GE#>5');
define('LOGGED_IN_SALT',   '_O0Jq$m?D^23F~r_wyDu&A$g1o#pQr<q,oVU+[#(C^n(Fg=$(4O_Ze_i80p_;!9c');
define('NONCE_SALT',       'm,6j_0C=/TM6Ze`FheT&K1~jeyM;h:(/,w7]ub7GB^F4*;c@m$yOrPYokz:{1WDF');

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
