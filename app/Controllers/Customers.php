<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Customer Accounts',

            'customers' => [
                [
                    'full_name' => 'Hunter Feuerstein',
                    'email' => 'hunterfeuerstein@gmail.com',
                    'phone' => '09xxxxxxxxx',
                ],
                [
                    'full_name' => 'Miggy Hizon',
                    'email' => 'miggyhizon@gmail.com',
                    'phone' => '09xxxxxxxxx',
                ],
                [
                    'full_name' => 'Jakub Dolejs',
                    'email' => 'kubdol@gmail.com',
                    'phone' => '09xxxxxxxxx',
                ],
                [
                    'full_name' => 'Kris Toledo',
                    'email' => 'kristoledo@gmail.com',
                    'phone' => '09xxxxxxxxx',
                ],
                [
                    'full_name' => 'Zeus Catubay',
                    'email' => 'zeuscatub@gmail.com',
                    'phone' => '09xxxxxxxxx',
                ],
            ],
        ];

        return view('templates/header', $data)
            . view('customers/index', $data)
            . view('templates/footer');
    }
}