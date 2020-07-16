@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h3 class="text-center py-3">Show Product</h3>
        </div>
        <div class="pull-right mb-3">
        <a href="{{ route("products.index")}}" class="btn btn-success">Back to Product</a>
        </div>
    </div>
</div>

<div class="row border border-primary p-5">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Nama Produk :</strong>
            {{ $product->nama_produk}}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Jumlah :</strong>
            {{ $product->jumlah}}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Harga :</strong>
            {{ $product->harga}}
            
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Keterangan :</strong>
            {{ $product->keterangan}}
        </div>
    </div>
</div>
@endsection