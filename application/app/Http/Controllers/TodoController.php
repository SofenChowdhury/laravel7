<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->paginate(2);
        return view('home',['data'=>$data]);
//        return view('todo_show')->with('todoArr',Todo::all());
//        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request->input('name');
        $res=new Todo;
        $res->name=$request->input('name');
        $res->save();
        
        $request->session()->flash('msg','Data submitted from store  ');
        return redirect('todo_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('todo_show')->with('todoArr',Todo::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo,$id)
    {
        return view('todo_edit')->with('todoArr',Todo::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
//        print_r($request->input());
        $res=Todo::find($request->id);
        $res->name=$request->input('name');
        $res->save();
    
        $request->session()->flash('msg','Data updated');
        return redirect('todo_show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo,$id)
    {
//        echo '<pre>';
//        print_r($id);
        Todo::destroy(array('id',$id));
        
        return redirect('todo_show');
    }
}
