<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\userDetailModel;
use Illuminate\Support\Facades\Redirect;

/**
 * Description of testController
 *
 * @author fahad.hafeez
 */
class testController extends Controller {
    //put your code here
    public function detailsAction(Request $request){
      // echo "HEllo";
      //  
        $oUser= new userDetailModel();
      $response= $oUser->store($request);
     // echo "HEllo";
      return redirect ('user-info');
    }
    
    public function getDetails(){
//        $user= userDetailModel::all();
//        $data=compact('user');
//
//        return  view('user-info')->with($data);
        
        
        
        
        $ooPost= new userDetailModel();
        $data= $ooPost::all();
        $data = $ooPost::all()->sortByDesc("created_at");
        return view('user-info', ['user'=>$data] );

       // 
     //echo "<pre>";        print_r($data);
     
     //return view('user-info', ['user' => userDetailModel::latest()->get()]);
       //echo "HEllo";
       // return view ('user-info');
       // return view('user-info', ['data',$data]);

    }
    
}
