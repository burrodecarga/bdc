<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Denomination::create([
            'type' => 'BILLETE',
            'value' => '1',
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '2',
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '5',
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '10',
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '20',
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '50',
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '100',
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '200',
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '500',
        ]);

        Denomination::create([
            'type' => 'OTRO',
            'value' => '0',
        ]);


    }
}
