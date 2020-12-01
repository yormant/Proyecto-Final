@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
            <div class="col text-left">
                <a href="/categories" class="btn btn-dark">Back</a>
            </div>
        </div>
    <div class="row justify-content-center card-body">
        <div class="col-md-8">
            <div class="card">
<h4><div class="card-header alert-dark" >{{ __('Insert category') }}</div></h4>


                <div class="card-body ">
                    <form method="POST" action="/categories">
                        @csrf

                        <div class="form-group">
                            <label for="categories_name">Name</label>
                            <input type="text" class="form-control" id="categories_name" name="categories_name" value="{{old('categories_name')}}">
                        </div>

                        <div class="form-group">
                            <label for="categories_description">Description</label>
                            <textarea name="categories_description" id="categories_description" name="categories_description" class="form-control">{{old('categories_description')}}</textarea>
                        </div>

                        <div class="form-group col">
                            <label for="categories_priority">Priority</label>
                            <input type="number" class="form-control" id="categories_priority" name="categories_priority" placeholder="Type the category priority" value="{{old('categories_priority')}}">
                        </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-dark">Create</button>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
