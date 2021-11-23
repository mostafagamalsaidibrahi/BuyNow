<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SharedController extends Controller
{
    // sign Up function
    public function signUp (Request $request){
      if($request->isMethod('post')){
        // getting data from view
        $fullname = $request->input('fullname');
        $username = $request->input('username');
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        // checking validation
        if($fullname == "" || $username == "" || $password == "" || $repassword == ""){
          return redirect('/')->with('message' , 'Please complete your data');
        }else if($password != $repassword){
          return redirect('/')->with('message' , 'Password Not Match');
        }else if () {
          // code...
        }else{
          // check if exists or not
          $ifExists = DB::table('users')
              ->where(['fullname'=>$fullname ,'username'=>$username ,'password'=>$password])->get();
          if(count($ifExists) > 0){
            return redirect('/')->with('message' , 'This account is exists');
          }else{
            // insert data
            DB::table('users')->insert(
                ['fullname' => $fullname,
                 'username' => $username ,
                 'password' => $password,
                  'type' => 0]
            );
            return redirect('/')->with('message' , 'Account is created , you should login now');
          }
        }
      }
    }

    // login function
    public function login(Request $request){
      if($request->isMethod('post')){

        $username = $request->input('usernameLogin');
        $password = $request->input('passwordLogin');

        if($username == "" || $password == ""){
          return redirect('/')->with('message' , 'Please complete your data');
        }else{
          // check if exit
          $ifExists = DB::table('users')
              ->where(['username'=>$username ,'password'=>$password , 'type'=>1 ])->get();
          if(count($ifExists) > 0){
            $usernameValue = $request->session()->put('username' , $username);
            $passwordValue = $request->session()->put('password' , $password);
            return redirect('/main_view');
          }else{
            $ifExists = DB::table('users')
                ->where(['username'=>$username ,'password'=>$password , 'type'=> 0 ])->get();
                if(count($ifExists) > 0){
                  $usernameValue = $request->session()->put('username' , $username);
                  $passwordValue = $request->session()->put('password' , $password);
                  return redirect('/user_view');
                }else{
                  return redirect('/')->with('message' , 'username or password are wrong');
                }
          }
        }

      }
      return view('index');
    }

    // get Mobile Products
    public function getMobileProducts (Request $request){
      $newProducts=  DB::table('products')->where(['classif' => 'Mobiles'])->get();
      $arr = Array('newProducts'=>$newProducts);
      return view('mobiles' , $arr);
    }
    // get Mobile Products
    public function getElectronicProducts (Request $request){
      $newProducts=  DB::table('products')->where(['classif' => 'Electronics'])->get();
      $arr = Array('newProducts'=>$newProducts);
      return view('electronics' , $arr);
    }
    // get Mobile Products
    public function getComputerProducts (Request $request){
      $newProducts=  DB::table('products')->where(['classif' => 'Computers'])->get();
      $arr = Array('newProducts'=>$newProducts);
      return view('computers' , $arr);
    }


}
