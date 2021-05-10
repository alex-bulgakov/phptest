<?php
if ($_REQUEST['login'] == 'alex' && $_REQUEST['password'] == '123') {
   echo 'Добро пожаловать';
} else {
    echo 'Неверный логин или пароль';
}
