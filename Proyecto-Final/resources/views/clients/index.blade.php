@extends('layouts.app2')

@section('content')

<div class="container">
<div class="col text-left">
            <a href="/" class="btn btn-dark">Back</a>
            </div>
 
         @foreach ($categories as $categories)
         <br>
         <div class="row">
         <div class="col">
        <h5 class="card-title alert alert-dark text-center">{{$categories->name}}</h5>  
        </div>
        </div>
            <div class="container">
                <div class="row">
                    @foreach ($categories->products as $product) 
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <center> <div class="card">
                                <div class="card-body">
                                    
                                    <center><img src="{{asset('storage') .'/'. $product->filename}}" alt="{{$product->filename}}" width="200"></center>
                                    <h4><center><p class="card-text ">{{$product->bag_name}}</p></center></h4>
                                    <br>
                                    <center><a href="/clients/{{$product->id}}" class="btn btn-dark">Details</a></center>
                                </div>
                            </div>
                        </div></center>
                    @endforeach
                </div>  
            </div>    
        @endforeach
 
</div>
                             
@endsection