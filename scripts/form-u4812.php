<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.3.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Заказать часы',
	'heading' => 'Отправка новой формы',
	'success_redirect' => '%d0%b4%d0%be%d0%b1%d0%b0%d0%b2%d1%8c%d1%82%d0%b5-%d1%82%d0%be%d0%b2%d0%b0%d1%80-%d1%81%d0%be-%d0%ba%d0%b8%d0%b4%d0%ba%d0%be%d0%b9.html',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_reCAPTCHA2_private_key' => 'Недействительный закрытый ключ reCAPTCHA 2.0.',
		'invalid_reCAPTCHA2_server_response' => 'Недействительный ответ сервера reCAPTCHA 2.0.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'support@sbwkid.ru',
		'to' => 'support@sbwkid.ru'
	),
	'fields' => array(
		'custom_U4814' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Имя:',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Имя:\' не может быть пустым.'
			)
		),
		'custom_U8928' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Номер телефона:',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Номер телефона:\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
echo "<script>parent.location='../upsell.php?name=".$_POST['custom_U4814']."&phone=".$_POST['custom_U8928']."'</script>";
?>
