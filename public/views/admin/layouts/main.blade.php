<!DOCTYPE html>
<html lang="en">
<head>
{{--    Подключение стилей css--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админка</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset ('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset ('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/daterangepicker/daterangepicker.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                     <input class="btn btn-outline-primary" type="submit" value="Выйти">
                </form>
        </ul>
    </nav>
{{--    Боковая панель нахоится отдельно, для удобства--}}
@include('admin.includes.sidebar')
{{--    @yield используется для вывода содержимого секции с определенным именем.--}}
@yield('content')

    <footer class="main-footer">
        <strong>Blog</strong>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
{{--    Подключение стилей js--}}
<script src="{{asset ('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset ('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset ('plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset ('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset ('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset ('dist/js/adminlte.js')}}"></script>
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    $(function () {
        bsCustomFileInput.init();
    });
    $('.select2').select2()
</script>
<style>
    .custom-file-input:lang(en) ~.custom-file-label::after {
        content: "...";
    }
</style>
</body>
</html>
