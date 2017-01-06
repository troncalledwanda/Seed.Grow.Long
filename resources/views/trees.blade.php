@extends('layouts.layout')

@section('content')
<?php 
$content = array(
  "Seeding" => array("quote" => "Don't judge each day by the harvest you reap but by the seeds that you plant. - Robert Louis Stevenson", 
    "images" => array("/images/treeplanting.png")),
  "Growth" => array( "images" => array("/images/AngelOakTree_articleSpan02.jpg"),
    "quote" => "Liberty, when it begins to take root, is a plant of rapid growth. - George Washington "
   ),
  "Longevity" => array("quote" => "Seven thousand years is just one day at a time. - Terry Pratchett ", 
    "images" => array("/images/23070950-Young-tree-seedling-grow-from-old-stump-Stock-Photo.jpg",
    "/images/trees-die-of-old-age.jpg"))
  );
?>

<!-- body overview -->
<div class="overviewbackground">
  @foreach($content as $key => $value)
    <ul class="transparency transparency__textcontent">
      <li>{{{$key}}}</li>
      <li>Lorem Ipsum</li>
      <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
    </ul>
  @endforeach
</div>

<!-- mediaboxes -->
<div class="site-media">
  @foreach($content as $key => $value)
    <div class="media">
        <div class="media__heading">
            <b> {{{$key}}} </b> <span> - </span>
            <i>{{{$value["quote"]}}}</i>
        </div>
        <div class="media__body">
          @foreach($value["images"] as $image)
            <img class="media__figure" src="{{{$image}}}" />
          @endforeach
            <div class="media__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec   quam quam, um eget ligula     incidunt dictum ex. Integer   id odio egestas, ultricies  et, dapibus dolor. Donec  finibus     s felis, sit amet eleifend ligula ue ut. Integer  ullamcorper magna in aliquet     suscipit. r luctus, est   molestie pharetra, mi enim molestie metus, ut egestas felis    nunc a  s. as ultricies, lorem nec finibus feugiat, ligula odio    tempus lectus,     consectetur magna eu enim. Nunc eget  tellus ut lectus egestas eleifend eu neque. In   hac habitasse   platea st. Donec condimentum vulputate re. Quisque pharetra     varius  turpis, eu hendrerit lorem tesque a. bitur varius     massa vel arcu blandit tempus.  Mauris porta id lacus non     Cras tristique, ligula eu tempor consectetur, est orci  vehicula est,   aoreet ante  quis justo. Quisque finibus egestas nisl   tempus faucibus.</p>
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