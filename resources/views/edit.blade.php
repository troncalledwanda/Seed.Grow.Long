@extends('layouts.layout')

@section('content')

<h1> Edit State </h1>

<form method="POST" action="/state/{{ $id->id }}">

	{{ method_field('PATCH') }}

	{{ csrf_field() }}

    <h2>Title</h2>
      <textarea name="title"></textarea>
    <h2>Quote</h2>
      <textarea name="quote"></textarea>
    <h2>Paragraph</h2>
      <textarea name="paragraph"></textarea>
    <button type="submit">Update</button>
</form>

<h1> Delete State </h1>

<form method="POST" action="/state/{{ $id->id }}">

	{{ method_field('DELETE') }}

	{{ csrf_field() }}

    <button type="submit">Delete</button>
</form>
@stop