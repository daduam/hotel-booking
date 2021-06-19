<?php
try {
    include __DIR__ . "/../includes/autoload.php";

    $route = trim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

    $entryPoint = new \EntryPoint($route, $_SERVER['REQUEST_METHOD'], new \AppRoutes(), $_SERVER['HTTP_ACCEPT_ENCODING']);
    $entryPoint->run();
} catch (\PDOException $e) {
    $title = 'An error has occurred';

    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();

    include __DIR__ . '/../templates/layout.php';
}
