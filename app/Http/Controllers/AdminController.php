<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Products;

class AdminController extends Controller
{
    // get Main view Of Admin
    public function addNewProduct (Request $request){


      if($request->isMethod('post')){
        // get Instance from Product Model

        // get data from view
        $image = $request->input('image');
        $specifications = $request->input('specifications');
        $price = $request->input('price');
        $classification = $request->input('classif');

        // Check Data
        if($specifications == "" || $price == "" || $image == ""){
          return redirect('/main_view')->with('product_data' , 'Please complete your data');
        }else{
          $img_name = time() . '.' . $request->image->getClientOriginalExtension();
          $product = new Products();
          $product->specifications = $specifications ;
          $product->price = $price ;
          $product->image = $img_name;
          $product->classif = $classification ;
          $product->save();
          $request->image->move(public_path('uploads') , $img_name);
          return redirect('/main_view')->with('product_data' , 'Saved Successfully');
        }
      }

      return view ('admin.adminMainView');
    }

    // get Settings
    public function getSettings (Request $request){
      $users=  DB::table('users')->where(['Type' => 0])->count();
      $usersArr = Array('users'=>$users);

      $computers=  DB::table('products')->where(['classif' => 'Computers'])->count();
      $computersArr = Array('computers'=>$computers);

      $mobiles=  DB::table('products')->where(['classif' => 'Mobiles'])->count();
      $mobilesArr = Array('mobiles'=>$mobiles);

      $electronics=  DB::table('products')->where(['classif' => 'Electronics'])->count();
      $electronicsArr = Array('electronics'=>$electronics);

      return view('admin.settings')
       ->with(['users'=>$users])
        ->with(['computers'=>$computers])
        ->with(['mobiles'=>$mobiles])
         ->with(['electronics'=>$electronics]);
    }

    // get Profile
    public function getProfile (Request $request){
      return view('admin.profile');
    }

    //logout
    public function logout (Request $request){
      $request->session()->forget('username');
      return redirect('/');
    }
}
