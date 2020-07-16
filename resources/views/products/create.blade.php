@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h3 class="text-center py-5">Add New Product</h3>
        </div>
        <div class="pull-right mb-3">
        <a href="{{ route("products.index")}}" class="btn btn-success">Back to Product</a>
        </div>
    </div>
</div>



<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Nama Produk :</strong>
                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Jumlah :</strong>
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                <textarea name="keterangan" placeholder="keterangan ..." class="form-control"></textarea>
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </div>
</form>
@endsection