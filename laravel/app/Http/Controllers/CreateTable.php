<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Controller
{
    public function table() {
        if(!Schema::hasTable('addresses')) {
            Schema::create('addresses', function($table) {
                $table -> increments('id');
                $table->string('street', 255)->nullable()->collation('utf8_unicode_ci');
                $table->string('country', 255)->collation('utf8_unicode_ci');
                $table->integer('icon_id')->nullable();
                $table->integer('monster_id');
                $table->timestamps();
            });
        }
        if(!schema::hasTable('articles')) {
            Schema::create('articles', function($table) {
                $table -> increments('id');
                $table->unsignedInteger('category_id');
                $table->string('title', 255)->collation('utf8_unicode_ci');
                $table->string('slug', 255)->default('')->collation('utf8_unicode_ci');
                $table->text('content')->collation('utf8_unicode_ci');
                $table->string('image', 255)->nullable()->collation('utf8_unicode_ci');
                $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED')->collation('utf8_unicode_ci');
                $table->date('date');
                $table->tinyInteger('featured')->default(0);
                $table->timestamps();
                $table->softDeletes();
                });
    }
    echo 'Tạo bảng thành công';
}}
