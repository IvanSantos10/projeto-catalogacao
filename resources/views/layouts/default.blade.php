
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    @include('includes.navigation')
</nav>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    @include('includes.header')

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="services"></a>
@yield('content')
<!-- /.content-section-a -->

<a  name="contact"></a>
<div class="banner">
    @include('includes.banner')
</div>

<!-- /.banner -->

<!-- Footer -->
<footer>
    @include('includes.footer')
</footer>



<script src="{{asset('assets/js/js.js')}}"></script>

</body>

</html>
