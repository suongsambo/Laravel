@extends('admin.layout.CssLinks')
@extends('admin.layout.jQueryLinks')
@extends('admin.sidebar.index')
@extends('admin.container.footer')
@extends('admin.container.index')
@extends('admin.container.navbar')

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


    @section('container')
    @endsection


    @section('footer')
    @endsection

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  @section('jQueryLink')
  @endsection
</body>

</html>