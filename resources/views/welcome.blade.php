@extends('layouts/master')

<?php $name = config('app.name') ?>

@section('page-title')
Admin Page | {{ $name }}
@endsection

@section('content')
    <div class="about">
        <h2>About me</h2>
        <div class="row">
            <p>{{ $aboutMeContent }}</p>
            <img src="{{ asset('img/IMG_0110.jpg') }}" alt="">
        </div>
    </div>
    <div class="contact">
        <h2>Contact me</h2>
        <p>{{ $contactMeContent }}</p>
    </div>
@endsection

<!--
    #3c4049 - Black - Header
    #22dcd7 - Green - Text background