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
 * Description of rozeeModel
 *
 * @author fahad.hafeez
 */
class rozeeModel extends Model {
    //put your code here
    protected $table= 'rozeeJobs';
    protected $primaryKey='userID';
    
public function store (Request $request){
    if (!empty($request->userID)){
           $user= rozeeModel::find($request->userID);
       }  
    
    else {
    
    $user= new rozeeModel;
    }
   // $obj= userDetailModel::findOrFail($request->id);
    
    $user->title = $request->title;
    $user->description = $request->description;
    $user->gender = $request->gender;
    $user->industry = $request->industry;
    $user->date= $request->date;
    $user->skills = implode(',',$request->skills);
    
    
      $user->save();
  
    if ($request->hasFile('pdf')){
        $id= $user->userID;
        $path= public_path("users");
        
        $pdfName= $id.'_user_bet_image_test.'.$request->pdf->extension();
        $request->pdf->move($path, $pdfName);
        self::where('userID',$id)->update(['pdf'=>$pdfName]);
    }
    
    
    
}
    
}
