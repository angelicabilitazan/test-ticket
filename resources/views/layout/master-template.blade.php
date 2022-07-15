<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('layout.preloader-logo')
  @include('layout.navbar-layout')
  @include('layout.sidebar-layout')
  <div class="content-wrapper">
 @yield('content-header')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
@yield('contents')
      </div>
    </section>
  </div>
 @include('layout.footer-layout')
</div>
@yield('scripts')
</body>
</html>
