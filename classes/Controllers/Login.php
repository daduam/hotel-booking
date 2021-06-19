<?php

namespace Controllers;

class Login
{
    private $auth;

    public function __construct(\Auth $auth)
    {
        $this->auth = $auth;
    }

    public function loginForm()
    {
        $title = 'Login - Redstone Hotel';

        return [
            'template' => 'login.php',
            'title' => $title
        ];
    }

    public function processLogin()
    {
        if ($this->auth->login($_POST['email'], $_POST['password'])) {
            // TODO send user to dashboard
            header('Location: /login/success');
        } else {
            $title = 'Login - Redstone Hotel';

            return [
                'template' => 'login.php',
                'title' => $title,
                'variables' => [
                    'error' => 'Invalid email/password',
                    'email' => $_POST['email'],
                    'password' => $_POST['password']
                ]
            ];
        }
    }

    public function success()
    {
        $title = 'Successful login - Redstone Hotel';

        return [
            'template' => 'login-success.php',
            'title' => $title
        ];
    }
}
