<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Roles for admin/customer - Use firstOrCreate to prevent duplicates on repeated seeding
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'customer']);

        // Sample admin user - Use firstOrCreate based on email to avoid duplicates
        $admin = User::firstOrCreate(
            ['email' => 'admin@khalifacrafted.com'], // Unique identifier for check
            [
                'name' => 'Admin',
                'password' => bcrypt('Admin@2025'),
            ]
        );
        $admin->assignRole('admin'); // Assign role only if not already assigned (HasRoles handles idempotency)

        // Sample products (leather wallets with customizations) - Use firstOrCreate based on name
        Product::firstOrCreate(
            ['name' => 'Leather Wallet'], // Unique identifier for check
            [
                'description' => 'High-quality leather wallet with customization options.',
                'price' => 50.00,
                'colors' => json_encode(['black', 'brown', 'tan', 'navy']),
                'stitching_colors' => json_encode(['white', 'black', 'red']),
                'stock' => 100,
            ]
        );

        // Add more products like holders, straps, belts here using firstOrCreate for idempotency
    }
}