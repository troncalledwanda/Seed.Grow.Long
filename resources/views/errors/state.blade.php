@extends('layouts.layout')

@section('content')

    <table>
    <tr><td>id</td><td>title</td><td>#ofimages</td></tr>

  @foreach($content as $currentState)

    <tr>
    <td>{{{$currentState->id}}}</td>
    <td>{{{$currentState->title}}}</td>
    <td>{{{$currentState->images->count()}}}</td>
    <td><a href="{{ route('state.edit', ['id' => $currentState->id]) }}">Edit</td>

    <td>
      <form method="POST" action="/state/{{ $currentState->id }}">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
      <button type="submit">Delete</button>
      </form>
    </td>
    </tr>
  @endforeach
    </table>
@stop