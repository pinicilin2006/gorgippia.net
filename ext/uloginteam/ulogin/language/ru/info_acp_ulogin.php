<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_ULOGIN'                => 'uLogin',
	'ACP_ULOGIN_EXPLAIN'        => 'Настройки uLogin',
	'ACP_ULOGIN_TITLE'          => 'uLogin',
	'ACP_ULOGIN_TITLE_EXPLAIN'  => '
<p><a href="http://ulogin.ru" target="_blank">uLogin</a> — это инструмент, который позволяет пользователям получить единый доступ к различным Интернет-сервисам без необходимости повторной регистрации,
	а владельцам сайтов — получить дополнительный приток клиентов из социальных сетей и популярных порталов (Google, Яндекс, Mail.ru, ВКонтакте, Facebook и др.)</p>

<p>Чтобы создать свой виджет для входа на сайт достаточно зайти в Личный Кабинет (ЛК) на сайте <a href="http://ulogin.ru/lk.php" target="_blank">uLogin</a>,
	добавить свой сайт к списку "Мои сайты" и на вкладке "Виджеты" добавить новый виджет. Вы можете редактировать свой виджет самостоятельно.</p>

<p><b style="color: red;">Важно! </b>Для успешной работы плагина необходимо включить в обязательных полях профиля поле <b>Еmail</b> в Личном кабинете uLogin.</p><br/>

<p>Здесь Вы можете указать значение параметра "<b>uLogin ID</b>" Ваших виджетов, а также указать группу для новых, регистрирующихся через uLogin, пользователей.</p>',
	'ACP_ULOGIN_ID'             => 'Значение поля uLogin ID',
	'ACP_ULOGIN_GROUP'          => 'Группа пользователей',
	'ULOGIN_ID1'                => 'Значение поля uLogin ID №1',
	'ULOGIN_ID1_EXPLAIN'        => 'Идентификатор виджета в шапке форума. Пустое поле - виджет по умолчанию.',
	'ULOGIN_ID2'                => 'Значение поля uLogin ID №2',
	'ULOGIN_ID2_EXPLAIN'        => 'Идентификатор виджета на странице регистрации и в личном кабинете. Пустое поле - виджет по умолчанию.',
	'ULOGIN_GROUP_ID'           => 'Группа пользователей',
	'ULOGIN_GROUP_ID_EXPLAIN'   => 'Группа для новых пользователей, регистрирующихся с помощью uLogin',
	'ULOGIN_LABEL_UCP'          => 'Войти через:',
));

