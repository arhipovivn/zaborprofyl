<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'zaborpro_root' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'zaborpro_root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'IeCxa,p+iLC{' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}5telB8>-MLS-2K](b|L-js%wz`9:mOnHEYnC,Aq@M5dC^g9E8&Z;EXO=q$c,MXL' );
define( 'SECURE_AUTH_KEY',  'jmTU:p}x0+_}ts=Y#f-3nEH7A }$*k:7B8xF*{XJ*Zq!5@U@Ac:A0k3aWC^++U.G' );
define( 'LOGGED_IN_KEY',    '$5(6$vpCzb}]i^8MH?Xm#zvY0csbv?2;Ee0XPU1$1)[<!b_ 5#)fv]p6%bA3#Rk@' );
define( 'NONCE_KEY',        'J=+!*UB=1FSJ>e44&$$5rEVW4YvU}@rUMS6u$&Hb{UMLw}+~ml!DnqtXaaBO;wh0' );
define( 'AUTH_SALT',        'mS>8HdB(1TwZvMc|N<YU.4T(_3%gjrALsb,u6TP/@Q0KP{zdlZ)}{;/+5XU+Jmh1' );
define( 'SECURE_AUTH_SALT', 'NEDJHR?~i>Xl=P(p<n)vY5mo)3v-TJh1QB2NE WW&>^/AC+H:]_/d4s/tl2:(ScH' );
define( 'LOGGED_IN_SALT',   'G:|LNO]22|${yoeF>;yQ:&u3`~z`[X*Q*YGTBgrF$<)rz-kuV&/(~%49sqvx0bw+' );
define( 'NONCE_SALT',       'GBAoB(cH!jAD2[8H]!oCFj}zEKx#1O/-S4J1A/>UMJJ5kB72=]@XTZvSY1n6Gp%V' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_root';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
