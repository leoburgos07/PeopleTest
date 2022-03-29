<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Award;

class AwardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Award::create([
            'name' => 'Carro ultimo modelo',
            'quantity' => 5,
        ]);
        Award::create([
            'name' => 'Beca',
            'quantity' => 10,
        ]);
        Award::create([
            'name' => 'Casa amoblada',
            'quantity' => 25,
        ]);
        Award::create([
            'name' => 'Bicicleta',
            'quantity' => 2,
        ]);
        Award::create([
            'name' => 'Nevera',
            'quantity' => 114,
        ]);
        Award::create([
            'name' => 'TV 60 pulgadas',
            'quantity' => 50,
        ]);
        Award::create([
            'name' => 'Computador Gamer',
            'quantity' => 20,
        ]);

    }
}
