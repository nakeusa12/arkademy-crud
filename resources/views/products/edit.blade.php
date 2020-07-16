@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h3 class="text-center py-3">Edit Product</h3>
        </div>
        <div class="pull-right mb-3">
        <a href="{{ route("products.index")}}" class="btn btn-success">Back to Product</a>
        </div>
    </div>
</div>


<form action="{{route('products.update', $product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Nama Produk :</strong>
            <input type="text" name="nama_produk" value="{{$product->nama_produk}}" class="form-control" placeholder="Nama Produk">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Jumlah :</strong>
                <input type="text" name="jumlah" value="{{$product->jumlah}}" class="form-control" placeholder="Jumlah">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input type="text" name="harga" value="{{$product->harga}}" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                <textarea name="keterangan" placeholder="keterangan" class="form-control">{{$product->keterangan}}"</textarea>
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endsection