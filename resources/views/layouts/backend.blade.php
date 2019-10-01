<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ config('app.name') }}</title>

        <meta name="description" content="">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" id="css-main" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-theme" href="{{ mix('css/dashmix.css') }}">

        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
        <script src="{{ URL('https://unpkg.com/axios/dist/axios.min.js') }}"></script>

        {{--Quotes--}}
        {{--https://laraveldaily.teachable.com/courses/378499/lectures/5842594--}}

{{--        No need to add to include these, the template already has them --}}
{{--        <script src="{{ URL('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') }}"></script>--}}
{{--        <script src="{{ URL('//code.jquery.com/jquery-1.11.1.min.js') }}"></script>--}}

    </head>
    <body>
        <!-- Page Container -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-narrow">
            <!-- Side Overlay-->
{{--            <aside id="side-overlay">--}}
{{--                <!-- Side Header -->--}}
{{--                <div class="bg-image" style="background-image: url('{{ asset('media/various/bg_side_overlay_header.jpg') }}');">--}}
{{--                    <div class="bg-primary-op">--}}
{{--                        <div class="content-header">--}}
{{--                            <!-- User Avatar -->--}}
{{--                            <a class="img-link mr-1" href="javascript:void(0)">--}}
{{--                                <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">--}}
{{--                            </a>--}}
{{--                            <!-- END User Avatar -->--}}

{{--                            <!-- User Info -->--}}
{{--                            <div class="ml-2">--}}
{{--                                <a class="text-white font-w600" href="javascript:void(0)">George Taylor</a>--}}
{{--                                <div class="text-white-75 font-size-sm font-italic">Full Stack Developer</div>--}}
{{--                            </div>--}}
{{--                            <!-- END User Info -->--}}

{{--                            <!-- Close Side Overlay -->--}}
{{--                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->--}}
{{--                            <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">--}}
{{--                                <i class="fa fa-times-circle"></i>--}}
{{--                            </a>--}}
{{--                            <!-- END Close Side Overlay -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END Side Header -->--}}

{{--                <!-- Side Content -->--}}
{{--                <div class="content-side">--}}
{{--                    <p>--}}
{{--                        Content..--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <!-- END Side Content -->--}}
{{--            </aside>--}}
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="bg-header-dark">
                    <div class="content-header bg-white-10">
                        <!-- Logo -->
                        <a class="link-fx font-w600 font-size-lg text-white" href="/">
                            <span class="smini-visible">
                                <span class="text-white-75">RDCS</span>
                            </span>
                            <span class="smini-hidden">
                                <span class="text-white">Sylvester</span>
                            </span>
                        </a>
                        <!-- END Logo -->

                        <!-- Options -->
                        <div>
                            <!-- Toggle Sidebar Style -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                            <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                            </a>
                            <!-- END Toggle Sidebar Style -->

                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                                <i class="fa fa-times-circle"></i>
                            </a>
                            <!-- END Close Sidebar -->
                        </div>
                        <!-- END Options -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                                <i class="nav-main-link-icon si si-clock"></i>
                                <span class="nav-main-link-name">Dashboard</span>
{{--                                <span class="nav-main-link-badge badge badge-pill badge-success">5</span>--}}
                            </a>
                        </li>
                        <!-- Accounts -->
                        <li class="nav-main-heading">Accounts</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('accounts') ? ' active' : '' }}" href="/accounts">
                                <i class="nav-main-link-icon si si-people"></i>
                                <span class="nav-main-link-name">Accounts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('contacts') ? ' active' : '' }}" href="/contacts">
                                <i class="nav-main-link-icon si si-people"></i>
                                <span class="nav-main-link-name">Contacts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/">
                                <i class="nav-main-link-icon si si-location-pin"></i>
                                <span class="nav-main-link-name">Locations</span>
                            </a>
                        </li>
                        <!-- Sales & Quotes -->
                        <li class="nav-main-heading">Sales & Quotes</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('quotes') ? ' active' : '' }}" href="/quotes">
                                <i class="nav-main-link-icon si si-credit-card"></i>
                                <span class="nav-main-link-name">Quotes</span>
                            </a>
                        </li>
                        <!-- Financials -->
                        <li class="nav-main-heading">Financials</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('pricelevels') ? ' active' : '' }}" href="/price-levels">
                                <i class="nav-main-link-icon si si-equalizer"></i>
                                <span class="nav-main-link-name">Price Levels</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">More</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/">
                                <i class="nav-main-link-icon si si-globe"></i>
                                <span class="nav-main-link-name">Landing</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div>
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-dual mr-1" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search</span>
                        </button>
                        <!-- END Open Search Section -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div>
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">
                                    @if(Auth::check())
                                    {{ Auth::user()->name }}
                                    @endif
                                </span>
                                <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                                <div class="p-2">
                                    <a class="dropdown-item" href="{{ url('/logout') }}" document.getElementById('logout-form').submit();"> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-primary">
                    <div class="content-header">
                        <form class="w-100" action="/dashboard" method="POST">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                   </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary-darker">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-0">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                            <a class="font-w600" href="https://www.retailquip.com" target="_blank">RDCS</a> &copy; <span data-toggle="year-copy">2019</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Dashmix Core JS -->
        <script src="{{ mix('js/dashmix.app.js') }}"></script>

        <!-- Laravel Scaffolding JS -->
        <script src="{{ mix('js/laravel.app.js') }}"></script>

                {{--Laravel Data Tables--}}
        <script src="{{ URL('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ URL('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
        <script src="{{ URL('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
        <script src="{{ URL('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
        <script src="{{ URL('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

        <!-- Page JS Code -->
        <script src="{{ URL('js/pages/be_tables_datatables.min.js') }}"></script>

{{--        <!-- Page JS Plugins -->--}}
{{--        <!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->--}}
{{--        <!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->--}}
{{--        <script src="{{ URL::asset ('https://maps.googleapis.com/maps/api/js?key=AIzaSyAikFIJY1KeAAO-o180CqzNPp8mOgRvDMo') }}"></script>--}}
{{--        <script src="{{ URL::asset ('js/plugins/gmaps/gmaps.min.js') }}"></script>--}}

{{--        <!-- Page JS Code -->--}}
{{--        <script src="{{ URL::asset ('js/pages/be_comp_maps_google.min.js') }}"></script>--}}

        @yield('js_after')

        <!-- Google Maps for Accounts Page -->
        <script async defer src="{{ URL::asset ('https://maps.googleapis.com/maps/api/js?key=AIzaSyAikFIJY1KeAAO-o180CqzNPp8mOgRvDMo&callback=initMap') }}"></script>

    </body>
</html>
