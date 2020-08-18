<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::all()->toArray();
        
        return view('profile',compact('users'));
    }

    public function create()
    {
       return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUser = new User();
        $newUser->fill($request->all());
        $newUser->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function edit(User $user)
    {
        return view('edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        
        $users = User::find($id);
        $users->name = request('name');
        $users->age = request('age');
        $users->birthday = request('birthday');
        $users->email = request('email');
        $users->address = request('address');
        $users->phone = request('phone');
        $users->password = request('password');
        $users->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
