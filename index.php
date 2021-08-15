<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>

    <a href="logout.php">Выйти</a>
    <h1> Титульная страница для зарегистрированных пользователей</h1>
    <br>
    Привет, <?php echo $user_data['user_name']; ?>
    <br>
<?php 
    error_reporting(E_ALL);
    ini_set('display_error', 'on');

    $xml = simplexml_load_file('tab.xml');
    $data=$xml->User;
    foreach ($data as $showname){
       
            echo $showname;
        
    }
    //echo $data
    //var_dump($xml);
    ?>

</body>
</html>