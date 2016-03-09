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
define('DB_NAME', 'protech');

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
define('AUTH_KEY',         '+;/u3._C8{-Uw{1$r^o952vU_U]#f7|Tl&%Fns3j^*}RkA;|Ozg6#&16]=OPE1^7');
define('SECURE_AUTH_KEY',  'd3&]*m-`cn^17{V6Z~8vv#?%~N{^w.6|ljo6aekR&LE},$qGU9;%eA(n>6[Nt(bz');
define('LOGGED_IN_KEY',    '9!4J*lV3&5<}@ ]E.0f%9#[0wBlM% 3G_[*q0*-}^=.<0H0O3$J+~]e0C/fhX,15');
define('NONCE_KEY',        '-f^CU8aFL|?;is4fI~jSTVm|`g.d|P-<[:j2ep2Y~z8|ns:fFo_vl%te>uK:,W.d');
define('AUTH_SALT',        'D`]@_`lk2D-CFX89/Ollw+Q/9,?|ZcuV+S[]rKZ=1R6&hKAu*OQ%Tkj9/N|qIu0B');
define('SECURE_AUTH_SALT', 'k^btv~]HEt@9ago T]=Wk)FywGHtPpdnFk_]zB>qL.TktoWx@[$RI){AL,I]Rnsv');
define('LOGGED_IN_SALT',   '~S-T%U(/EIOd99V@~<o.wSrN}DjS-dIs+v^UIXT8b%4`iQXaRy3&}9^^]^^oYze+');
define('NONCE_SALT',       'e_=zP0EBN{xb4K|+(+ZM5Z_!k0o}*JHo<W0KH3nG?hKRV+/P4*c/t|y~;V#?CBWX');

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
