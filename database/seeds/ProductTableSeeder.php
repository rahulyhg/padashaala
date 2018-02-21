<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'user_id' => 1,
            'product_name' => str_random(10),
            'slug' => str_random(10),
            'product_price' => rand(10, 3),
            'discount_percentage' => rand(10, 2),
            'approved' => 1,
            'stock_qty' => rand(10, 2),
        ]);

        // factory(App\Model\Product::class, 15)->$faker;
    }
}
