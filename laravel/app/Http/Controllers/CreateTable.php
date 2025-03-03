<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Controller
{
    public function table() {
        if(!Schema::hasTable('product1')) {
            Schema::create('product1', function($table) {
                $table -> increments('id');
                $table -> string('name');
                $table -> string('image');
                $table -> string('description');
                $table -> integer('quantity');
                $table -> date('date');
                $table -> timestamps();
            });
        }
        if(!Schema::hasTable('product2')) {
            Schema::create('product2', function($table) {
                $table -> increments('id');
                $table -> string('name');
                $table -> string('image');
                $table -> string('description');
                $table -> integer('quantity');
                $table -> date('date');
            });
        }
        echo 'Tạo bảng thành công';
    }
}
