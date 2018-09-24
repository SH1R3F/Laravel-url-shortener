@extends('layouts.admin')
@section('content')
    @include('admin.navbar')
    @include('admin.sidebar')
    <!-- Admins -->
    <div class="users-management">
        <div class="container">
            <div class="table-title">
                <h4>Admins</h4>
                <i class="fa fa-users"></i>
                <span>
                    Adminstrators of the website.
                </span>
            </div>
            <table class="table admins">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Name</th>
                        <th scope="col" style="width: 30%">Email</th>
                        <th scope="col" style="width: 17%">Role</th>
                        <th scope="col" style="width: 13%">Action</th>
                        <th scope="col" style="width: 20%">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(0, 10) as $x)
                        <tr>
                            <td>Benyamine Nedal</td>
                            <td>benyaminehamm@gmail.com</td>
                            <td>
                                <select class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                            <td>August 20, 2017</td>
                        </tr>
                    @endforeach
                </tbody>
            </table><!-- Admins -->

            <!-- All Users -->
            <div class="table-title">
                <h4>Users</h4>
                <i class="fa fa-users"></i>
                <span>
                    All website users.
                </span>
            </div>
            <table class="table users">
                <thead>
                    <tr> <!-- 15 + 23 = 38 + 20 = 58 + 35 = 93 -->
                        <th scope="col" style="width: 20%">Name</th>
                        <th scope="col" style="width: 25%">Email</th>
                        <th scope="col" style="width: 13%">Role</th>
                        <th scope="col" style="width: 10%">State</th>
                        <th scope="col" style="width: 17%">Action</th>
                        <th scope="col" style="width: 15%">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(0, 10) as $x)
                        <tr>
                            <td>Benyamine Nedal</td>
                            <td>benyaminehkajsdjssgsgamm@gmail.com</td>
                            <td>
                                <select class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </td>
                            <td>
                                {{rand(0, 1) ? 'Activated': 'Not Activated'}}
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                                <button class="btn btn-success btn-sm">Activate</button>
                            </td>
                            <td>August 20, 2017</td>
                        </tr>
                    @endforeach
                </tbody>
            </table><!-- All Users -->
        </div>
    </div>
@endsection
