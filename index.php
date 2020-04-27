<?php

function validateEmail($email)
{
    $patient = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($patient, $email)) {
        echo ("Email true "."<br>");
    } else {
        echo("Email fail". "<br>");
    }
}
validateEmail('a@gmail.com');
validateEmail('@gmail.com');