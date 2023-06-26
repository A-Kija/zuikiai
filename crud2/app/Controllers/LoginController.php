<?php
namespace Colors\Controllers;

use Colors\App;
use Colors\FileWriter;
use Colors\Messages;

class LoginController
{

    public function index()
    {
        return App::view('auth\index', [
            'pageTitle' => 'Login',
            'inLogin' => true
        ]);
    }

    public function login(array $data)
    {
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';

        $users = (new FileWriter('users'))->showAll();

        foreach ($users as $user) {
            if ($user['email'] == $email && $user['password'] == md5($password)) {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $user['name'];
                Messages::addMessage('success', 'You are logged in');
                header('Location: /');
                die;
            }
        }

        Messages::addMessage('danger', 'Wrong email or password');
        header('Location: /login');
        die;
    }

    public function logout()
    {
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        Messages::addMessage('success', 'You are logged out');
        header('Location: /');
        exit;
    }
}