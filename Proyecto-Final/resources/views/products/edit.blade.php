@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
            <div class="col text-left">
                <a href="/products" class="btn btn-dark">Back</a>
            </div>
        </div>
    <div class="row justify-content-center card-body">
        <div class="col-md-8">
            <div class="card">
<h4><div class="card-header alert-dark" >{{ __('Edit Product') }}</div></h4>

                <div class="card-body ">
                <form method="POST" action="/products/{{$products->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                        <div class="form-group">
                            <label for="author">Image</label>
                            <input type="file" class="form-control" name="bookcover"/>
                        </div>
                        <br>
                        <label for="author">Current Image:</label> <img src="{{asset('storage').'/'.$products->filename}}" alt="" width="50">
                        </br>


                        <div class="form-group">
                            <label for="bag_name">Name</label>
                            <input type="text" class="form-control" id="bag_name" name="bag_name" value="{{$products->bag_name}}">
                        </div>

                        <div class="form-group">
                            <label for="bag_description">Description</label>
                            <textarea name="bag_description" id="bag_description" name="bag_description" class="form-control" value="{{$products->bag_description}}"></textarea>
                        </div>

                        <div class="form-group col">
                            <label for="bag_material">Material</label>
                            <input type="text" class="form-control" id="bag_material" name="bag_material"  value="{{$products->bag_material}}">
                        </div>

                        <form action="/products" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col">
                            <label for="bag_id_category">Category</label>
                            <select class="form-control" id="bag_id_category" name="bag_id_category">
                                @foreach($categories as $categories)
                                 <option value="{{$categories->id}}">{{$categories->name}}
                                 </option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-dark">Edit</button>
                                    </div>
                                </div>
                        </form>    

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
