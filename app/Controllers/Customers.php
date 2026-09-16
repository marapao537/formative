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
                    'full_name' => 'Andrea Santos',
                    'email' => 'andrea.santos@example.com',
                    'phone' => '0917-123-4567',
                ],
                [
                    'full_name' => 'Miguel Reyes',
                    'email' => 'miguel.reyes@example.com',
                    'phone' => '0918-234-5678',
                ],
                [
                    'full_name' => 'Bianca Cruz',
                    'email' => 'bianca.cruz@example.com',
                    'phone' => '0919-345-6789',
                ],
                [
                    'full_name' => 'Carlo Mendoza',
                    'email' => 'carlo.mendoza@example.com',
                    'phone' => '0920-456-7890',
                ],
                [
                    'full_name' => 'Denise Garcia',
                    'email' => 'denise.garcia@example.com',
                    'phone' => '0921-567-8901',
                ],
            ],
        ];

        return view('templates/header', $data)
            . view('customers/index', $data)
            . view('templates/footer');
    }
}