@include('frontend.common.header_link')
@include('frontend.common.header')
<div class="container">
    <div class="col-sm-12 padding-right">
        <div class="features_items">
@yield('main_content')
        </div>
    </div>
</div>
@include('frontend.common.footer')