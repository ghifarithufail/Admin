<?php

namespace App\Http\Controllers;

use App\Models\User;
use DebugBar\RequestIdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use PDF;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginuser(Request $request){
        if(Auth::attempt($request->only('password','no_telpon'))){
            return redirect('/home');
        }
        return view('/login');
    }

    public function register(){
        return view('user.create');
    }

    public function registeruser(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'role' => 'required',
            'no_telpon' => 'required|unique:users,no_telpon',
            'password' => 'required',
        ]);
        
        $auto =['table'=>'users','length'=>8,'prefix'=>'US-'];
        $id = IdGenerator::generate($auto);
        User::create([
            'id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'no_telpon' => $request->no_telpon,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/user');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function user(Request $request){
        if($request->has('search')){
            $user = User::where('name','LIKE','%' .$request->search. '%')-> paginate(20);
        }
        else{
            $user = User::paginate(20);
        }      
        return view('user.index', compact('user'));
    }   
    public function getUser($id){
        $datauser = User::find($id);
        return view('user.update', compact('datauser'));
    }

    public function udpateU($id, Request $request){
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('user')->with('sukses','data berhasill di update');
    }

    public function deleteU($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    public function viewPDF(){
        $user = User::all();
        return view('user.pdf', compact('user'));
    }
}
