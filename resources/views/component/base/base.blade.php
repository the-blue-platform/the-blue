<head>
    @include('component.import.import')
</head>
<body class="navbar-bottom navbar-top sidebar-opposite-visible">
@include('component.header.header')
<div class="page-container">
    <div class="page-content">
        <div class="sidebar sidebar-main sidebar-default">
            <div class="sidebar-content">
                @include('component.control.user-infor')
                @include('component.control.control')
            </div>
        </div>
        <div class="content-wrapper">
            @yield('content')
{{--            @include('component.footer.footer')--}}
        </div>
        @yield('extend')
    </div>
</div>
<script>
    var token = '{{ Session::token() }}';
</script>
</body>