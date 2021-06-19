<?php

class AppRoutes implements Routes
{
    private $usersTable;
    private $auth;

    public function __construct()
    {
        include __DIR__ . '/../includes/DatabaseConnection.php';

        $this->usersTable = new DatabaseTable($pdo, 'user', 'id', '\Entity\User');
        $this->auth = new Auth($this->usersTable, 'email', 'password');
    }

    public function getRoutes(): array
    {
        $homeController = new Controllers\Home();
        $aboutController = new Controllers\About();
        $roomsController = new Controllers\Rooms();
        $adminController = new Controllers\Admin();
        $loginController = new Controllers\Login($this->auth);
        $registerController = new Controllers\Register($this->usersTable);
        // $publicController = new Controllers\Public();

        $routes = [
            '' => [
                'GET' => [
                    'controller' => $homeController,
                    'action' => 'home'
                ]
            ],
            'about' => [
                'GET' => [
                    'controller' => $aboutController,
                    'action' => 'about'
                ]
            ],
            'rooms' => [
                'GET' => [
                    'controller' => $roomsController,
                    'action' => 'rooms'
                ]
            ],
            'admin/login' => [
                'GET' => [
                    'controller' => $adminController,
                    'action' => 'login'
                ]
            ],
            'login' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'loginForm'
                ],
                'POST' => [
                    'controller' => $loginController,
                    'action' => 'processLogin'
                ]
            ],
            'login/success' => [
                // slash or hypen problems
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'success'
                ]
            ],
            'register' => [
                'GET' => [
                    'controller' => $registerController,
                    'action' => 'registrationForm'
                ],
                'POST' => [
                    'controller' => $registerController,
                    'action' => 'registerUser'
                ]
            ],
            'register/success' => [
                'GET' => [
                    'controller' => $registerController,
                    'action' => 'success'
                ]
            ],
        ];

        return $routes;
    }
}
