
@extends('layouts.layout')

@section('page-specific-scripts')


<script>
var demo = new Vue({

  el: '#myTable',
  methods:  {
      event.target.closest('tr').remove();
      var xhr = new XMLHttpRequest();
      xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
      xhr.onload = function(){
       alert('Done deleting from database.');
      }
      xhr.send();
    }
  }
})
</script>

@stop

@section('content')

    <table id='myTable'>
    <tr><td>id</td><td>title</td><td>#ofimages</td></tr>

  @foreach($content as $currentState)

    <tr>
    <td>{{{$currentState->id}}}</td>
    <td>{{{$currentState->title}}}</td>
    <td>{{{$currentState->images->count()}}}</td>
    <td><a href="{{ route('state.edit', ['id' => $currentState->id]) }}">Edit</td>
    </tr>
  @endforeach
    </table>

@stop