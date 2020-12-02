<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_Test extends Controller
{
    function select() {
//        echo "select";
//       $result= DB::table('users')->where('id','=',5)->exists();
//        $result= DB::table('users')->where('id','=',8)->doesntExist();
//        $result= DB::table('users')->where('id','=',5)->get();
//        $result= DB::table('users')->count();
//        $result= DB::table('users')->max('id');
//        $result= DB::table('users')->min('id');
//        $result= DB::table('users')->avg('id');
//        $result= DB::table('users')->get();
//        $result= DB::table('users')->select('id')->get();
//        $result= DB::table('users')->select('id','name')->get();
//        $result= DB::table('users')->select(array('id','name'))->get();
//        $result= DB::select(DB::raw('select * from users'));
//        $result= DB::table('users')->orderBy('id','asc')->get();
        $result= DB::table('users')->orderBy('id','desc')->get();
        echo '<pre>';
        print_r($result);
    }
    
    function insert() {
        DB::table('users')->insert(
            array('name'=>'Mahmud','email'=>'mahmud@gmail.com','password'=>md5('mahmud'))
        );
    }
    
    function update() {
        DB::table('users')->where('id',1)->update(
            array('name'=>'sofen','email'=>'sofen@gmail.com')
        );
    }
    
    function delete() {
        DB::table('users')->where('id',2)->delete();
    }
}
