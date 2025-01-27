<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [ 
        ['id' => 1, 'name' => 'Dior'],
        ['id' => 2, 'name' => 'Chanel'],
        ['id' => 3, 'name' => 'Armani'],
        ['id' => 4, 'name' => 'Gucci'],
        ['id' => 5, 'name' => 'Yves Saint Laurent'],
    ];

    foreach($brands as $brand){
        $newBrand = new Brand();
        $newBrand->name = $brand['name'];

        $newBrand->save();
    }

    }
}
