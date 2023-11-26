<?php
require_once('db.php');
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['password'];
$repass = $_POST['repeatpassword'];


if(empty($login) || empty($email) || empty($pass) || empty($repass))
{
    echo "Заповніть усі поля!";
}
else
{
    if($pass!=$repass)
    {
        echo "Паролі не співпадаютть";
    }
    else
    {
        $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
       if($conn -> query($sql))
       {
        echo "Успіша реєстрація!";
       }
       else
       {
        echo "Помилка: " .$conn->error;
       }
    }
}


?>