<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = \App\ProductCategory::count();

        for($i = 0;$i<$limit;$i++){
            \App\Product::create([
                'image_url' => $faker->imageUrl(600,600),
                'product_name' => $faker->name,
                'product_category_id' => $i + 1,
                'product_stock' => 90,
                'product_price' => 2
            ]);
        }
    }
}
