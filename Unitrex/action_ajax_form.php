<?php

if (isset($_POST["name"]) && isset($_POST["phonenumber"])) {

    // Формируем массив для JSON ответа
    $result = array(
        'name' => $_POST["first_name"],
        'phonenumber' => $_POST["phone_number"]
    );

    // Переводим массив в JSON
    echo json_encode($result);
}

?>