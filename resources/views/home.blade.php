@extends('layouts.app')

@section('content')
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}">Roles</a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}">User</a>
                </li>
                <li>
                    <a href="{{route('permissions.index')}}">Permission</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                @can('view-event')
                    <li>
                        <a href="#">Event</a>
                    </li>
                @endcan

                @can('view-service')
                    <li>
                        <a href="#">Services</a>
                    </li>
                @endcan
                @can('view-contact')
                    <li>
                        <a href="#">Contact</a>
                    </li>
                @endcan

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('main-content')

                    </div>
                </div>

            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection
