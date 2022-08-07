<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMP MA'ARIF</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    SMP MA'ARIF
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="{{ asset('assets/dist/assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/scripts.bundle.js')}}"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="{{ asset('assets/dist/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="{{ asset('assets/dist/assets/js/custom/account/security/security-summary.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/account/security/license-usage.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/widgets.bundle.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/widgets.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/apps/chat/chat.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/intro.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-app.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/type.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/details.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/finance.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/complete.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/offer-a-deal/main.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/users-search.js')}}"></script>
	<!--end::Page Custom Javascript-->

	<!-- begin:: page SISWA JavaScript -->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="{{ asset('assets/dist/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js')}}"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js')}}"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js')}}"></script>
	<script src="https://cdn.amcharts.com/lib/5/radar.js')}}"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js')}}"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="{{ asset('assets/dist/assets/js/widgets.bundle.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/widgets.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/apps/chat/chat.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/intro.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-app.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/new-target.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/complete.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
	<script src="{{ asset('assets/dist/assets/js/custom/utilities/modals/users-search.js')}}"></script>
	<!--end::Page Custom Javascript(used by this page)-->
	<!--end::Page Custom Javascript-->
    <script>
        $(document).ready(function() {
            var data = [];
            for (var i = 0; i < 50000; i++) {
                data.push([i, i, i, i, i]);
            }
    
            $('#example').DataTable({
                data: data,
                deferRender: true,
                scrollY: 200,
                scrollCollapse: true,
                scroller: true
            });
            // $("#selectAll").click(function(){
            //     $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
            // // alert('asdas');
            // });
            $('#selectAll').click(function() {
                $('input[type="checkbox"]').prop('checked', this.checked);
            })
        });
    </script>
</body>
</html>
