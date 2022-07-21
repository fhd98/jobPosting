<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of persons
 *
 * @author fahad.hafeez
 */
class persons extends Model {
    //put your code here
    
    public static function getAll(){
        return [
            ['name'=>'Fahad', 'gender'=>'Male'],
            ['name'=>'Hafeez', 'gender'=>'Male'],
            ['name'=>'Aims', 'gender'=>'Female'],
        ];
    }
}
