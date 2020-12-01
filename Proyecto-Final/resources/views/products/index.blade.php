@extends('layouts.app')

@section('content')

    <div class="row">
            <div class="col">
                <h1 class="alert alert-dark text-center"> Bags</h1>
            </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col text-left">
            <a href="/home" class="btn btn-dark">Back</a>
            </div>
            <div class="col text-right">
                <a href="/products/create" class="btn btn-dark">Insert Product</a>
            </div>
        </div>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Material</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                
            </thead>
            <tbody>
                @foreach ($products as $products)
                    <tr>
                        <td>{{$products->bag_name}}</td>
                        <td>{{$products->bag_description}}</td>
                        <td>{{$products->bag_material}}</td>
                        <td>
                        <img src="{{asset('storage').'/'.$products->filename}}" alt="" width="50">
                        </td>
                        <td>
                            <a href="products/{{$products->id}}/edit" class="btn btn-dark">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('products.destroy', $products)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="btn btn-dark"
                                    onclick="return confirm('do you want to delete this data?')"
                                >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>   

        </div>
</div>
@endsection