<?php
class Account
{
    private $errorArray;

    public function __construct()
    {
        $this->errorArray = array();
    }
    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2)
    {
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmail($em, $em2);
        $this->validatePassword($pw, $pw2);
    }
    public function getError($error)
    {
        if (!in_array($error, $this->errorArray)) {
            $error = "";
        }
        return "<span class='errorMessage'>$error</span>";
    }
    private function validateUsername($un)
    {
        if (strlen($un) > 25 || strlen($un) <5) {
            array_push($this->errorArray, Constants::$usernameCharLen);
            return;
        }
        if (empty($this->errorArray)) {
            # insert into DB

            return true;
        } else {
            return false;
        }

        // TODO :check if username existis
    }
    private function validateFirstName($fn)
    {
        if (strlen($fn) > 25 || strlen($fn) < 2) {
            array_push($this->errorArray, Constants::$firstNameCharLen);
            return;
        }
    }
    private function validateLastName($ln)
    {
        if (strlen($ln) > 25 || strlen($ln) < 2) {
            array_push($this->errorArray, Constants::$lastNameCharLen);
            return;
        }
    }
    private function validateEmail($em, $em2)
    {
        if ($em != $em2) {
            array_push($this->errorArray, Constants::$emailDoNotMatch);
            return;
        }
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, Constants::$invalidEmail);
            return;
        }
        // TODO:: Check that username hasn't already in database
    }
    private function validatePassword($pw, $pw2)
    {
        if ($pw != $pw2) {
            array_push($this->errorArray, "Your password don't matched");
            return;
        }
        if (preg_match('/[^A-Za-z0-9]/', $pw)) {
            array_push($this->errorArray, "Password can only contain number and letter");
        }

        if (strlen($pw) > 30 || strlen($pw) < 5) {
            array_push($this->errorArray, "Your Password must be between 5 or 30 charecter");
            return;
        }
    }
}
