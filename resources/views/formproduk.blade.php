@extends('admin')

@section('konten')

<div class="container mt-3 py-5">
     <div class="card ">
     <div class="card-header text-center">
          <h2>Daftar</h2>
     </div>
          <div class="card-body">
          <form action="{{$action}}" method="post" enctype="multipart/form-data">
          @csrf
               <div class="mb-3">
                    <label for="" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="{{ $produk -> nama_produk}}" >
               <div class="mb-3">
                    <label for="" class="form-label">Kategori</label>
                    <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $produk -> kategori}}" >
               </div>
               <div class="mb-3">
                    <label for="" class="form-label">Warna</label>
                    <input type="text" name="warna" class="form-control" id="warna" value="{{ $produk -> warna}}" >
               </div>
               <div class="mb-3">
               <label for="" class="form-label">Harga</label>
               <input class="form-control" name="harga" id="harga" cols="30" rows="10" value="{{ $produk -> harga}}">
          </div>
          <div class="mb-3">
               <label for="" class="form-label">Deskripsi</label>
               <input class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10" value="{{ $produk -> deskripsi}}">
          </div>
               <div class="mb-3">
                    <label for="" class="form-label">Foto</label>
                    @if(file_exists("storage/".$produk->foto))
                    <img src="/storage/{{ $produk->foto }}" alt="" width="100" height="100"><br>
                    @endif
                    <input type="file" name="foto" id="foto">
               </div>
          <div>
               <input type="submit" value="SIMPAN" name="simpan">
          </div>
     </form>
     </div>
     </div>
</div>

@endsection
