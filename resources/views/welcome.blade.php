@extends('layouts.master')

@section('content')
@include('layouts.navbar')

<!-- Loading Icon -->
<div class="loading-bro" v-if="loading">
    <svg id="load" x="0px" y="0px" viewBox="0 0 150 150">
        <circle id="loading-inner" cx="75" cy="75" r="60"/>
    </svg>
</div><!-- Loading Icon -->

<!-- Start Header -->
<header id="header">
    <div class="container">
        <form action="#" method="POST">
            <h1>URL shorting is so easy</h1>
            <a class='text text-danger' v-text="errMsg"></a>
            <div class="input-group mb-3 m-auto">
                <input type="text" class="form-control" name="long_url" aria-label="longUrl" aria-describedby="inputIcon1" placeholder="URL" v-model="longUrl">
                <div class="input-group-prepend">
                    <button class="input-group-text" id="inputIcon1" type="submit" @click.prevent="shorten">
                        <i class="fa fa-link"></i>
                    </button>
                </div>
            </div>
            <div class="m-auto theLink" data-container="body" data-toggle="popover" data-placement="right" data-content="Copied">
                <a v-text="shortLink"></a>
            </div>
        </form>
    </div>
    <div class="clip-path d-none">
        <span class="clip-path1"></span>
        <span class="clip-path2"></span>
        <span class="clip-path3"></span>
    </div>
</header><!-- End Header -->

<!-- Start features -->
<section class="features">
    <div class="container">
        <h2>features</h2>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="contain">
                    <i class="fas fa-book"></i>
                    <h3>Short URLs</h3>
                    <p>Short Your URL Easly.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="contain">
                    <i class="fas fa-book"></i>
                    <h3>Short URLs</h3>
                    <p>Short Your URL Easly.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="contain">
                    <i class="fas fa-book"></i>
                    <h3>Short URLs</h3>
                    <p>Short Your URL Easly.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="contain">
                    <i class="fas fa-book"></i>
                    <h3>Short URLs</h3>
                    <p>Short Your URL Easly.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="contain">
                    <i class="fas fa-book"></i>
                    <h3>Short URLs</h3>
                    <p>Short Your URL Easly.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="contain">
                    <i class="fas fa-book"></i>
                    <h3>Short URLs</h3>
                    <p>Short Your URL Easly.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features -->

@endsection
