<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
{
    \App\Models\Announcement::create([
        'message' => 'Free Shipping on Orders Over $100!',
        'icon' => '🎉',
        'link' => '/products',
        'cta' => 'Shop Now',
        'is_active' => true,
    ]);
    \App\Models\Announcement::create([
        'message' => '20% Off Wallets This Week Only!',
        'icon' => '🔥',
        'link' => '/products/wallets',
        'cta' => 'Discover Deals',
        'is_active' => true,
    ]);
    \App\Models\Announcement::create([
        'message' => 'Fast Delivery on All Leather Goods!',
        'icon' => '🚚',
        'link' => '/products',
        'cta' => 'Browse Now',
        'is_active' => true,
    ]);
}
}