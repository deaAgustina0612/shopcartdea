<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;

class ProdukController extends Controller
{
    function show(){
        $data['produks'] = Produk::all();
        return view('produk',$data);
    }
    function view(){
        $data['produk'] = Produk::all();
        return view('tampilan', $data);
    }

    function cart($id){
        $data['produks'] = Produk::find($id);
        $data['action'] = url('produk/view')."/".$data['produks']->id;
        return view('cart', $data);
    }


    function add(){
        $data=[
            'action'=>url('produk/create'),
            'tombol'=>'simpan',
            'produk'=>(object)[
                'id'=>'',
                'nama_produk'=>'',
                'kategori'=>'',
                'warna'=>'',
                'harga'=>'',
                'foto'=>'',
                'deskripsi'=>'',
            ],
         ];
         return view('formproduk',$data);
    }

    function create(Request $req){
        Produk::create([
            'id' => $req->id,
            'nama_produk' => $req->nama_produk,
            'kategori' => $req->kategori,
            'warna' => $req->warna,
            'harga' => $req->harga,
            'deskripsi' => $req->deskripsi,
            'foto'=> $req->file('foto')->store('foto'),
        ]);
        return redirect('produk');
    }
    function delete($id){
        $produk = Produk::where('id', $id)->first();
        $produk->delete();
        Storage::delete($produk->foto);
        return redirect('produk');
    }
    function edit($id){
        $data['produk']=Produk::find($id);
        $data['action']= url('produk/update').'/'.$data['produk']->id;
        // $data['tombol']='update';
        return view('formproduk',$data);
    }
    function update(Request $req){
        if($req->file('foto')){
            $produk = Produk::where('id',$req->id)->first();
            Storage::delete($produk->foto);

            $file = $req->file('foto')->store('foto');
        }else{
            $file = DB::raw('foto');
        }
        Produk::where('id',$req->id)->update([
            'id'=>$req->id,
            'nama_produk'=>$req->nama_produk,
            'kategori'=>$req->kategori,
            'warna'=>$req->warna,
            'harga'=>$req->harga,
            'deskripsi'=>$req->deskripsi,
            'foto'=>$file,
        ]);
        return redirect('produk');
    }
}
