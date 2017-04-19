@extends('layouts.inner')

@section('content')
   {{dump(Auth::user())}}
@endsection