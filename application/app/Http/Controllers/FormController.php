<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function index(Request $request) {
    
        $request->validate([
            'name'=>'required|min:3|max:10',
            'email'=>'required|email',
            'doc'=>'required|mimes:jpeg,png|max:1024|dimensions:min_width=100,min_height=200'
        ]);
        echo $request->file('doc')->store('media');
//        echo "Hello";
//        return $request->post();
//        return $request->post("name");
//        return $request->get("name");
//        return $request->query();
//        return $request->method();
//        return $request->path();
//        return $request->url();
    }
}
