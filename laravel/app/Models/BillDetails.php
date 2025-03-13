<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    use HasFactory;
    protected $table = 'bill_detail'; //Khai báo bảng để kết nối với database
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_bill', 'id_product', 'quantity', 'unit_price', 'created_at', 'updated_at'
    ];

    public function bill()
    {
        return $this->belongsTo(Bills::class, 'id_bill','id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'id_product','id');
    }
}