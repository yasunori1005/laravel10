<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SecondaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('secondary_categories')->insert([
            [
                'name' => 'コミック',
                'primary_category_id' => 1,
                'sort_order' => 1
            ],
            [
                'name' => '雑誌',
                'primary_category_id' => 1,
                'sort_order' => 2
            ],
            [
                'name' => 'ビジネス書',
                'primary_category_id' => 1,
                'sort_order' => 3
            ],
            [
                'name' => '洗剤',
                'primary_category_id' => 2,
                'sort_order' => 4
            ],
            [
                'name' => 'シャンプー',
                'primary_category_id' => 2,
                'sort_order' => 5
            ],
            [
                'name' => '掃除用具',
                'primary_category_id' => 2,
                'sort_order' => 6
            ],
            [
                'name' => '肉',
                'primary_category_id' => 3,
                'sort_order' => 7
            ],
            [
                'name' => '野菜',
                'primary_category_id' => 3,
                'sort_order' => 8
            ],
        ]);
    }
}
