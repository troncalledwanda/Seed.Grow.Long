@extends('layouts.layout')

@section('content')

<div class="overviewbackground">
  <form method="POST" action="post">
  {{ csrf_field() }}
    <ul class="transparency transparency__textcontent">
      <li><label>Title</label></li>
      <li><textarea name="title"></textarea></li>
    </ul>
    <ul class="transparency transparency__textcontent">
      <li><label>Quote</label></li>
      <li><textarea name="quote"></textarea></li>
    </ul>
    <ul class="transparency transparency__textcontent">
      <li><label>Paragraph</label></li>
      <li><textarea name="paragraph"></textarea></li>
    </ul>
    <button type="submit">Add information.</button>
  </form>
</div>

@stop