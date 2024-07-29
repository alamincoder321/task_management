<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'code'       => 'U00001',
            'name'       => 'Admin',
            'username'   => 'admin',
            'email'      => 'admin@gmail.com',
            'password'   => Hash::make(1),
            'phone'      => '019########',
            'role'       => 'Superadmin',
            'ip_address' => request()->ip(),
        ]);

        CompanyProfile::create([
            'name' => 'Company Name',
            'title' => 'Company Title',
            'email' => 'company@gmail.com',
            'phone' => '017########',
        ]);
    }
}
