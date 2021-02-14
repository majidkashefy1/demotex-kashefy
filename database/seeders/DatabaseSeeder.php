<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            ProductCategorySeeder::class,
            DetailSeeder::class,
            DetailNameSeeder::class,
        ]);
    }
}
