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

        @section('container-text')
        @section('main_content')

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