<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => "ibram" ,
            'email' => "ibrammelad476@gmail.com",
            'password'=>bcrypt('123456'), // password
            'language_id' => 1,
        ]);
        Admin::factory(4)->create();
    }
}
