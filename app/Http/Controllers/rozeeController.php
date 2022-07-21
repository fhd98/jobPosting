<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\rozeeModel;

use App\Models\rozeeLoginModel;

use Illuminate\Support\Facades\Redirect;

/**
 * Description of rozeeController
 *
 * @author fahad.hafeez
 */
class rozeeController extends Controller {
    //put your code here
    
    public function indexAction() {

        $data['error'] = '';
        $data['pageTitle'] = "Job Form";
        $data['postedData'] = session()->get('postedData');
        //echo "<pre>";        print_r($data); exit;
        $data['error'] = session()->get('error');
        return view('Rozee.post-job', $data);
    }
    
    public function saveFormAction(Request $request) {
        $POST = request()->post();
        $validator = validator()->make($POST, [
            'title' => 'required|max:20',
            'description' => 'required|max:150',
            'gender' => 'required',
            'industry' => 'required',
            'date' => 'required',
            'skills' => 'required'
          //  'pdf' => 'required',
                ]);

        if ($validator->fails()) {
            return redirect('rozee-postjob')->with([
                        'postedData' => $POST,
                        'error' => $validator->errors()->first()
            ]);
        }
        
        else {
                 
            
      $oUser= new rozeeModel;
      $response= $oUser->store($request);
      
      
     // echo "HEllo";
     // exit;
      
     return redirect ('job-info');
           
}

}

    public function getDetails(){

        
        $ooPost= new rozeeModel;
        $data= $ooPost::all();
        $data = $ooPost::all()->sortByDesc("created_at");
        return view('Rozee.dashboard', ['user'=>$data] );
        
    }
    
    public function editFormAction($id){

        $data= rozeeModel::find($id);
        return view ('Rozee.post-job',['postedData'=>$data] );
        
    }
    
    public function deleteFormAction($id){
  
            $delete= rozeeModel::find($id)->delete();
      return redirect ('job-info');
    }

    
    public function userLogin(Request $request){
        $verify= rozeeLoginModel::where('userName', $request->username)->where('password', $request->password)->first();
        if(empty($verify)){
            return redirect ('rozee-login');
        }
        else{
            return redirect ('rozee-dashboard');
        }
    }

}
