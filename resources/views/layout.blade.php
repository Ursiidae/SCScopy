{{--/**
 * created by: Blaise & Cassidy
 * contributors: Blaise & Cassidy
 * Date: 11/9/16
 * Time: 11:29 PM
 */--}}

        <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href= {{ asset('css/app.css') }}>
    <link rel="stylesheet" href= {{asset('css/containerStyle.css')}}>
    <script src={{asset('js/activeLinks.js')}}></script>
    <script src= {{ asset('js/app.js') }}></script>
</head>
<div id="mainContainer" class="container">
    <div class="row">
        <ul class="nav nav-tabs col-lg-12 col-md-12 hidden-sm hidden-xs">
            <li id="home" class="col-lg-6 col-md-6 "><a href= {{route('home')}}>Home</a></li>
            <li id="news" class="col-lg-2 col-md-2"><a href= {{ route('news') }}>News</a></li>
            <li id="projects" class="col-lg-2 col-md-2"><a href= {{route('projects')}}>Projects</a></li>
            <li id="about" class="col-lg-2 col-md-2"><a href= {{route('about')}}>About Us</a></li>
        </ul>

    </div>

    @yield('body')
</div>

</html>