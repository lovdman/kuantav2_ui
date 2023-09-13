
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<style>

    /*.navbar {*/
    /*    background-color: #00a9ff !important;*/
    /*    border: 2px solid #00a9ff!important;*/
    /*}*/

    .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.75);
        font-size: 15px;
        position: relative;
        transition: all 0.4s;
        text-decoration: none;
    }

    .navbar-nav .nav-link:hover {
        color: #fff;
        text-decoration: underline;
    }
</style>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid bg-warning">
            <a class="navbar-brand" href="/">KUANTA</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href='#'>Profile</a>
                        {{--                    <a class="nav-link" href='{{route('profile', \Illuminate\Support\Facades\Auth::user()->id)}}'>Profile</a>--}}
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='{{route('capaian', "CT")}}'>KPI's Capaian</a>
{{--                        //menuju ke role beliau--}}
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='{{route('target', "CT")}}'>KPI's Target</a>
{{--                        //menuju ke role beliau--}}
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href='{{route('dashb', "CT")}}'>Dashboard</a>
                        {{--                        //menuju db--}}
                    </li>


{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            KPI's capaian--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="#">Role anda</a>--}}
{{--                            <a class="dropdown-item" href='#'>Creative Technology</a>--}}
{{--                            <a class="dropdown-item" href='#'>Kuanta Institute</a>--}}
{{--                            <a class="dropdown-item" href='#'>Operation</a>--}}
{{--                            <a class="dropdown-item" href='#'>Partnership</a>--}}
{{--                            <a class="dropdown-item" href='#'>School Design</a>--}}
{{--                            --}}{{--                        <a class="dropdown-item" href='{{route('kpisrole', \Illuminate\Support\Facades\Auth::user()->role)}}'>KPI's Role</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}



                </ul>
                <span class="nav-item me-2">
                <a class='nav-link' href="/logout">logout</a>
            </span>
            </div>
        </div>
    </nav>
