<?php
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, существуют ли значения полей
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        // Присваиваем значения переменным
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        // Отправляем письмо на вашу электронную почту
        $to = "br4unkirill@yandex.ru";
        $subject = "Новое сообщение с сайта";
        $body = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";
        $headers = "From: $email";
        
        // Пытаемся отправить письмо
        if (mail($to, $subject, $body, $headers)) {
            echo "<p>Сообщение успешно отправлено. Спасибо, $name, за ваше сообщение!</p>";
        } else {
            echo "<p>Что-то пошло не так. Попробуйте отправить сообщение еще раз.</p>";
        }
    } else {
        echo "<p>Пожалуйста, заполните все поля формы.</p>";
    }
}
?>
