@extends('layouts.app2')

@section('content')
    <div class="row">
            <div class="col">
                <h1 class="alert alert-dark text-center">Details</h1>
            </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col text-left">
            <a href="/clients" class="btn btn-dark">Back</a>
            </div>

    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                        <center> <div class="card">
                                <div class="card-body">
                                    
                                    <center><img src="{{asset('storage') .'/'. $products->filename}}" alt="{{$products->filename}}" width="300"></center>
                                    <h5><center><p class="card-text ">{{$products->bag_name}}</p></center></h5>
                                    <h5><center><p class="card-text ">{{$products->bag_description}}</p></center></h5>
                                    <h5><center><p class="card-text ">{{$products->bag_material}}</p></center></h5>
                                    <br>
                                    <center><a href="" class="btn btn-dark">To buy!</a></center>
                                    <br>
                                    <center><form action="{{route('products.sendEmail', $products)}}" method="get">
                                @csrf
                                
                                <button
                                    type="submit"
                                    class="btn btn-dark"
                                    onclick="return confirm('Do you want to send the report?')"
                                >Send Email</button></center>
                            </form>
                                    

                                </div>
                            </div>
                        </div></center>

    </div>
                             
@endsection