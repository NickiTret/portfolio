<?php
// //Сбор данных из полей формы.
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$email = $_POST['email']; // Берём данные из input c атрибутом name="mail"
$message = $_POST['message']; // Берём данные из input c атрибутом name="mail"

// $token = "5704756426:AAFTxQCIjFE7KQM1TqCHYpYfp1xugt1m2ns";
// $chat_id = "-751420070"; // Тут пишем ID группы, куда будут отправляться сообщения

define('TELEGRAM_TOKEN', '5704756426:AAFTxQCIjFE7KQM1TqCHYpYfp1xugt1m2ns');
// ваш внутренний ID
define('TELEGRAM_CHATID', '-751420070');

$sitename = "nickdesignweb.ru"; //Указываем название сайта

$arr = array(

  'Заявка с сайта (заказ сайта): ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Email: ' => $email,
  'Сообщение' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

// токен бота
$ch = curl_init('https://api.telegram.org/bot'.TELEGRAM_TOKEN.'/sendMessage?chat_id='.TELEGRAM_CHATID.'&text='.$txt); // URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Не возвращать ответ
curl_exec($ch); // Делаем запрос
curl_close($ch); // Завершаем сеанс cURL

// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>
