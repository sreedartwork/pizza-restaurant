@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}} 
@endsection



@section('content')
    <div id="contact-page">
      
      <div class="content-box">
        <div class="row">
          <div class="col-md-6">
            <h1>Contact Us</h1>
            <h3>Address</h3>
            <p>
              {{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
              {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
            </p>
            <h3>Phone Number</h3>
            <p>
              <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
            </p>
          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d829.1826621729522!2d-84.34924156361336!3d33.76762554377503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f506a8af0a4871%3A0xe4652d7dd70bf7fa!2s484%20Moreland%20Ave%20NE%2C%20Atlanta%2C%20GA%2030307!5e0!3m2!1sen!2sus!4v1584028138768!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
@endsection








{{-- "/img/savage-pics/IMG_01225B15D.png" --}}