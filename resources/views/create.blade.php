@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg margin-tb">
        <div class="pull-left">
            <h3>New Product</h3>
        </div>
        <div class="pull-right">
            <a class=" btn btn-primary btn-sm" href="#">Back</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="row my-5" >
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <input type="text" name="detail" placeholder="Detail">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
