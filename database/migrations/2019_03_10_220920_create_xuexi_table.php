<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuexiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuexi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question')->unique();// 题目
            $table->string('answer');// 答案
            $table->enum('category', [0, 1])->nullable();// 大分类(每周一答|专题考试)
            $table->string('second_category')->nullable();// 小分类(每周一答中的第几周|专题考试中的哪一个专题)
            $table->enum('type', [0, 1, 2])->nullable();// 题型(填空|单选|多选)
            $table->boolean('is_checked')->default(false);// 是否通过审核
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuexi');
    }
}
