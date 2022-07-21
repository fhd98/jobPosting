<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\betModel;
use Illuminate\Support\Facades\Redirect;

/**
 * Description of betFormController
 *
 * @author fahad.hafeez
 */
class betFormController extends Controller {
    
    //put your code here
public function indexAction() {

        $data['error'] = '';
        $data['pageTitle'] = "User Form";
        $data['postedData'] = session()->get('postedData');
        $data['error'] = session()->get('error');
        return view('betForm', $data);
    }

    public function saveFormAction(Request $request) {
        $POST = request()->post();
        $validator = validator()->make($POST, [
            'name' => 'required|min:10',
            'email' => 'required| email',
            'address' => 'required|min:10',
            'gender' => 'required|',
            'zip' => 'required|',
            'city' => 'required|',
                ], [
            'name.required' => 'Naam likh ',
            'name.min' => 'min 10 characters',
        ]);

        if ($validator->fails()) {
            return redirect('betFormm')->with([
                        'postedData' => $POST,
                        'error' => $validator->errors()->first()
            ]);
        } 
        
        else {
                 
            
      $oUser= new betModel();
      $response= $oUser->store($request);
     // echo "HEllo";
      return redirect ('bet-info');
        }
    }
    
    public function getDetails(){
//        $user= userDetailModel::all();
//        $data=compact('user');
//
//        return  view('user-info')->with($data);
        
        
        
        
        $ooPost= new betModel();
        $data= $ooPost::all();
        $data = $ooPost::all()->sortByDesc("created_at");
        return view('betDisplay', ['user'=>$data] );
        
    }
    
    

    public function editFormAction($id){

        $data= betModel::find($id);
      // echo "<pre>";  print_r($data); exit;
        return view ('betForm',['postedData'=>$data] );
        
    }
    
    public function deleteFormAction($id){
  
            $delete= betModel::find($id)->delete();
      return redirect ('bet-info');
    }
    
    
    
    
    
}
