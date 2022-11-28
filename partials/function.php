<?php
function randomPassword($password_length)
{
    $charapter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $charapterLength = strlen($charapter) - 1;
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, $charapterLength);
        $pass[] = $charapter[$n];
    }
    return implode($pass);
}
