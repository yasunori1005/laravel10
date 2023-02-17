<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'タイトル1',
                'price' => 1000,
                'message' => 'メッセージが入ります',
                'like' => null,
                'user_id' => 1,
                'created_at'=>'2023/02/01 11:11:11'
                
            ]
        ]);
    }
}
