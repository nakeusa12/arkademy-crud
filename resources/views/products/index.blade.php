@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3 class="text-center py-5">Arkademy CRUD</h3>
            </div>
            <div class="pull-right mb-4">
            <a href="{{ route("products.create")}}" class="btn btn-success">Create Product</a>
            </div>
        </div>
    </div>



    <table class="table table-bordered">
        <tr class="thead-dark">
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td> {{++$i}} </td>
            <td> {{ $product->nama_produk }} </td>
            <td> {{$product->jumlah}} </td>
            <td> Rp.{{$product->harga}} </td>
            <td> {{$product->keterangan}} </td>
            <td>
            <form action="{{route('products.destroy', $product->id)}}" method="POST">
                <a href="{{route('products.show', $product->id )}}" class="btn btn-info">Show</a>
                <a href="{{route('products.edit', $product->id )}}" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach 
    </table>
@endsection