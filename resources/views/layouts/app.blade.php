<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="{{ request()->is('admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="bx bxs-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('keluhan*') ? 'active' : '' }}">
                <a href="{{ route('keluhan.index') }}">
                    <i class="bx bxs-objects-vertical-bottom"></i>
                    <span>Pengaduan dan Keluhan</span>
                </a>
            </li>
            <li class="{{ request()->is('keluhan/create') ? 'active' : '' }}">
                <a href="{{ route('keluhan.create') }}">
                    <i class="bx bx-notepad"></i>
                    <span>Input Data</span>
                </a>
            </li>
            <li class="{{ request()->is('petisi*') ? 'active' : '' }}">
                <a href="{{ route('petisi.index') }}">
                    <i class="bx bxs-message-dots"></i>
                    <span>Petisi dan Kampanye</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-log-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
