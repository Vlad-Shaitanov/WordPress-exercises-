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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost:8889' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xB-@#T#Aic00T`n;8c-S qpMXC.7qdI0$fg-}#SEf(mDQ<]HcVn?,j}iv3J fi#~' );
define( 'SECURE_AUTH_KEY',  '}y#tk8>&!O$5c3[|iAmK {+pKi7F1==6h.VielmbC?s9U9!?J{ RB8U=sg7[2Ro-' );
define( 'LOGGED_IN_KEY',    'du.#^_x!cFcRFW;-a_I+J$V!mk,c+4k=Yfo[[$aEpH=8u0f*p^=$w|:Ai{Z%f|bH' );
define( 'NONCE_KEY',        '.Qh2jtdiAv8]6q,nid~Ca({Rxzy/3{ny goKBJlLSbyC$yeOrlt8q-:#P$zNx9n[' );
define( 'AUTH_SALT',        '<e/Jy%t!NWp6]se &k1/YdDpo*ko^K/>Hj/ermm{-dX2.SGSjMknlU*=TIZ|+q<8' );
define( 'SECURE_AUTH_SALT', ']ZEtd$h~r7vzh1~m9#;v}mMkVH+jDlAXl~3A foOT<$`S~9Iduh3O~IK2s.J-EP$' );
define( 'LOGGED_IN_SALT',   'HewZ$qo{q49!qU8A~j$,#Gb9VWIF[q%=.)]T,gDUX2H1s}<f0+op0!=T$XG)=ss,' );
define( 'NONCE_SALT',       'H)+eZAMX_cTC%~l#W|>msv!krIn:hGGoM8BQfO8v0Yf)21p+1XWR<Wq;R:=ML[*P' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
