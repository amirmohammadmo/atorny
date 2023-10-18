@extends('panel.user.index')
@section('contend')
@foreach($file as $fil)

    {{$fil->name}}

@endforeach
@endsection
