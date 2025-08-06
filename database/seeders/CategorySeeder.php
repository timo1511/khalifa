<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Improved: Create sample categories with descriptions for better data integrity and testing
        Category::create([
            'name' => 'Wallets',
            'description' => 'Premium leather wallets in various styles and colors.',
        ]);

        Category::create([
            'name' => 'Belts',
            'description' => 'Durable and stylish leather belts for everyday wear.',
        ]);

        Category::create([
            'name' => 'Bags',
            'description' => 'Elegant leather bags and pouches for carrying essentials.',
        ]);

        Category::create([
            'name' => 'Accessories',
            'description' => 'Customizable leather accessories like keychains and card holders.',
        ]);
    }
}