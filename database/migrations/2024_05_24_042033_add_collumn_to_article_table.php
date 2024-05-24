<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumnToArticleTable extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('investor'); // Thêm cột investor
            $table->string('location'); // Thêm cột location
            $table->string('scale'); // Thêm cột scale
        });
    }


    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['investor', 'location', 'scale']); // Xóa các cột nếu cần rollback migration
        });
    }
}
