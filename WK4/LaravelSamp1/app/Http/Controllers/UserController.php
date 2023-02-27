<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Validation\Rule;

/**
 * Summary of UserController
 */
class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }
    public function login (){
        if(FacadesView::exists('user.login')){
            return view ('user.login');
    }else{
        //return response ()->view('errors.404', $data);
        return abort(404);
    }
    }
    public function process(Request $request){
        $validated =$request->validate([
            'email'=> ['required','email'],
            'password'=> 'required'
           ]);
           if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message','Welcome back!');
           }
           return back()->withErrors(['email'=>'Login Failed'])->onlyInput('email');

}
    public function registers(){
        return view ('user.registers');
    }
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message','Logout successful');
    }
    public function store(Request $request){
       $validated =$request->validate([
        "name"=>['required','min:4'],
        'email'=> ['required','email',Rule::unique('users','email')],
        'password'=> 'required|confirmed|min:6'
       ]);
       $validated['password'] = Hash::make($validated['password']);

       $user = User::create($validated);
    
       auth()->login($user);
    }
    public function show ($id){
        $data=["data"=> "data from database"];
        return view ('user')
        ->with('data',$data)
        ->with('name','John')
        ->with('age',23)
        ->with('email','Jap@gmail.com')
        ->with('id',$id);
    }
}
