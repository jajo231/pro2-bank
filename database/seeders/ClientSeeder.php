<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Pongase',
                'first_name' => 'John Ivan',
                'middle_name' => 'Sumipo',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-06-09',
                'phone_number' => '09303339709',
                'email' => 'sumipo231@gmail.com',
                'initial_deposit' => '20000',
            ],

        ];

        foreach($cl as $c) {
            Client::create($c);
        }

    }
}
