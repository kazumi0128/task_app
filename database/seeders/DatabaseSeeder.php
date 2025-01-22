<?php

namespace Database\Seeders;

use App\Http\Controllers\TaskController;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // // TaskSeeder（シーダークラス）の呼び出し
        if (config('app.env') == 'local') {
            $this->call(TaskSeeder::class);
        }
    }
}
