<?php

class Auth
{
    private $userTable;
    private $emailColumn;
    private $passwordColumn;

    public function __construct(\DatabaseTable $userTable, $emailColumn, $passwordColumn)
    {
        session_start();
        $this->userTable = $userTable;
        $this->emailColumn = $emailColumn;
        $this->passwordColumn = $passwordColumn;
    }

    public function login($email, $password)
    {
        $user = $this->userTable->find($this->emailColumn, strtolower($email));

        if (!empty($user) && password_verify($password, $user[0]->{$this->passwordColumn})) {
            session_regenerate_id();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            return true;
        }

        return false;
    }
}
