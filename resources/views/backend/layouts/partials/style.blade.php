<!-- App favicon -->
<link rel="shortcut icon" href="{{showImage($config->favicon)}}" >

<!-- jsvectormap css -->
<link href="{{ asset('backend/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Layout config Js -->
<script src="{{ asset('backend/assets/js/layout.js') }}"></script>
<!-- Bootstrap Css -->
<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="{{ asset('backend/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

<style>
    .cke_notification {
        display: none !important;
    }
</style>
@stack('styles')
