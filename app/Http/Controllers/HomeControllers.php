<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of HomeControllers
 *
 * @author fahad.hafeez
 */
class HomeControllers extends Controller {
    //put your code here

    public function testapi(){
        
        //echo "Hello";
        $data= \App\Models\persons::getAll();
        return $data;
    }
    
    public function APItest(){
        return request()->post();
        //echo "Hello";
        $data= \App\Models\persons::getAll();
        return $data;
    }
    public function fetchTest(){
        return ['num'=>'124'];
    }
    
}
