@extends('layouts.layout')

@section('content')

<!-- body overview -->
<div class="overviewbackground">
  @foreach($content as $currentState)
    <ul class="transparency transparency__textcontent">
      <li>{{{$currentState->title}}}</li>
      <li>Lorem Ipsum</li>
      <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
    </ul>
  @endforeach
</div>

<!-- mediaboxes -->
<div class="site-media">
  @foreach($content as $currentState)
    <div class="media">
        <div class="media__heading">
            <b> {{{$currentState->title}}} </b> <span> - </span>
            <i>{{{$currentState->quote}}}</i>
        </div>
        <div class="media__body">
          @foreach($currentState->images as $currentImage)
            <img class="media__figure" src="{{{$currentImage->url}}}" />
          @endforeach
            <div class="media__text">
                <p>{{{$currentState->paragraph}}}</p>
            </div>
        </div>
        <ul class="media__footer linkicons linkicons-colorblack">
            <li><i class="fa fa-leanpub" aria-hidden="true"></i></li>
            <li><i class="fa fa-money" aria-hidden="true"></i></li>
        </ul>
    </div>
  @endforeach
</div>

@stop