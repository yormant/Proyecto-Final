@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col">
            <h1 class="alert alert-dark text-center">Users</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-left">
                <a href="/home" class="btn btn-dark">Back</a>
            </div>
                <div class="col text-right">
                    <a href="/usuarios/create" class="btn btn-dark">New User</a>
                </div>
        </div>
        <br>
        <table class="table table-striped table-dark">
            <thead>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">password</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </thead>
                <tbody>
                    @foreach ($users as $users)
                        <tr>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->password}}</td>
                            <td>
                            <a href="/usuarios/{{$users->id}}/edit" class="btn btn-dark">Edit</a>
                            </td>

                            <td>
                            <form action="{{route('usuarios.destroy', $users)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input 
                                    type="submit" 
                                    class="btn btn-dark" 
                                    value="Delete" 
                                    onclick="return confirm('do you want to delete this data?')"
                                />
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
    
@endsection