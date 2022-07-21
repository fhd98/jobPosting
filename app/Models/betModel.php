<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Description of betModel
 *
 * @author fahad.hafeez
 */
class betModel extends Model {
    //put your code here
    
    protected $table= 'bet';
    protected $primaryKey='userID';
    
public function store (Request $request){
    if (!empty($request->userID)){
           $user= userDetailModel::find($request->userID);
       }  
    
    else {
    
    $user= new betModel;
    }
   // $obj= userDetailModel::findOrFail($request->id);
    
    $user->name = $request->name;
    $user->email = $request->email;
    $user->address = $request->address;
    $user->gender = $request->gender;
    $user->zip= $request->zip;
    $user->city = $request->city;
    $user->password = $request->password;
    
    
      $user->save();
  
    if ($request->hasFile('picture')){
        $id= $user->userID;
        $path= public_path("users");
        
        $imageName= $id.'_user_bet_image_test.'.$request->picture->extension();
        $request->picture->move($path, $imageName);
        self::where('userID',$id)->update(['pictureName'=>$imageName]);
    }
    
    
    
}
}
