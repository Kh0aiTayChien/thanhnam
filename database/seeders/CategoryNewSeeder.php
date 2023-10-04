<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryNewSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'chia sẻ kiến thức',
                'slug' => 'chia-se-kien-thuc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
