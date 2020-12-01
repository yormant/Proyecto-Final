@extends('layouts.app')

@section('content')

    <h1 class="alert alert-dark text-center">Categories</h1>
    <div class="container">
        <div class="row">
        <div class="col text-left">
            <a href="/home" class="btn btn-dark">Back</a>
            </div>
            <div class="col text-right">
                <a href="/categories/create" class="btn btn-dark">Insert category</a>
            </div>
        </div>

    <br><br>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Priority</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categories)
                <tr>
                    <td>{{$categories->name}}</td>
                    <td>{{$categories->description}}</td>
                    <td>{{$categories->priority}}</td>
                    <td>
                        <a href="categories/{{$categories->id}}/edit" class="btn btn-dark">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('categories.destroy', $categories)}}" method="POST">
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