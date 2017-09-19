<?php

    if(!isset($_POST['submitted'])) {
        $to = "v628966@yandex.ru";
        $subject = "Заявка с сайта";
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "Content-type: text/html charset=utf-8\r\n";
        $phone = htmlspecialchars($_POST["phone"]);
        $model = htmlspecialchars($_POST["model"]);
        $ear = htmlspecialchars($_POST["ear"]);
        $sostoyanie = htmlspecialchars($_POST["sostoyanie"]);
        $price = htmlspecialchars($_POST["price"]);
        $ip = $_SERVER['REMOTE_ADDR'];

        if (!$phone) {
            echo 'Произошла ошибка!<br />Заполните поле "Телефон"!';
            exit;
        }

        /*Создаем массив*/
        $arr = array(
            'Марка и модель' => $model,
            'Год выпуска' => $ear,
            'Состояние автомобиля' => $sostoyanie,
            'Желаемая цена' => $price,
            'Номер телефона' => $phone,
            'IP адрес' => $ip);

        /*Цикл по массиву (собираем сообщение) */
        foreach ($arr as $key => $value) {
            $message .= '<b>' . $key . '</b>: ' . $value . '<br />';
        }

        mail($to, $subject, $message, $headers);
        echo "Ваше сообщение успешно отправлено!";
        exit;
    } else {
        echo 'Так делать нельзя!!!';
    }

?>