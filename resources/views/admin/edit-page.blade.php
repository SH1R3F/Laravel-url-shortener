@extends('layouts.admin')

@section('styles')
    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/css/froala_editor.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/css/froala_style.min.css" rel="stylesheet">

    <!-- Include JS file. -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/js/froala_editor.min.js'></script>
@endsection

@section('content')
    @include('admin.navbar')
    @include('admin.sidebar')
    <div class="new-page">
        <div class="container">
            <div class="global-title">
                <h4>New Page</h4>
                <i class="fa fa-users"></i>
                <span>
                    create an additional custom page
                </span>
            </div>
            <form action="#" method="POST">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Your page name" autofocus>
                </div>

                <div class="form-group">
                    <label for="name">Slug:</label>
                    <input type="text" class="form-control" placeholder="http://localhost/p/your-slug">
                </div>

                <div class="form-group">
                    <label for="name">Content</label>
                    <textarea id="pageContent" rows="15" class="form-control" placeholder="Your page content"></textarea>
                </div>

                {{ csrf_field() }}

                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>

            </form>
        </div>
    </div>
@endsection
@section('footerScripts')
    <script>
        $(document).ready(function(){
            $('#pageContent').froalaEditor({
                toolbarInline: false,
                heightMin: 300
            })
        });
    </script>
@endsection
