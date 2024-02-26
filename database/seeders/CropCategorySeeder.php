<?php

namespace Database\Seeders;

use Database\Factories\CropCategoryFactory;
use Illuminate\Database\Seeder;
use App\Models\CropCategory;

class CropCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CropCategory::factory()->count(100)->create();
    }
}
