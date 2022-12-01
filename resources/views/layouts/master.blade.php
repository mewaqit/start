<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
    <title>App Name - @yield('title','Default Title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content','My Contents as Default')
</div>
</body>
</html>
