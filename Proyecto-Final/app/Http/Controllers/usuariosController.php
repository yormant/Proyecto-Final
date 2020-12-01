<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.index', [
            'users' => users::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users  = new users();
        $users->name=$request->get('name');
        $users->email=$request->get('email');
        $users->password=bcrypt($request->password);
        $users->save();

        return redirect()->route('usuarios.index');
                        
    }
        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $users
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $users)
    {
        return Validator::make($users, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('/usuarios.edit',[
            'users'=>$users
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $users=User::find($id);
        $users->name=$request->get('name');
        $users->email=$request->get('email');
        $users->password=bcrypt($request->password);
        $users->save();

        return redirect()->route('usuarios.index');
                        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $users = User::find($id);
        $users->delete();
        return redirect()->route('usuarios.index');
    }
}
