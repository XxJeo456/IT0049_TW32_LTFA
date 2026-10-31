<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Ana Reyes',     'email' => 'ana.reyes@example.com',  'phone' => '0917-111-2201'],
            ['full_name' => 'Marco Santos',  'email' => 'marco.s@example.com',    'phone' => '0917-111-2202'],
            ['full_name' => 'Lia Fernandez', 'email' => 'lia.f@example.com',      'phone' => '0917-111-2203'],
            ['full_name' => 'Paolo Cruz',    'email' => 'paolo.cruz@example.com', 'phone' => '0917-111-2204'],
            ['full_name' => 'Isabel Tan',    'email' => 'isabel.tan@example.com', 'phone' => '0917-111-2205'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}