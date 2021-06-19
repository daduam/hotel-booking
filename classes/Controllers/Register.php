<?php

namespace Controllers;

class Register
{
    private $usersTable;

    public function __construct(\DatabaseTable $usersTable)
    {
        $this->usersTable = $usersTable;
    }

    public function registrationForm()
    {
        $title = 'Register an account - Redstone Hotel';

        return ['template' => 'register.php', 'title' => $title];
    }

    public function success()
    {
        $title = 'Success - Redstone Hotel';

        // TODO or log user in and navigate to dashboard
        return ['template' => 'register-success.php', 'title' => $title];
    }

    public function registerUser()
    {
        $user = $_POST['user'];

        if (empty($user['email'])) {
            return $this->formError($user, 'Email cannot be blank');
        } else if (filter_var($user['email'], FILTER_VALIDATE_EMAIL) == false) {
            return $this->formError($user, 'Invalid email address');
        } else {
            $user['email'] = strtolower($user['email']);

            if (count($this->usersTable->find('email', $user['email'])) > 0) {
                return $this->formError($user, 'An account with this email already exists');
            }
        }

        if (empty($user['password'])) {
            return $this->formError($user, 'Password field cannot be blank');
        }

        if (strcmp($user['password'], $user['repeat_password']) != 0) {
            return $this->formError($user, 'Passwords mismatch');
        }

        if (empty($user['name'])) {
            return $this->formError($user, 'Name field cannot be blank');
        }

        if (empty($user['phone_number'])) {
            return $this->formError($user, 'Phone number field cannot be blank');
        }

        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);
        unset($user['repeat_password']);

        $this->usersTable->save($user);

        header('Location: /register/success');
    }

    private function formError($user, $error)
    {
        return [
            'template' => 'register.php',
            'title' => 'Register an account - Redstone Hotel',
            'variables' => [
                'error' => $error,
                'user' => $user
            ]
        ];
    }
}
