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
 * Description of users
 *
 * @author fahad.hafeez
 */
class usern extends Model {
    
    protected $table= 'user';
    protected $primaryKey='userID';
    //put your code here


public function store (Request $request){
    $user= new usern;
    
    $user->username = $request->username;
    $user->Email = $request->Email;
    $user->Address = $request->Address;
    $user->Gender = $request->Gender;
    $user->DOB= $request->day.$request->month.$request->year;
    $user->city = $request->city;
    $user->password = $request->password;
    $user->phone = $request->phone;
    
    
      $user->save();
  
    if ($request->hasFile('picture')){
        $id= $user->userID;
        $path= public_path("users");
        
        $imageName= $id.'_user_image_today.'.$request->picture->extension();
        $request->picture->move($path, $imageName);
        self::where('userID',$id)->update(['picture_name'=>$imageName]);
    }
    
    
    
}

}