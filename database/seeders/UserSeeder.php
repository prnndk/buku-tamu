<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'id' => 1,
                'name' => 'haloo',
                'email' => 'halo@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'id' => 2,
                'name' => 'testing',
                'email' => 'testing@gmail.com',
                'password' => bcrypt('password'),
            ]
        ];
        DB::beginTransaction();
        try {
            foreach ($userData as $data) {
                User::create($data);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
