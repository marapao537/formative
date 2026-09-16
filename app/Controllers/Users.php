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
                    'username' => 'admin01',
                    'full_name' => 'Angela Ramos',
                    'role' => 'Administrator',
                ],
                [
                    'username' => 'manager01',
                    'full_name' => 'Marco Lim',
                    'role' => 'Manager',
                ],
                [
                    'username' => 'cashier01',
                    'full_name' => 'Nicole Flores',
                    'role' => 'Cashier',
                ],
                [
                    'username' => 'cashier02',
                    'full_name' => 'Paolo Torres',
                    'role' => 'Cashier',
                ],
                [
                    'username' => 'stock01',
                    'full_name' => 'Sofia Navarro',
                    'role' => 'Inventory Staff',
                ],
            ],
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }
}