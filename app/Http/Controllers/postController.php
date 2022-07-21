<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\post;

/**
 * Description of postController
 *
 * @author fahad.hafeez
 */
class postController {
    //put your code here
    public function postAction(Request $request){
      // echo "HEllo";
      //  
        $oPost= new post();
      $response= $oPost->store($request);
      return redirect ('dashboard');
    }
    
    public function getPost(){
        $ooPost= new post();
       // $data= $ooPost::all();
        $data = $ooPost::all()->sortByDesc("created_at");

       
        return view ('dashboard', ['user'=>$data] );
    }
    
    
}
