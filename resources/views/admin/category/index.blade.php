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
        <h3><i class="fa fa-chart-pie"></i>Category section</h3>
        @endsection

        @section('container-text')
        @section('main_content')
        <div class="card">
            <table class="table table-striped" id="app-data">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Icono</th>
                        <th>Name</th>
                        <th>Order</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#</td>
                        <td>Icono</td>
                        <td>Name</td>
                        <td>
                            <a href="#"><i class="fa fa-arrow-circle-down"></i></a>
                        </td>
                        <td><a href="#"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td>Icono</td>
                        <td>Name</td>
                        <td>
                            <a href="#"><i class="fa fa-arrow-circle-down"></i></a>
                            <a href="#"><i class="fa fa-arrow-circle-up"></i></a>
                        </td>
                        <td><a href="#"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td>Icono</td>
                        <td>Name</td>
                        <td>
                            <a href="#"><i class="fa fa-arrow-circle-down"></i></a>
                            <a href="#"><i class="fa fa-arrow-circle-up"></i></a>
                        </td>
                        <td><a href="#"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td>Icono</td>
                        <td>Name</td>
                        <td>
                            <a href="#"><i class="fa fa-arrow-circle-up"></i></a>
                        </td>
                        <td><a href="#"><i class="fa fa-trash fa-lg"></i></a></td>
                    </tr>
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