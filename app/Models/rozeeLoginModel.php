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
 * Description of rozeeLoginModel
 *
 * @author fahad.hafeez
 */
class rozeeLoginModel extends Model{
    //put your code here
    protected $table= 'rozeeLogin';
    protected $primaryKey='userID';
    public $timestamps= false;
    
    public function store(Request $request){
        $user= new rozeeLoginModel;
        
            $user->userName = $request->username;
            $user->password = $request->password;

    }
    
}
