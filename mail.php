<?php
if($_GET['name'] && $_GET['phone']){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'egor.dubinskii@gmail.com'; //diana.rogalevich@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_GET['name'].'</p>
                        <p>Телефон: '.$_GET['phone'].'</p>
                        <p>Город: '.$_GET['city'].'</p>
                        <p>Сообщение: '.$_GET['text'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
	$res = mail($to, $subject, $message, $headers) == true ? 'ok' : 'error';

echo json_encode(['status' => $res]);
}
?>