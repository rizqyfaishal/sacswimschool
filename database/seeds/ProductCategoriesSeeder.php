<?php

use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 20;
        for($i = 0;$i<20;$i++){
            \App\ProductCategory::create([
                'name' => $faker->domainName
            ]);
        }
    }
}
