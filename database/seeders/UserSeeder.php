<?php

namespace Database\Seeders;

use App\Enums\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Symfony\Component\Clock\now;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultPassword = 12345678;
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@cms.com',
                'profile_picture' => null,
                'phone' => '08123456789',
                'status' => Status::Active->value,
                'role' => 'admin',
                'password' => Hash::make($defaultPassword),
                'created_at' => now(),
                'updated_at' => now(),
                'last_login_at' => now(),
            ],
            [
                'name' => 'Admin Blog',
                'email' => 'admin_blog@cms.com',
                'profile_picture' => null,
                'phone' => '08987654321',
                'status' => Status::Active->value,
                'role' => 'admin_blog',
                'password' => Hash::make($defaultPassword),
                'created_at' => now(),
                'updated_at' => now(),
                'last_login_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
