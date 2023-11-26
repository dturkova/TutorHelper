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
            echo "Привіт, " .$row['login'];
        }
    }
    else
    {
        echo "Ви не зарєестровані.";
    }
}
?>