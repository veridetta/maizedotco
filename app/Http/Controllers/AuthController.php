<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\PenggunaModel;

class AuthController extends Controller
{
    public function loginpage(){
       return view('web.login'); //diarahin ke resources/views/web/login.blade.php
    }

    public function login(Request $request){
        $email = $request->input('email'); // menangkap email yang diisi di form login
        $password = $request->input('password'); // menangkap password yang diisi di form login

        $data = PenggunaModel::where('email',$email)->first(); //mengecek ada ga sih email yang input sama user di tabel pengguna

        if($data){
            if($password === $data->password){
                session(['id_user' => $data->_id]);
                return redirect()->to('/index2');
            }else{
                echo "<script>alert('password salah')</script>";
            }
        }else{
            echo "<script>alert('email tidak ada')</script>";
        }
    }

    public function signpage(){
        return view('web.signup'); //diarahin ke resources/views/web/login.blade.php
     }
 
     public function signup(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        
        //ngebuat data baru 
        PenggunaModel::create([
        'email' => $email,
        'password' => $password
        ]);
        
        //setelah beres masukin data baru/user baru ke database, user langsung dilempar ke halaman login
        return redirect()->to('/loginpage');
     }


     public function loginpageadmin(){
        return view('admin.loginadmin'); //diarahin ke resources/views/web/login.blade.php
     }
 
     public function loginadmin(Request $request){
         $email = $request->input('email'); // menangkap email yang diisi di form login
         $password = $request->input('password'); // menangkap password yang diisi di form login
 
         $data = PenggunaModel::where('email',$email)->first(); //mengecek ada ga sih email yang input sama user di tabel pengguna
 
         if($data){
             if($password === $data->password){
                 session(['id_user' => $data->_id]);
                 return redirect()->to('/index4');
             }else{
                 echo "<script>alert('password salah')</script>";
             }
         }else{
             echo "<script>alert('email tidak ada')</script>";
         }
     }


     public function signpageadmin(){
        return view('admin.signupadmin'); //diarahin ke resources/views/web/login.blade.php
     }
 
     public function signupadmin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        
        //ngebuat data baru 
        PenggunaModel::create([
        'email' => $email,
        'password' => $password
        ]);
        
        //setelah beres masukin data baru/user baru ke database, user langsung dilempar ke halaman login
        return redirect()->to('/loginpageadmin');
     }
}
