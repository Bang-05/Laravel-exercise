<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Slides;
use App\Models\TypeProducts;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        return view ('master');
    }
    public function index() {
        return view ('pages.trangchu-1');
    }
    public function getSlide() {
        $slide = Slides::all();
        return view('pages.trangchu', compact('slide'));
    }

    public function getLoaiSp($type)		
    {		
        $sp_theoloai = Products::where('id_type', $type)->get();		
        $type_product = TypeProducts::all();		
        $sp_khac = Products::where('id_type', '<>', $type)->paginate(3);	
        $slide = Slides::all();	
                
        return view('pages.loai_sanpham', compact('sp_theoloai', 'type_product', 'sp_khac'));		
    }		
}

