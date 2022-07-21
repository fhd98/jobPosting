<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of post
 *
 * @author fahad.hafeez
 */
class post extends Model {
    //put your code here
    protected $table= 'post';
    protected $primaryKey='Pid';
    

public function store (Request $request){

    $post= new post;
    
    $post->content= $request->text;
    
    $post->save();
    
        if ($request->hasFile('picture')){
        $id= $post->Pid;
        $path= public_path("users");
        
        $imageName= $id.'_post_image_today.'.$request->picture->extension();
        $request->picture->move($path, $imageName);
        self::where('Pid',$id)->update(['image'=>$imageName]);
    }

    
    
}



    
}
