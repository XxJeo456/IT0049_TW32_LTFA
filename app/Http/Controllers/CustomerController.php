<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Ana Reyes',     'email' => 'ana.reyes@example.com',  'phone' => '0917-111-2201', 'city' => 'Manila'],
            ['id' => 2, 'name' => 'Marco Santos',  'email' => 'marco.s@example.com',    'phone' => '0917-111-2202', 'city' => 'Quezon City'],
            ['id' => 3, 'name' => 'Lia Fernandez', 'email' => 'lia.f@example.com',      'phone' => '0917-111-2203', 'city' => 'Makati'],
            ['id' => 4, 'name' => 'Paolo Cruz',    'email' => 'paolo.cruz@example.com', 'phone' => '0917-111-2204', 'city' => 'Cebu'],
            ['id' => 5, 'name' => 'Isabel Tan',    'email' => 'isabel.tan@example.com', 'phone' => '0917-111-2205', 'city' => 'Davao'],
        ];

        return view('customers', compact('customers'));
    }
}