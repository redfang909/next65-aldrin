@extends('layout.app')

@section('title', 'Contact Us')

@section('header')
  <header class="inner">     
    <div id="banner" class="about-us">
    <div class="banner-bg" style="background-image: url({{ asset('images/contactus.jpg')}})"></div>
      <div class="inner-title">
        <h1>Contact us</h1>
      </div>      
    </div>
  </header>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="inner-content">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate.
                    </p>
                    <div class="contact-num">
                        <div>
                            <i class="ionic ion-android-call"></i> (322)4483-90
                        </div>
                        <div>
                            <i class="ionic ion-android-mail"></i> test@gmail.com
                        </div>
                    </div>

                    <div id="map" class="z-depth-1-half map-container">
                        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                    </div>                          
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-3">
                                        <input type="text" placeholder="Name" id="name" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-form mb-3">
                                        <input type="text" placeholder="Email" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-3">
                                        <input type="text" placeholder="Subject" id="subject" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">            
                                    <div class="md-form mb-3">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea">Message</textarea>
                                    </div>            
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">
                                        Send
                                    </button>
                                </div>
                            </div>               
                        </form>
                    </div>
                </div>
            </div>            
        </div>
      </div>
    </div>
  </div>
@endsection
