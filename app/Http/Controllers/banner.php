<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Create connection

class Banner extends Controller
{
    
 
    public function store (Request $request){
      
      
      $file = $request->file('banner');
      $name = $file->getClientOriginalName();
      $file->move('images',$name);
      
      app('db')->insert('insert into products (banner_name) values (?)',[$name]);
      
      
      }


    public function test()
      {  
        
           
        $results = app('db')->select("SELECT banner_name FROM products");
        return $results;
        
    }

    }
  

?>