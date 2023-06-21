<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class TampilanController extends Controller
{
    //
    function tampilan(){
        $data['produks'] = Produk::all();
        return view('tampilan',$data);
    }
    function cart($id){
        $data['produks'] = Produk::find($id);
        $data['action'] = url('produk/view')."/".$data['produks']->id;
        return view('cart', $data);
    }
}
