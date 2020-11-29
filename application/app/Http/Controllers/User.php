<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index($id='') {
//        echo $id,"\n";
//        echo "Hello Index\n".$id;
        return view('user.header').view('user.index',array('user_id'=>$id)).view('user.footer');
    }
    function about(Request $r,$id='') {
//        echo $id,"\n";
//        echo "Hello Index\n".$id;
//        return view('user.header').view('user.about').view('user.footer');
        if ($r->session()->has('name')) {
            return view('user.header').view('user.about').view('user.footer');
        }else {
            $r->session()->flash('error','Access denied');
            return redirect('login');
        }
    }
    function services($id='') {
//        echo $id,"\n";
//        echo "Hello Index\n".$id;
        return view('user.header').view('user.services').view('user.footer');
    }
    function session_set(Request $r) {
//        echo "session_set";
//        $_SESSION['name']='sofen';
        $r->session()->put('name','sofen');
    }
    function session_get(Request $r) {
//        echo "session_get";
//        echo $_SESSION['name'];
        echo $r->session()->get('name');
    }
    function session_remove(Request $r) {
//        echo "session_get";
//        echo $_SESSION['name'];
        $r->session()->forget('name');
    }
    function session_check(Request $r) {
//        echo "session_get";
//        echo $_SESSION['name'];
        if ($r->session()->has('name')) {
            echo "Yes";
        }else {
            echo "No";
        }
    }
    function userLoginSubmit(Request $r) {
        $r->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        echo $email=$r->input('email');
        echo $password=$r->input('password');
        if($email=='s@gmail.com' && $password=='sofen') {
            $r->session()->put('name',$email);
            return redirect('about');
        }else {
            $r->session()->flash('error','Please enter valid login details');
            return redirect('login');
        }
    }
    function logout(Request $r) {
//        echo "session_get";
//        echo $_SESSION['name'];
        $r->session()->forget('name');
    }
}
