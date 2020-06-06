@php
    $homepage = Route::currentRouteName() == 'homepage' ? 'active' : '';
    $aboutus = Route::currentRouteName() == 'aboutus' ? 'active' : '';
    $contactus = Route::currentRouteName() == 'contactus' ? 'active' : '';
@endphp
<div id="menu" class="animate">
    <div class="mobile navbar-expand-md navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="ionic ion-android-menu"></i>
        </button>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="logo"></a>
            </div>
            <div class="col-md-6">
                <nav class="navbar navbar-expand-md navbar-light">                  
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link {{ $homepage }}" href="/">Home</a>
                    <a class="nav-item nav-link {{ $aboutus }}" href="/aboutus">About Us</a>
                    <a class="nav-item nav-link {{ $contactus }}" href="/contactus">Contact Us</a>
                    </div>
                </div>
                </nav>
            </div>
        </div> 
    </div>               
</div>