@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quis laudantium iusto culpa soluta cupiditate eum, distinctio porro laboriosam delectus. Dolore exercitationem tempore consequatur officia placeat vel vero, nobis illo.</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection
