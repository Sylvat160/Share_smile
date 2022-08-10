@extends('layouts.navbar')
@section('content')

<div class="uk-position-relative uk-visible-toggle data-uk-slider=" {infinite: true}"" tabindex="-1" uk-slideshow="animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="{{asset('images/Share_Smiles_logo.png')}}" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h2 class="uk-margin-remove">Center</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="{{asset('images/pic2.png')}}" alt="" uk-cover>
            <div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
                <h3 class="uk-margin-remove">Bottom</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

</div>




    <!-- <div class="carousel carousel-slider"> -->
    <!-- <a class="carousel-item" href="#one!"><img src="{{asset('images/pic2.png')}}" height="400"></a>
    <a class="carousel-item" href="#two!"><img src="{{asset('images/Share_Smiles_logo.png')}}"></a>
    <a class="carousel-item" href="#three!"><img src="{{asset('images/pic2.png')}}"></a>
    <a class="carousel-item" href="#four!"><img src="{{asset('images/pic2.png')}}"></a>
    <a class="carousel-item" href="#five!"><img src="{{asset('images/pic2.png')}}"></a>
  </div> -->
    @endsection