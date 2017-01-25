@extends('layouts.layout')

@section('content')

<h1> Create State </h1>

<form method="POST" action="/state">
  {{ csrf_field() }}
    <h1>Title</h1>
      <textarea name="title"></textarea>
    <h1>Quote</h1>
      <textarea name="quote"></textarea>
    <h1>Paragraph</h1>
      <textarea name="paragraph"></textarea>
    <button type="submit">Create</button>
</form>

@stop