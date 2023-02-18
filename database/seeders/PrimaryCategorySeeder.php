<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '本',
                'sort_order' => 1
            ],
            [
                'name' => '日用品',
                'sort_order' => 2
            ],
            [
                'name' => '食品',
                'sort_order' => 3
            ],
        ]);
    }
}
