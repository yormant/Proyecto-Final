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
<h4><div class="card-header alert-dark" >{{ __('Insert Product') }}</div></h4>

                <div class="card-body ">
                    <form method="POST" action="/products" enctype="multipart/form-data">
                    {{ csrf_field() }}


                        <div class="form-group">
                            <label for="author">Image</label>
                            <input type="file" class="form-control" name="bookcover"/>
                        </div>

                        <div class="form-group">
                            <label for="bag_name">Name</label>
                            <input type="text" class="form-control" id="bag_name" name="bag_name" value="">
                        </div>

                        <div class="form-group">
                            <label for="bag_description">Description</label>
                            <textarea name="bag_description" id="bag_description" name="bag_description" class="form-control" value=""></textarea>
                        </div>

                        <div class="form-group col">
                            <label for="bag_material">Material</label>
                            <input type="text" class="form-control" id="bag_material" name="bag_material"  value="">
                        </div>

                        <form action="/products" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col">
                            <label for="bag_id_category">Categoria</label>
                            <select class="form-control" id="bag_id_category" name="bag_id_category">
                                @foreach($categories as $categories)
                                 <option value="{{$categories->id}}">{{$categories->name}}
                                 </option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-dark">Create</button>
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
