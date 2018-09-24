@extends('layouts.admin')
@section('content')
    @include('admin.navbar')
    @include('admin.sidebar')
    <!-- Pages -->
    <div class="users-management">
        <div class="container">
            <div class="table-title">
                <h4>Pages</h4>
                <i class="fa fa-files-o"></i>
                <span>
                    Addational website pages.
                </span>
            </div>
            <table class="table admins">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Name</th>
                        <th scope="col" style="width: 30%">slug</th>
                        <th scope="col" style="width: 30%">Action</th>
                        <th scope="col" style="width: 20%">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(0, 10) as $x)
                        <tr>
                            <td>Benyamine Nedal</td>
                            <td>benyaminehamm@gmail.com</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                                <a href="{{route('manage.edit-page')}}">
                                    <button class="btn btn-default btn-sm">Edit</button>
                                </a>
                            </td>
                            <td>August 20, 2017</td>
                        </tr>
                    @endforeach
                </tbody>
            </table><!-- Pages -->
        </div>
    </div>
@endsection
