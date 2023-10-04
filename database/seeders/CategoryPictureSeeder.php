<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPictureSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'title' => 'ảnh banner trang chủ',
                'slug' => 'anh-banner-trang-chu',
                'type' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
