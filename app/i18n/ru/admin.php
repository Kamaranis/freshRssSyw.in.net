<?php

return array(
	'auth' => array(
		'allow_anonymous' => 'Разрешить анонимное чтение статей пользователя по умолчанию (%s)',
		'allow_anonymous_refresh' => 'Разрешить анонимную актуализацию статей',
		'api_enabled' => 'Позволить <abbr>API</abbr> доступ <small>(необходимо для мобильных приложений)</small>',
		'form' => 'Веб-форма (традиционный, необходим JavaScript)',
		'http' => 'HTTP (для опытных пользователей с HTTPS)',
		'none' => 'Без аутентификации (небезопасно)',
		'title' => 'Аутентификации',
		'title_reset' => 'Сброс аутентицикации',
		'token' => 'Токен аутентификации',
		'token_help' => 'Разрешает доступ к RSS-лентам пользователя по умолчанию без аутентификации:',
		'type' => 'Способ аутентификации',
		'unsafe_autologin' => 'Разрешить небезопасный автоматический вход с использованием следующего формата: ',
	),
	'check_install' => array(
		'cache' => array(
			'nok' => 'Проверьте права доступа к папке <em>./data/cache</em>. Веб-сервер должен иметь право на запись в эту папку',
			'ok' => 'Права на <em>./data/cache</em> в порядке.',
		),
		'categories' => array(
			'nok' => 'Таблица категорий настроена неправильно.',
			'ok' => 'Таблица категорий настроена правильно.',
		),
		'connection' => array(
			'nok' => 'Подключение к базе данных не может быть установлено.',
			'ok' => 'Подключение к базе данных в порядке.',
		),
		'ctype' => array(
			'nok' => 'У вас не установлена библиотека для проверки типов символов (php-ctype).',
			'ok' => 'У вас не установлена библиотека для проверки типов символов (ctype).',
		),
		'curl' => array(
			'nok' => 'У вас не установлено расширение cURL (пакет php-curl).',
			'ok' => 'У вас установлено расширение cURL.',
		),
		'data' => array(
			'nok' => 'Проверьте права доступа к папке <em>./data</em> . Веб-сервер должен иметь право на запись в эту папку.',
			'ok' => 'Права на <em>./data/</em> в порядке.',
		),
		'database' => 'Установка базы данных',
		'dom' => array(
			'nok' => 'У вас не установлена библиотека для просмотра DOM (пакет php-xml).',
			'ok' => 'У вас установлена библиотека для просмотра DOM.',
		),
		'entries' => array(
			'nok' => 'Таблица статей (entry) неправильно настроена.',
			'ok' => 'Таблица статей (entry) настроена правильно.',
		),
		'favicons' => array(
			'nok' => 'Проверьте права доступа к папке <em>./data/favicons</em> . Веб-сервер должен иметь право на запись в эту папку.',
			'ok' => 'Права на папку значков в порядке.',
		),
		'feeds' => array(
			'nok' => 'Таблица подписок (feed) неправильно настроена.',
			'ok' => 'Таблица подписок (feed) настроена правильно.',
		),
		'fileinfo' => array(
			'nok' => 'У вас не установлено расширение PHP fileinfo (пакет fileinfo).',
			'ok' => 'У вас установлено расширение fileinfo.',
		),
		'files' => 'Установка файлов',
		'json' => array(
			'nok' => 'У вас не установлена библиотека для работы с JSON (пакет php-json).',
			'ok' => 'У вас установлена библиотека для работы с JSON.',
		),
		'mbstring' => array(
			'nok' => 'У вас не установлена рекомендуемая библиотека mbstring для Unicode.',
			'ok' => 'У вас установлена рекомендуемая библиотека mbstring для Unicode.',
		),
		'pcre' => array(
			'nok' => 'У вас не установлена необходимая библиотека для работы с регулярными выражениями (php-pcre).',
			'ok' => 'У вас установлена необходимая библиотека для работы с регулярными выражениями (PCRE).',
		),
		'pdo' => array(
			'nok' => 'У вас не установлен PDO или один из необходимых драйверов (pdo_mysql, pdo_sqlite, pdo_pgsql).',
			'ok' => 'У вас установлен PDO и как минимум один из поддерживаемых драйверов (pdo_mysql, pdo_sqlite, pdo_pgsql).',
		),
		'php' => array(
			'_' => 'Инсталляция PHP',
			'nok' => 'У вас установлен PHP версии %s, но FreshRSS необходима версия не ниже %s.',
			'ok' => 'У вас установлен PHP версии %s, который совместим с FreshRSS.',
		),
		'tables' => array(
			'nok' => 'В базе данных отсуствует одна или больше таблица.',
			'ok' => 'Все таблицы есть в базе данных.',
		),
		'title' => 'Проверка установки и настройки',
		'tokens' => array(
			'nok' => 'Проверьте права доступа к папке <em>./data/tokens</em> . Веб-сервер должен иметь право на запись в эту папку.',
			'ok' => 'Права на папку tokens в порядке.',
		),
		'users' => array(
			'nok' => 'Проверьте права доступа к папке <em>./data/users</em> . Веб-сервер должен иметь право на запись в эту папку.',
			'ok' => 'Права на папку users в порядке.',
		),
		'zip' => array(
			'nok' => 'У вас не установлено расширение ZIP (пакет php-zip).',
			'ok' => 'У вас установлено расширение ZIP.',
		),
	),
	'extensions' => array(
		'author' => 'Автор',
		'community' => 'Доступные расширения сообщества',
		'description' => 'Описание',
		'disabled' => 'Отключены',
		'empty_list' => 'Нет установленных расширений',
		'enabled' => 'Включены',
		'latest' => 'Установлено',
		'name' => 'Название',
		'no_configure_view' => 'Это расширение не требует настройки.',
		'system' => array(
			'_' => 'Системные расширения',
			'no_rights' => 'Системное расширение (у вас нет необходимых разрешений)',
		),
		'title' => 'Расширения',
		'update' => 'Доступно обновление',
		'user' => 'Расширения пользователя',
		'version' => 'Версия',
	),
	'stats' => array(
		'_' => 'Статистика',
		'all_feeds' => 'Все подписки',
		'category' => 'Категория',
		'entry_count' => 'Количество статей',
		'entry_per_category' => 'Статей в категории',
		'entry_per_day' => 'Статей за день (за последние 30 дней)',
		'entry_per_day_of_week' => 'За неделю (в среднем - %.2f сообщений)',
		'entry_per_hour' => 'За час (в среднем - %.2f сообщений)',
		'entry_per_month' => 'За месяц (в среднем - %.2f сообщений)',
		'entry_repartition' => 'Перерасределение статей',
		'feed' => 'Лента',
		'feed_per_category' => 'Лент в категории',
		'idle' => 'Неактивные ленты',
		'main' => 'Основная статистика',
		'main_stream' => 'Основной поток',
		'menu' => array(
			'idle' => 'Неактивные ленты',
			'main' => 'Основная статистика',
			'repartition' => 'Перерасределение статей',
		),
		'no_idle' => 'Нет неактивных лент!',
		'number_entries' => 'статей: %d',
		'percent_of_total' => '%% от всего',
		'repartition' => 'Перераспределение статей',
		'status_favorites' => 'Избранное',
		'status_read' => 'Читать',
		'status_total' => 'Всего',
		'status_unread' => 'Не прочитано',
		'title' => 'Статистика',
		'top_feed' => '10 лучших лент',
	),
	'system' => array(
		'_' => 'Системные настройки',
		'auto-update-url' => 'URL сервера для автоматического обновления',
		'cookie-duration' => array(
			'help' => 'в секундах',
			'number' => 'Оставаться в системе на протяжении',
		),
		'force_email_validation' => 'Обязать подтверждать адрес электронной почты',
		'instance-name' => 'Название экземпляра',
		'max-categories' => 'Максимальное количество категорий на пользователя',
		'max-feeds' => 'Максимальное количество лент на пользователя',
		'registration' => array(
			'help' => '0 означает неограниченное количество пользователей',
			'number' => 'Максимальное количество пользователей',
		),
	),
	'update' => array(
		'_' => 'Обновление системы',
		'apply' => 'Применить',
		'check' => 'Проверить обновления',
		'current_version' => 'Ваша текущая версия FreshRSS: %s.',
		'last' => 'Последняя проверка: %s',
		'none' => 'Нет обновлений',
		'title' => 'Обновить систему',
	),
	'user' => array(
		'admin' => 'Администратор',
		'article_count' => 'Статей',
		'articles_and_size' => '%s статей (%s)',
		'back_to_manage' => '← Вернуться к списку пользователей',
		'create' => 'Создать нового пользователя',
		'database_size' => 'Размер базы данных',
		'delete_users' => 'Удалить пользователя',
		'email' => 'Адрес электронной почты',
		'enabled' => 'Включён',
		'feed_count' => 'Лент',
		'is_admin' => 'Является администратором',
		'language' => 'Язык',
		'last_user_activity' => 'Последняя активность',
		'list' => 'Список пользователей',
		'number' => 'Имеется %d созданный аккаунт',
		'numbers' => 'Имеется %d созданных аккаунтов',
		'password_form' => 'Пароль<br /><small>(для входа через веб-форму)</small>',
		'password_format' => 'Не менее 7 символов',
		'selected' => 'Выбранный пользователь',
		'title' => 'Управление пользователями',
		'update_users' => 'Изменить пользователя',
		'user_list' => 'Список пользователей',
		'username' => 'Имя пользователя',
		'users' => 'Пользователи',
	),
);