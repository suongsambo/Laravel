@extends('admin.sidebar.index')
@extends('admin.components.footer')
@extends('admin.components.containter')
@extends('admin.components.navbar')
@extends('admin.components.mainjQuery')
@extends('admin.components.mainCss')
<!DOCTYPE html>
<html>

<head>
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
        <h3><i class="fa fa-user"></i> User section</h3>
        @endsection

        @section('container-text')
        @section('main_content')
        <!-- Table -->
        <div class="card">
            <table class="table table-striped" id="app-data">


                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($list_users as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            @isset($item->profile)
                            <img src="{{url('storage',$item->profile)}}" alt="" width="64px">
                            @endisset
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->role}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->status}}</td>
                        <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
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