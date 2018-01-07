@extends('layouts.app')

@section('content')

    {!! Form::open(['action' => 'MessageController@store', 'method' => 'post']) !!}
        {{ Form::bsText('name') }}
        {{ Form::bsText('email') }}
        {{ Form::bsTextArea('message') }}
        {{ Form::bsSubmit('Submit',['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection