<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $bidderRole = Role::firstOrCreate(['name' => 'bidder']);

        // Create Permissions
        $manageAuctions = Permission::firstOrCreate(['name' => 'manage auctions']);
        $placeBids = Permission::firstOrCreate(['name' => 'place bids']);

        // Assign permissions to roles
        $adminRole->givePermissionTo($manageAuctions);
        $bidderRole->givePermissionTo($placeBids);

        // Create Admin user
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456789'),
        ]);
        $admin->assignRole($adminRole);

        // Optionally, create a bidder user as example
        $bidder = User::factory()->create([
            'name' => 'Bidder 1',
            'email' => 'bidder01@example.com',
            'password' => Hash::make('123456789'),
        ]);
        $bidder->assignRole($bidderRole);
    }
}
