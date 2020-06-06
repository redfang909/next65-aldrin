@extends('layout.app')

@section('title', 'Homepage')

@section('header')
  <header>     
    <div id="banner">
      <div class="banner-bg"></div>
      <div class="banner-title">
        <div>
          <h1>Demo</h1>
          <p>Plus65 Test</p>
        </div>          
      </div>           
      <div class="arrow-box">
        <div class="stage">
          <a href="#" class="mouse-box bounce-1"></a>
        </div>
      </div>
    </div>    
  </header>
@endsection

@section('content')
  <div id="service" class="block">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="row box">
            <div class="col-lg-4">
              <div class="service-icon">
                <img src="images/graphic-img.jpg" alt="" class=""/>
              </div>
            </div>
            <div class="col-lg-8">
              <h3>Graphic Design</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="row box">
            <div class="col-lg-4">
              <div class="service-icon">
                <img src="images/web-dev-img.jpg" alt="" class=""/>
              </div>
            </div>
            <div class="col-lg-8">
              <h3>Web Development</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="row box">
            <div class="col-lg-4">
              <div class="service-icon">
                <img src="images/marketing-img.jpg" alt="" class=""/>
              </div>
            </div>
            <div class="col-lg-8">
              <h3>Marketing</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="expertise" class="block">
    <div class="container">
      <div class="content">
        <h1>Our Expertise</h1>
        <div class="row">
          <div class="col-md-4">
            <div class="expertise-percentage">
              <div class="expert-box">
                <div class="percent">
                  <div style="width: 90%;">
                    <span>90%</span>
                  </div>                    
                </div>
                <h3>Branding</h3>
              </div>
              <div class="expert-box">
                <div class="percent">
                  <div style="width: 80%;">
                    <span>80%</span>
                  </div>                    
                </div>
                <h3>Design</h3>
              </div>
              <div class="expert-box">
                <div class="percent">
                  <div style="width: 98%;">
                    <span>98%</span>
                  </div>                    
                </div>
                <h3>Development</h3>
              </div>
            </div>
          </div>
          <div class="col-md-8">              
            <div class="description">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.                
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.                
              </p>
            </div>
          </div>
        </div>
      </div>        
    </div>
  </div>
  <div id="magic" class="block">
    <div class="magic-img"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-7 offset-md-5">
          <div class="magic-content">
            <h1>
              Let's make magic
            </h1>
            <div class="description">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also            
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also            
              </p>
            </div>    
          </div>                   
        </div>
      </div>
    </div>
  </div>
@endsection
