<head>
    @include('component.import.import')
</head>
<body>
@include('component.header.header')
<div class="page-container">
    <div class="page-content">
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">
                @include('component.control.user-infor')
                @include('component.control.control')
            </div>
        </div>
        <div class="content-wrapper">
            @yield('content')
            @include('component.footer.footer')
        </div>
    </div>
</div>
<script>
    var token = '{{ Session::token() }}';
</script>
</body>