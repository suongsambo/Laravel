@extends('admin.sidebar.index')
@extends('admin.components.footer')
@extends('admin.components.containter')
@extends('admin.components.navbar')
@extends('admin.components.mainjQuery')
@extends('admin.components.mainCss')
<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('mainCss')
    @endsection
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @section('navbar')
        @endsection
        @section('sidebars')
        @endsection

        @section('title')
        <h3><i class="fa fa-user-plus"></i>User Create</h3>
        @endsection

        @section('container-text')
        @section('main_content')

        <div class="container">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Horizontal Form</h3>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <form class="form-horizontal" action="/system/user" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select name="role" id="" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="inputEmail3"
                                    placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="password" type="password" class="form-control" id="inputPassword3"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Conform_Password</label>
                            <div class="col-sm-10">
                                <input name="conform_password" type="password" class="form-control" id="inputPassword3"
                                    placeholder="Conform Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" type="text" class="form-control" id="inputPassword3"
                                    placeholder="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input name="phone" type="text" class="form-control" id="inputPassword3"
                                    placeholder="phone">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Profile</label>
                            <div class="col-sm-10">
                                <input name="profile" type="file" class="form-control" id="inputPassword3"
                                    placeholder="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Sign in</button>
                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
        @endsection
        @endsection


        @section('footer')
        @endsection

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
</body>
@section('mainjQery')
@endsection

</html>