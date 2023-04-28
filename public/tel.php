<?php
//Сбор данных из полей формы.
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$email = $_POST['email']; // Берём данные из input c атрибутом name="mail"
$message = $_POST['message']; // Берём данные из input c атрибутом name="mail"

$token = "5704756426:AAFTxQCIjFE7KQM1TqCHYpYfp1xugt1m2ns";
$chat_id = "-751420070"; // Тут пишем ID группы, куда будут отправляться сообщения
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

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>
