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
        // Client::factory(20)->create();
        $cl = [
            // [
            //     'last_name' => 'Pongase',
            //     'first_name' => 'John Ivan',
            //     'middle_name' => 'Sumipo',
            //     'address' => 'Tinangnan, Tubigon, Bohol',
            //     'birth_date' => '2001-06-09',
            //     'phone_number' => '09303339709',
            //     'email' => 'sumipo231@gmail.com',
            //     'initial_deposit' => '20000',
            // ],
            // [
            //     'last_name' => 'Salutan',
            //     'first_name' => 'John Emanuelle',
            //     'middle_name' => 'Resaba',
            //     'address' => 'Bunacan, Tubigon, Bohol',
            //     'birth_date' => '2002-05-01',
            //     'phone_number' => '09303339708',
            //     'email' => 'salutanemanuelle@gmail.com',
            //     'initial_deposit' => '20000',
            // ],
            // [
            //     'last_name' => 'Batausa',
            //     'first_name' => 'Nathaniel',
            //     'middle_name' => 'Roba',
            //     'address' => 'Tinangnan, Tubigon, Bohol',
            //     'birth_date' => '2002-11-16',
            //     'phone_number' => '09303339707',
            //     'email' => 'nathanielbatausafgo@gmail.com',
            //     'initial_deposit' => '20000',
            // ],
            // [
            //     'last_name' => 'Montanez',
            //     'first_name' => 'Kien',
            //     'middle_name' => 'Juanich',
            //     'address' => 'Macaas, Tubigon, Bohol',
            //     'birth_date' => '2002-07-18',
            //     'phone_number' => '09303339706',
            //     'email' => 'montanezkien45@gmail.com',
            //     'initial_deposit' => '20000',
            // ],
            [
                'last_name' => 'Client',
                'first_name' => 'First',
                'middle_name' => 'hehe',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-06-09',
                'phone_number' => '09303339709',
                'email' => 'vistalcj1@gmail.com',
                'initial_deposit' => '20000',
            ],
            [
                'last_name' => 'Client',
                'first_name' => 'Fourth',
                'middle_name' => 'hehe',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-06-09',
                'phone_number' => '09303339709',
                'email' => 'johnxsuelto001@gmail.com',
                'initial_deposit' => '20000',
            ],
            [
                'last_name' => 'Client',
                'first_name' => 'Fifth',
                'middle_name' => 'hehe',
                'address' => 'Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-06-09',
                'phone_number' => '09303339709',
                'email' => 'acabatresha@gmail.com',
                'initial_deposit' => '20000',
            ],
            // [
            //     'last_name' => 'Client',
            //     'first_name' => 'Fifth',
            //     'middle_name' => 'hehe',
            //     'address' => 'Tinangnan, Tubigon, Bohol',
            //     'birth_date' => '2001-06-09',
            //     'phone_number' => '09303339709',
            //     'email' => 'montanezkien560@gmail.com',
            //     'initial_deposit' => '20000',
            // ],
            // [
            //     'last_name' => 'Client',
            //     'first_name' => 'Second',
            //     'middle_name' => 'hehe',
            //     'address' => 'Tinangnan, Tubigon, Bohol',
            //     'birth_date' => '2001-06-09',
            //     'phone_number' => '09303339709',
            //     'email' => 'petalinoclearjoy@gmail.com',
            //     'initial_deposit' => '20000',
            // ],
            // [
            //     'last_name' => 'Client',
            //     'first_name' => 'Third',
            //     'middle_name' => 'hehe',
            //     'address' => 'Tinangnan, Tubigon, Bohol',
            //     'birth_date' => '2001-06-09',
            //     'phone_number' => '09303339709',
            //     'email' => 'cj.edits17@gmail.comm',
            //     'initial_deposit' => '20000',
            // ],

        ];

        foreach($cl as $c) {
            Client::create($c);
        }

    }
}
