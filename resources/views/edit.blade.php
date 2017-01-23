@extends('layouts.layout')

@section('content')

<h1> Edit State </h1>

<form method="POST" action="/state/{{ $id->id }}">
	{{ csrf_field() }}

	{{ method_field('PATCH') }}


    <h2>Title</h2>
      <textarea name="title"></textarea>
    <h2>Quote</h2>
      <textarea name="quote"></textarea>
    <h2>Paragraph</h2>
      <textarea name="paragraph"></textarea>
    <button type="submit">Create</button>
</form>
@stop