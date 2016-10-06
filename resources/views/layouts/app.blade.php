<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ trans('general.title') }}</title>

        {!! Html::style('assets/template/css/bootstrap.min.css') !!}
        {!! Html::style('assets/template/font-awesome/css/font-awesome.css') !!}

        <!-- Ladda style -->
        {!! Html::style('assets/template/css/plugins/ladda/ladda-themeless.min.css') !!}
        <!-- Toastr style -->
        {!! Html::style('assets/template/css/plugins/toastr/toastr.min.css') !!}
        <!-- Sweet Alert -->
        {!! Html::style('assets/template/css/plugins/sweetalert/sweetalert.css') !!}

        @yield('styles_before_custom_style')

        {!! Html::style('assets/template/css/animate.css') !!}
        {!! Html::style('assets/template/css/style.css') !!}

        {!! Html::style('assets/css/app.mapplics.css') !!}

        @yield('styles')
    </head>
    <body>
        <div id="wrapper">
            @include('partials.sidebar')

            <div id="page-wrapper" class="gray-bg">

                @if(isset($use_header))
                    {!! Html::header($use_header) !!}
                @else
                    {!! Html::header() !!}
                @endif

                @yield('content-header')

                <!-- Content Wrapper. Contains page content -->
                <div class="wrapper wrapper-content animated fadeInRight">
                    @yield('content')
                </div><!-- /.content-wrapper -->

                @include('partials.footer')

            </div>

            <!-- SPIN -->
            <div class="spinner-general overlay" style="display: none; z-index: 999999;">
                <div class="sk-spinner sk-spinner-fading-circle plus" style="height: 100px; width: 100px; ">
                    <div class="sk-circle1 sk-circle"></div>
                    <div class="sk-circle2 sk-circle"></div>
                    <div class="sk-circle3 sk-circle"></div>
                    <div class="sk-circle4 sk-circle"></div>
                    <div class="sk-circle5 sk-circle"></div>
                    <div class="sk-circle6 sk-circle"></div>
                    <div class="sk-circle7 sk-circle"></div>
                    <div class="sk-circle8 sk-circle"></div>
                    <div class="sk-circle9 sk-circle"></div>
                    <div class="sk-circle10 sk-circle"></div>
                    <div class="sk-circle11 sk-circle"></div>
                    <div class="sk-circle12 sk-circle"></div>
                </div>
            </div>
        </div><!-- ./wrapper -->

        <!-- Mainly scripts -->
        {!! Html::script('assets/template/js/jquery-2.1.1.js') !!}
        {!! Html::script('assets/template/js/bootstrap.min.js') !!}
        {!! Html::script('assets/template/js/plugins/metisMenu/jquery.metisMenu.js') !!}
        {!! Html::script('assets/template/js/plugins/slimscroll/jquery.slimscroll.min.js') !!}

        <!-- Custom and plugin javascript -->
        {!! Html::script('assets/template/js/inspinia.js') !!}
        {!! Html::script('assets/template/js/plugins/pace/pace.min.js') !!}

        {!! Html::script('assets/js/app.mapplics.js') !!}
        {!! Html::script('assets/js/app.validations.js') !!}

        <!-- Ladda -->
        {!! Html::script('assets/template/js/plugins/ladda/spin.min.js') !!}
        {!! Html::script('assets/template/js/plugins/ladda/ladda.min.js') !!}
        {!! Html::script('assets/template/js/plugins/ladda/ladda.jquery.min.js') !!}
        <!-- Toastr script -->
        {!! Html::script('assets/template/js/plugins/toastr/toastr.min.js') !!}
        <!-- Sweet alert -->
        {!! Html::script('assets/template/js/plugins/sweetalert/sweetalert.min.js') !!}

        <script>

        </script>
        @yield('scripts')
    </body>
</html>
