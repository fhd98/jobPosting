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
 * Description of FormController
 *
 * @author fahad.hafeez
 */
class FormController extends Controller {

    //put your code here

    public function indexAction() {

        $data['error'] = '';
        $data['pageTitle'] = "User Form";
        $data['postedData'] = session()->get('postedData');
        $data['error'] = session()->get('error');
        return view('user.user-form', $data);
    }

    public function saveFormAction(Request $request) {
        $POST = request()->post();
        $validator = validator()->make($POST, [
            'name' => 'required|min:10',
            'email' => 'required| email',
                ], [
            'name.required' => 'Naam likh ',
            'name.min' => 'min 10 characters',
        ]);

        if ($validator->fails()) {
            return redirect('form')->with([
                        'postedData' => $POST,
                        'error' => $validator->errors()->first()
            ]);
        } 
        
        else {
                 
            
      $oUser= new userDetailModel();
      $response= $oUser->store($request);
     // echo "HEllo";
      return redirect ('user-info');
        }
    }

    public function editFormAction($id){

        $data= userDetailModel::find($id);
      // echo "<pre>";  print_r($data); exit;
        return view ('user.user-form',['postedData'=>$data] );
        
    }
    
    public function deleteFormAction($id){
  
            $delete= userDetailModel::find($id)->delete();
      return redirect ('user-info');
    }
    
}
