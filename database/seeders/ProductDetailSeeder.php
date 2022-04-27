<?php

namespace Database\Seeders;

use App\Models\ProductDetail;
use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductDetail::create([
            'product_id' => 1,
            'category_id' => 1,
        ]);

        ProductDetail::create([
            'product_id' => 2,
            'category_id' => 1,
        ]);

        ProductDetail::create([
            'product_id' => 3,
            'category_id' => 2,
        ]);

        ProductDetail::create([
            'product_id' => 4,
            'category_id' => 1,
        ]);

        ProductDetail::create([
            'product_id' => 5,
            'category_id' => 3,
        ]);

        ProductDetail::create([
            'product_id' => 7,
            'category_id' => 3,
        ]);

        ProductDetail::create([
            'product_id' => 8,
            'category_id' => 4,
        ]);

        ProductDetail::create([
            'product_id' => 9,
            'category_id' => 2,
        ]);

        ProductDetail::create([
            'product_id' => 10,
            'category_id' => 5,
        ]);
    }
}
