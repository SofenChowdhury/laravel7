{{--{{$data['name']}}--}}
{{--@if($data['name'] == 'sofen')--}}
{{--    {{'fine'}}--}}
{{--@else--}}
{{--    {{'No'}}--}}
{{--@endif--}}
@for($i=0;$i<5;$i++)
    {{$i}}
@endfor
@foreach($data as $key=>$val)
    {{$val}}
    <x-sidebar name={{$val}} age={{$key}} />
@endforeach
{{--<x-sidebar name="sofen" age="28" />--}}
