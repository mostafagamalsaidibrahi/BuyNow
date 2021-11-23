<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // get User Main View

      // show mobile products
    public function show_mob_prods (Request $request){

      $newMobileProducts=  DB::table('products')->where(['classif' => 'Mobiles'])->get();
      $arr1 = Array('newMobileProducts'=>$newMobileProducts);

      return view ('user.userMainView' , $arr1);
    }
    // show Electronic products
    public function show_elect_prods (Request $request){

      $newElectronicProducts=  DB::table('products')->where(['classif' => 'Electronics'])->get();
      $arr2 = Array('newElectronicProducts'=>$newElectronicProducts);

      return view ('user.electronics_prods' , $arr2);
    }
    // show Computer products
    public function show_computer_prods (Request $request){

      $newComputerProducts=  DB::table('products')->where(['classif' => 'Computers'])->get();
      $arr3 = Array('newComputerProducts'=>$newComputerProducts);

      return view ('user.computer_prods' , $arr3);
    }

    // get More Information about products
    public function getInfo (Request $request , $pId){

      $ProductsInfo =  DB::table('products')->where(['pId' => $pId])->get();
      $arr = Array('ProductsInfo'=>$ProductsInfo);

      return view('user.getInfo' , $arr);
    }

    // Adding to card
    public function AddToCard (Request $request , $pId){
      if($request->isMethod('post')){

        // getting data from view
        $quantity = $request->input('quantity');

        // getting id of user
        $name = $request->session()->get('username');
        $password = $request->session()->get('password');

        $getId = DB::table('users')
            ->where(['username'=>$name ,'password'=>$password])->get();

        foreach($getId as $obj)
          $uId = $obj->uId;

          $ifExists = DB::table('card')
            ->where(['uId'=>$uId ,'pId'=>$pId])->get();

          if( count($ifExists) > 0 ){
            // Go To Card Page
            return redirect ('/my_card');
          }else{
            DB::table('card')->insert(
                ['uId' => $uId ,
                 'pId' => $pId,
                  'quantity' => $quantity]
            );
          }
      }
      return redirect('/user_view');
    }

    // get My Card View
    public function getMyCard (Request $request){

      // getting id of user
      $name = $request->session()->get('username');
      $password = $request->session()->get('password');

      $getId = DB::table('users')
          ->where(['username'=>$name ,'password'=>$password])->get();

      foreach($getId as $obj)
        $uId = $obj->uId;

      $cardData = DB::table('products')->where(['uId' => $uId])
            ->join('card', 'products.pId', '=', 'card.pId')->get();

      $array = Array('cardData'=>$cardData);

      return view('user.my_card' , $array);
    }

    // send data to update view
    public function sendDataToUpdateView (Request $request , $pId){
      // getting id of user
      $name = $request->session()->get('username');
      $password = $request->session()->get('password');

      $getId = DB::table('users')
          ->where(['username'=>$name ,'password'=>$password])->get();

      foreach($getId as $obj)
        $uId = $obj->uId;

        // getting quantity
        $getQunatity = DB::table('card')
            ->where(['uId'=>$uId ,'pId'=>$pId])->get();

        $arr1 = Array('getQunatity'=>$getQunatity);

        $productIdValue = $request->session()->put('prodId' , $pId);

        return view('user.update_quan' , $arr1);
    }

    // update function
    public function quantityUpdate (Request $request){
      $newQuantity = $request->input('newQuantity');

      if($newQuantity == ""){
        return redirect('/my_card')->with('message' , 'Please enter qunatity');
      }else if($newQuantity[0] == "0"){
        return redirect('/my_card')->with('message' , 'Please enter valid qunatity');
      }else{
        // getting id of user
        $name = $request->session()->get('username');
        $password = $request->session()->get('password');

        $getId = DB::table('users')
            ->where(['username'=>$name ,'password'=>$password])->get();

        foreach($getId as $obj)
          $uId = $obj->uId;

          $productIdValue = $request->session()->get('prodId');

          $affected = DB::table('card')
                  ->where([ 'uId' => $uId  , 'pId' => $productIdValue])
                  ->update(['quantity' => $newQuantity]);

          return redirect('/my_card')->with('message' , 'New Quantity is updated successfully');
      }

    }

    // delete product from card view
    public function deleteProd (Request $request , $pId){
      // getting id of user
      $name = $request->session()->get('username');
      $password = $request->session()->get('password');

      $getId = DB::table('users')
          ->where(['username'=>$name ,'password'=>$password])->get();

      foreach($getId as $obj)
        $uId = $obj->uId;

      DB::table('card')->where([ 'uId' => $uId  , 'pId' => $pId ])->delete();

      return redirect('/my_card')->with('message' , 'Product is Deleted successfully');
    }
}
