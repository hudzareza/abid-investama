<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="assets/img/logo.png" alt="">
            <h1 class="sitename">PT ABID INVESTAMA</h1>
        </a>

        @auth
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('dashboard')}}" class="active">Home</a></li>
                @if(Auth::user()->role->name === 'superadmin')
                <li><a href="{{ route('superadmin.dashboard') }}">Superadmin Dashboard</a></li>
                @endif
                <!-- <li><a href="">Gallery</a></li> -->
                <li class="dropdown"><a href="#"><span>Operational</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{route('income.add')}}">Income Report</a></li>
                        <li><a href="{{route('member.add')}}">Member Data</a></li>
                        <li><a href="{{route('schedule.add')}}">Schedule</a></li>
                        <li><a href="{{route('absensi.add')}}">Absensi</a></li>
                        <li><a href="{{route('monthly.add')}}">Monthly Budget</a></li>
                        <li><a href="{{route('patty.add')}}">Patty Cash</a></li>
                    </ul>
                </li>
                <!-- <li><a href="">Contact</a></li> -->
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <style>
            .dropdown-button {
                position: relative;
                display: inline-block;
            }

            .btn-getstarted {
                background-color: #4a90e2;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                display: flex;
                align-items: center;
            }

            .btn-getstarted:hover {
                background-color: #357ABD;
            }

            /* Sembunyikan dropdown secara default */
            .dropdown-menu {
                display: none;
                position: absolute;
                background-color: white;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                min-width: 150px;
                z-index: 1;
                border-radius: 5px;
            }

            /* Tampilkan dropdown saat parent di-hover */
            .dropdown-button:hover .dropdown-menu {
                display: block;
            }

            .dropdown-menu li {
                list-style: none;
            }

            .dropdown-item {
                display: block;
                padding: 10px;
                color: #333;
                text-align: left;
                border: none;
                background: transparent;
                cursor: pointer;
                width: 100%;
            }

            .dropdown-item:hover {
                background-color: #f0f0f0;
            }
        </style>
        <li class="dropdown-button">
            <button class="btn-getstarted" onclick="toggleDropdown()">
                <span>{{ Auth::user()->name }}</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </li>
            </ul>
        </li>

        @else
        <a class="btn-getstarted" href="{{ route('login') }}">Log In</a>
        @endauth


    </div>
</header>