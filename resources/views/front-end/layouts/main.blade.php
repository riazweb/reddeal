@include('front-end.common.head')
<body>
@include('front-end.common.navigation')
<div class="container box"></div>
<div class="container box">


        @yield('content')

</div>
@include('front-end.common.footer')

@include('front-end.common.foot')