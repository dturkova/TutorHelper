<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['password'];

if(empty($login) || empty($pass)) 
{
    echo "Заповніть усі поля!";
}
else
{
    $sql = "    SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            echo "Вітаємо, " .$row['login'];
             // Перенаправляємо на нову сторінку після успішного входу
             header('Location: table.html');
             exit(); // Важливо викликати exit() після header(), щоб забезпечити коректну роботу перенаправлення
        }
    }
    else
    {
        echo "Ви не зарєестровані.";
    }
}
?>