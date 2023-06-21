@extends('admin')

@section('konten')


    <main>
        <div class="container mt-5">
            <h2 class="text-center pt-3">Daftar Produk</h2>
            <a href="produk/add"><button class="btn btn-primary" type="submit" name="submit" id="submit">Tambah Data</button></a>
            <table class="table table-bordered mt-2">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA PRODUK</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">WARNA</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                @foreach ($produks as $key => $item)
                <tbody>
                  <tr>
                    <th scope="row">{{ $key+1}}</th>
                    <td>{{ $item -> nama_produk}}</td>
                    <td>{{ $item -> kategori}}</td>
                    <td>{{ $item -> warna}}</td>
                    <td>{{ $item -> harga }}</td>
                    <td><center>
                      <img src="\storage\{{ $item->foto }}" alt="" width="100" height="100"></center>
                    </td>
                    <td>
                      <a href="produk/edit/{{$item -> id}}"><button class="btn btn-success" name="submit" type="submit">EDIT</button></a>
                      <a href="produk/delete/{{$item -> id}}"><button class="btn btn-danger" name="submit" type="submit">HAPUS</button></a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </div>
    </main>

@endsection
