@extends('layouts.app')

@section('content')
    <div id="p1" class="mdl-progress mdl-js-progress" style="width: 100%;"></div>
    @foreach($pictures as $pic)
        <img src="{!! $pic->urlLittle !!}" style="margin: 10px;">
    @endforeach

{!! Form::open(array('route' => 'picture_send', 'files' => true, 'method' => 'post', 'id' => 'send_pic')) !!}
{!! Form::material_file_input('pictures') !!}
{!! Form::close() !!}
@endsection