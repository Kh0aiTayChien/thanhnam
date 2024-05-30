<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoolArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pool_article', function (Blueprint $table) {
            $table->id(); // Tạo cột ID tự động tăng
            $table->unsignedBigInteger('category_id'); // Tạo cột category_id
            $table->string('title'); // Tạo cột title
            $table->string('slug')->unique(); // Tạo cột slug và đảm bảo giá trị là duy nhất
            $table->text('content'); // Tạo cột content
            $table->string('image')->nullable(); // Tạo cột image và cho phép giá trị NULL
            $table->integer('order_number')->default(0); // Tạo cột order_number với giá trị mặc định là 0
            $table->boolean('status')->default(1); // Tạo cột status với giá trị mặc định là 1 (true)
            $table->softDeletes(); // Tạo cột deleted_at cho soft delete
            $table->timestamps(); // Tạo cột created_at và updated_at
            // Thêm 3 cột bổ sung
            $table->string('investor'); // Tạo cột chủ đầu tư
            $table->string('location'); // Tạo cột địa điểm
            $table->string('scale'); // Tạo cột quy mô
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pool_article');
    }
}
