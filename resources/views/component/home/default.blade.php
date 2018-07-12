<!DOCTYPE html>
<html>
<head>
    <title>The Blue</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css"/>
    <link href="/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css/core.css" rel="stylesheet" type="text/css">
    <link href="/css/components.css" rel="stylesheet" type="text/css">
    <link href="/css/colors.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/plugins/loaders/blockui.min.js"></script>

    <script type="text/javascript" src="/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="/js/core/app.js"></script>
</head>
<body>
@include('component.header.header')
<div class="container">
    @yield('content')
</div>
</body>
</html>