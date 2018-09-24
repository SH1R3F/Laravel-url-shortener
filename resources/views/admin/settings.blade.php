@extends('layouts.admin')
@section('content')
    @include('admin.navbar')
    @include('admin.sidebar')
    <div class="settings">
        <div class="container-fluid">
            <div class="global-title">
                <h4>General Settings</h4>
                <i class="fa fa-cog"></i>
                <span>General website settings</span>
            </div>

            <form action="#" method="POST">

                <!-- Site Title -->
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Site Title: </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Laravel">
                    </div>
                </div><!-- Site Title -->

                <!-- Site Description -->
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Site Description: </label>
                    <div class="col-sm-4">
                        <textarea class="form-control" rows="5" placeholder="This is another Laravel project"></textarea>
                    </div>
                </div><!-- Site Description -->

                <div class="global-title">
                    <h4>Social Links</h4>
                    <i class="fa fa-share-alt"></i>
                    <span>Your social media links</span>
                </div>

                <div class="social-media">

                    <!-- Facebook -->
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Facebook: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="https://www.facebook.com/username">
                        </div>
                    </div><!-- Facebook -->

                    <!-- Twitter -->
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Twitter: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="https://www.twitter.com/username">
                        </div>
                    </div><!-- Twitter -->

                    <!-- Google plus -->
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Google Plus: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="https://plus.google.com/+username">
                        </div>
                    </div><!-- Google plus -->

                    <!-- Linked In -->
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Linked In: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="https://www.linkedin.com/username">
                        </div>
                    </div><!-- Linked In -->

                    <!-- DRIBBLE URL -->
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Dribble: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="https://www.dribble.com/username">
                        </div>
                    </div><!-- DRIBBLE URL -->

                </div>
            </form>
        </div>
    </div>
@endsection
