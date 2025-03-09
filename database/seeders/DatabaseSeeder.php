<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Privilege;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tambahkan Role
        $adminRole = Role::create(['name' => 'Admin']);
        $koordinatorRole = Role::create(['name' => 'Koordinator Sektor']);

        // Tambahkan Privilege
        $addPrivilege = Privilege::create(['name' => 'Add']);
        $editPrivilege = Privilege::create(['name' => 'Edit']);
        $deletePrivilege = Privilege::create(['name' => 'Delete']);
        $viewPrivilege = Privilege::create(['name' => 'View']);

        // Assign Privilege ke Role
        $adminRole->privileges()->attach([
            $addPrivilege->id => ['menu' => 'Data Jemaat'],
            $editPrivilege->id => ['menu' => 'Data Jemaat'],
            $deletePrivilege->id => ['menu' => 'Data Jemaat'],
            $viewPrivilege->id => ['menu' => 'Data Jemaat'],
        ]);

        // Buat User Admin
        User::create([
            'userid' => 'admin',
            'name' => 'Administrator',
            'password' => bcrypt('admin12345'),
            'role_id' => $adminRole->id,
        ]);

        // Buat 10 User Random
        User::factory(5)->create();
    }
}
