<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class UserProfile extends Controller
{
    function index() {
//        return Profile::all();
//        return Profile::where('id',1)->get();
//        return Profile::find(1);
//        return Profile::first();
//        return Profile::max('id');
//        return Profile::min('id');
//        $res=Profile::find(4);
//        Profile::destroy(array(3,4,17));
//        $res=new Profile();
//        $res->name='rms';
//        $res->email='rms@gmail.com';
//        $res->password=md5('rms');
//        $res->save();
        $res=Profile::find(18);
        $res->name='rmsChowdhury';
        $res->email='rms@gmail.com';
        $res->password=md5('rms');
        $res->save();
        return Profile::all();
    }
}
