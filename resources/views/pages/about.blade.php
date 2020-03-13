@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}} 
@endsection


@section('description')
  <p>
          A True Story:<br/>
 
Once there was this poet/sculptor whose work was so significant, so beyond his time and full of honesty and inspiration that he was dubbed the Savage Messiah.

Savage Messiah – a hero who truly evokes the spirit of our own hearts.</p>
          <p>
          So when we decided to plunge into the pizza business in 1990, it just seemed appropriate that it be called Savage Pizza. Like its namesake, what grew out of this business is a reputation for honesty and inspiration. Honesty of ingredients – fresh, from-scratch every day – that inspire sauces and culinary creations that have made Savage Pizza one of the most successful and popular neighborhood businesses in the Little Five Points/Virginia-Highlands area.
          </p>
@endsection

@section('content')
  <div id="about-page">
      <div class="content-box">
        <div class="row">
        <div class="col-md-6 " >
          <h1>About Page</h1>
          <p>
          A True Story:<br/>
 
Once there was this poet/sculptor whose work was so significant, so beyond his time and full of honesty and inspiration that he was dubbed the Savage Messiah.

Savage Messiah – a hero who truly evokes the spirit of our own hearts.</p>
          <p>
          So when we decided to plunge into the pizza business in 1990, it just seemed appropriate that it be called Savage Pizza. Like its namesake, what grew out of this business is a reputation for honesty and inspiration. Honesty of ingredients – fresh, from-scratch every day – that inspire sauces and culinary creations that have made Savage Pizza one of the most successful and popular neighborhood businesses in the Little Five Points/Virginia-Highlands area.
          </p>
          </div>
        <div class="col-md-6">
          <img src="/img/savage-pics/IMG_01225B15D.png" class="img-fluid">
        </div>
        </div>
      </div>
  </div> 
@endsection