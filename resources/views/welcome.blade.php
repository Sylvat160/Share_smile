@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="{{ asset('css/welcome.css')}}">
<script rel="stylesheet" src="{{ asset('js/welcome.js')}}" defer></script>

<section class="slider-pages">

    <article class="js-scrolling__page js-scrolling__page-1 js-scrolling--active">
        <div class="slider-page slider-page--left">
            <div class="slider-page--skew">
                <div class="slider-page__content">
                </div>
            </div>
        </div>

        <div class="slider-page slider-page--right">
            <div class="slider-page--skew">
                <div class="slider-page__content">
                    <h1 class="slider-page__title slider-page__title--big white-text">
                        Save, Heal and Give them hope...
                    </h1>
                    <h2 class="slider-page__title white-text">
                        <u>ShareTheSmile</u>
                        Foundation
                    </h2>
                    <!-- <p class="slider-page__description grey-text">
                        Please scroll down or press the down arrow on your keyboard
                    </p> -->
                </div>
            </div>
        </div>
    </article>


    <article class="js-scrolling__page js-scrolling__page-2">
        <div class="slider-page slider-page--left">
            <div class="slider-page--skew">
                <div class="slider-page__content">
                    <h1 class="slider-page__title second-slide-text">
                        No one can take you that one ...
                    </h1>
                    </p>
                </div>
            </div>
        </div>

        <div class="slider-page slider-page--right">
            <div class="slider-page--skew">
                <div class="slider-page__content">
                </div>
            </div>
        </div>
    </article>


    <article class="js-scrolling__page js-scrolling__page-3">
        <div class="slider-page slider-page--left">
            <div class="slider-page--skew">
                <div class="slider-page__content">
                </div>
            </div>
        </div>

        <div class="slider-page slider-page--right">
            <div class="slider-page--skew">
                <div class="slider-page__content">
                    <h1 class="slider-page__title white-text">
                        Final is just the beginning
                    </h1>
                    <p class="slider-page__description">
                        Feel free to follow us on <a class="slider-page__link" href="https://twitter.com/WispProxy" target="_blank">Twitter</a>
                        and check of <a class="slider-page__link" href="https://codepen.io/WispProxy/pens/public" target="_blank">my other works</a>
                    </p>
                </div>
            </div>
        </div>
    </article>

</section>

@endsection