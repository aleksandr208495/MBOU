<?php
$Name=$_POST['name'];
$Surname=$_POST['surname'];
$Patronymic=$_POST['patronymic'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Text=$_POST['text'];

$subject="Тема: Обратная связь";
$mestext="Имя: $Name \n Фамилия: $Surname \n Отчество: $Patronymic \n e-mail: $Email\n телефон: $Phone \n Текст: $Text";
$headers ="Ответы формы";
mail($adress, $subject, $mestext, $headers);
$mainpage = "../contacts.html";
header("Refresh: 4; url='$mainpage'");
echo "<p align='center'><b>Сообщение отправлено.</b><br>
Через 4 сек. Вы будете перенаправлены
<a href='$mainpage'>на главную страницу</a></p>";
