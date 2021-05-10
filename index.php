<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>

<body>
<?php if (!isset($_REQUEST['send'])) {?>
<form action="<?=$_SERVER['SCRIPT_NAME'] ?>">
    <input type="text" name="login">
    <br>
    <input type="password" name="password">
    <br>
    <button name="send">Войти</button>
    <br>
</form>
<?php } else {
    if ($_REQUEST['login'] == 'alex' && $_REQUEST['password'] == '123') {
        echo 'Добро пожаловать';
    } else {
        echo 'Неверный логин или пароль';
    }
} ?>
</body>

</html>