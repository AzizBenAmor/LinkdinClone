<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLogin;
use App\Http\Requests\UserRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    public function LoginIndex(){
        return view('login');
    }
    public function RegisterIndex(){
        return view('Register');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRegister $request)
    {
        $newname = uniqid();
        $image = $request->file('photo');
        $newnamee= $newname;
        $newnamee .= "." . $image->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $image->move($destinationPath, $newnamee);
            $user= new User;
         $user->name=$request->nom;
         $user->email=$request->email;
         $user->password=Hash::make($request->password);
         $user->photo=$newnamee;
         $user->save();
         return redirect()->route('LoginIndex');
    }

    public function Login(UserLogin $request){
      
        $creds = $request->only('email','password');

        if( Auth::attempt($creds) ){
            return redirect()->route('home');
        }else{
            return redirect()->route('LoginIndex')->with('fail','Incorrect credentials');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
