<?php
function sanitizeFormUsername($input)
{
    $input = strip_tags($input);
    $input = str_replace(" ", "", $input);
    return $input;
}
function sanitizeFormPassword($input)
{
    $input = strip_tags($input);
    return $input;
}
function sanitizeFormString($input)
{
    $input = strip_tags($input);
    $input = str_replace(" ", "", $input);
    $input = ucfirst(strtolower($input));
    return $input;
}

function validateUsername($un)
{
}
function validateFirstName($fn)
{
}
function validateLastName($ln)
{
}
function validateEmail($em, $em2)
{
}
function validatePassword($pw, $pw2)
{
}



if (isset($_POST['registerButton'])) {
    // Registration
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormUsername($_POST['email']);
    $email2 = sanitizeFormUsername($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    validateUsername($username);
    validateFirstName($firstName);
    validateLastName($lastName);
    validateEmail($email, $email2);
    validatePassword($password, $password2);
}
