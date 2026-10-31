<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Admin Dela Cruz', 'username' => 'admin',     'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Rhea Lopez',      'username' => 'rlopez',    'role' => 'Manager',       'status' => 'Active'],
            ['id' => 3, 'name' => 'Jun Bautista',    'username' => 'jbautista', 'role' => 'Cashier',       'status' => 'Active'],
            ['id' => 4, 'name' => 'Carla Mendoza',   'username' => 'cmendoza',  'role' => 'Cashier',       'status' => 'Inactive'],
            ['id' => 5, 'name' => 'Ken Villanueva',  'username' => 'kvillan',   'role' => 'Inventory',     'status' => 'Active'],
        ];

        return view('users', compact('users'));
    }
}