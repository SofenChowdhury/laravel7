@extends('layouts.app')
<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="flex-center position-ref full-height">
                            <form method="post" action="{{route('todo.update',[$todoArr->id])}}">
                                @csrf

                                <table id="customers">
                                    <tr>
                                        <td>Name</td>
                                        <td><input type="textname" name="name" required value="{{$todoArr->name}}"/></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type="submit" name="submit"/></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Todo</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <style>--}}
{{--        #customers {--}}
{{--            font-family: Arial, Helvetica, sans-serif;--}}
{{--            border-collapse: collapse;--}}
{{--            width: 100%;--}}
{{--        }--}}

{{--        #customers td, #customers th {--}}
{{--            border: 1px solid #ddd;--}}
{{--            padding: 8px;--}}
{{--        }--}}

{{--        #customers tr:nth-child(even){background-color: #f2f2f2;}--}}

{{--        #customers tr:hover {background-color: #ddd;}--}}

{{--        #customers th {--}}
{{--            padding-top: 12px;--}}
{{--            padding-bottom: 12px;--}}
{{--            text-align: left;--}}
{{--            background-color: #4CAF50;--}}
{{--            color: white;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <a href="todo_show">Back</a><br/><br/>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="flex-center position-ref full-height">--}}
{{--    <form method="post" action="{{route('todo.update',[$todoArr->id])}}">--}}
{{--        @csrf--}}

{{--        <table id="customers">--}}
{{--            <tr>--}}
{{--                <td>Name</td>--}}
{{--                <td><input type="textname" name="name" required value="{{$todoArr->name}}"/></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td><input type="submit" name="submit"/></td>--}}
{{--            </tr>--}}
{{--        </table>--}}
{{--    </form>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
