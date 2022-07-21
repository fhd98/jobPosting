<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usern;

/**
 * Description of userController
 *
 * @author fahad.hafeez
 */
class userController extends Controller {
    
    public function signupAction(Request $request){
      // echo "HEllo";
      //  
        $oUser= new usern();
      $response= $oUser->store($request);
    }
    
    
    
    //put your code here
}
