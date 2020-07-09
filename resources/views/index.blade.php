@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <h3>MS IT Online Class</h3>
    </div>
    <div class="pull-right">
        <a class=" btn btn-success" href="{{ route('create') }}" >Create Product</a>
</div>
<hr>
<table class="table table-bordered">
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Detail</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
    </tr>

    @endforeach
</table>
{!!$products->links() !!}
    @endsection
