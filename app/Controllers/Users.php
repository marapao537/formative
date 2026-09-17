<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Accounts',

            'users' => [
                [
                    'username' => 'admin1',
                    'full_name' => 'Aldrin Brylle Marapao',
                    'role' => 'Admin',
                ],
                [
                    'username' => 'manager1',
                    'full_name' => 'Kohei Nishimura',
                    'role' => 'Manager',
                ],
                [
                    'username' => 'employee1',
                    'full_name' => 'Martin Gazo',
                    'role' => 'Employee',
                ],
                [
                    'username' => 'employee2',
                    'full_name' => 'Mir Kim',
                    'role' => 'Employee',
                ],
                [
                    'username' => 'employee3',
                    'full_name' => 'Andrei Adarlo',
                    'role' => 'Employee',
                ],
            ],
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }
}