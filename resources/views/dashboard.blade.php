@extends('laout.main')

@section('tittle')
dashboard
@endsection

@section('content')
<h1>hello world</h1>

@foreach($biodata as $bio)
<h2>{{$bio['name']}}</h2>
<h2>{{$bio['email']}}</h2>
@endforeach

@endsection