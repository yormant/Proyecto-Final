@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
            <center><h5><div class="card-header">{{ Auth::user()->name }}, Do what you need!</div></h5></center>
                        
                <div class="card-body">
                   
                <center><a href="/categories" class="btn btn-dark">Categories</a>
                                <br>
                                <br>
                        <a href="/products" class="btn btn-dark">Products</a>
                                <br>
                                <br>
                        <a href="/usuarios" class="btn btn-dark">User</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
